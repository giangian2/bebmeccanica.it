<?php defined('_JEXEC') or die;



class ModJpVmAjaxSearchHelper {

	public static function searchdataAjax() {
	
		$baseurl =  JURI::Base();
		$input = JFactory::getApplication()->input;
		$moduleid = $input->get("moduleid");
		$language_tag = $input->get("language_tag");
		
		$searchword = $input->get("jpsearchword");
		$searchword	= trim($searchword);
		
		$db = JFactory::getDBO();
		$query = "SELECT * FROM #__modules WHERE id=".$moduleid;
		$db->setQuery($query);
		$module = $db->LoadObject();
		
		$params = new JRegistry(); 
		$params->loadString($module->params);
		
		$res_limit  = $params->get('product_count', 6);
		$cat_limit  = $params->get('cat_count', 3);
		$manu_limit  = $params->get('man_count', 3);
		$enter_action  = $params->get('enter_action', 1);
		$alignment  = $params->get('alignment', 'jp_search_left');
		$inputheight  = $params->get('inputheight', 50);
		
		if (!class_exists ('VmConfig')) 
		{
			require(JPATH_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_virtuemart' . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'config.php');
		}
		VmConfig::loadConfig();
		
		$langtag =  vmLanguage::getShopDefaultSiteLangTagByJoomla();
		$lang = strtolower($langtag);
		$lang = str_replace("-", "_", $lang);
		
		
		
		//VmConfig::loadJLang('com_virtuemart');
		$jlang = JFactory::getLanguage();
		$tag = $jlang->getTag();
		$jlang->load('', JPATH_ADMINISTRATOR,$tag,true);
		
		VmConfig::loadJLang('com_virtuemart', 1, $language_tag);
		//vmJsApi::jPrice();
		
		
		$jlang = JFactory::getLanguage();
		$extension = 'com_virtuemart';
		$base_dir = JPATH_SITE;
		$reload = true;
		$jlang->load($extension, $base_dir, $language_tag, $reload);
		
		
		$jlang = JFactory::getLanguage();
		$extension = 'mod_jp_vm_ajax_search';
		$base_dir = JPATH_SITE;
		$reload = true;
		$jlang->load($extension, $base_dir, $language_tag, $reload);
		
		$cus_products	= array();
		
		$db = JFactory::getDBO();
		$query  = "SELECT * FROM #__virtuemart_customs WHERE layout_pos='jp_vm_ajax_search'";
		$db->setQuery($query);
		$customsearch = $db->LoadObject();
		if(!empty($customsearch)) {
			$query  = "SELECT virtuemart_product_id FROM #__virtuemart_product_customfields WHERE virtuemart_custom_id =".$customsearch->virtuemart_custom_id." AND LOWER(customfield_value) LIKE '%".$searchword."%'";;
			$db->setQuery($query);
			$cus_products = $db->LoadColumn();
			
		}
		
		$where = " AND (";
		$sw_List	= explode(" ",$searchword);
		$cnt_List	= count($sw_List);
		if ($cnt_List > 1) $where .= " ( ";
		for ($i=0;$i<$cnt_List;$i++) {
			$word	= trim($sw_List[$i]);
			$word	= strtolower($word);
			if (empty($word)) continue;
			if ($i>0) $where .=" AND ";
			$where .= " LOWER(b.product_name) LIKE '%".$word."%' ";
		}
		if ($cnt_List > 1) $where .= " ) ";
		$where .= "  OR LOWER(a.product_sku) LIKE '%".$searchword."%'   OR LOWER(b.product_s_desc) LIKE '%".$searchword."%' ";
		if (count($cus_products) > 0) $where .= "  OR a.virtuemart_product_id in (".implode(",",$cus_products).")";
		$where .= " ) ";
		
		$query  = "SELECT * FROM #__virtuemart_products AS a LEFT OUTER JOIN  #__virtuemart_products_".$lang." AS b on a.virtuemart_product_id = b.virtuemart_product_id WHERE a.published = 1 ".$where;
		$db->setQuery($query);
		$products = $db->LoadObjectList("virtuemart_product_id");
		
		
		
		foreach ($products as $result) $cproduct_ids[]	= $result->virtuemart_product_id;
		
		// search ordering priority
		$query  = "SELECT `virtuemart_custom_id` FROM #__virtuemart_customs WHERE layout_pos='jp_vm_ajax_priority'";
		$db->setQuery($query);
		$priority_id = $db->loadResult();
			
		if ($priority_id > 0 && count($products)) {
			
			$query  = "SELECT `virtuemart_product_id` FROM `#__virtuemart_product_customfields` WHERE virtuemart_product_id IN (".implode(",",$cproduct_ids).") AND virtuemart_custom_id =".$priority_id." ORDER BY customfield_value ASC";
			$db->setQuery($query);
			$cf_products = $db->loadColumn();
			$empty_cf_products = array_diff($cproduct_ids, $cf_products);
			$cproduct_ids = array_merge($cf_products, $empty_cf_products);		
		}
		
		$cproduct_ids	= array_unique($cproduct_ids);
		$cproduct_ids 	= array_slice($cproduct_ids, 0, $res_limit, true);
		
		$query  = "SELECT * FROM #__virtuemart_categories as a LEFT OUTER JOIN #__virtuemart_categories_".$lang." AS b on a.virtuemart_category_id = b.virtuemart_category_id WHERE a.published = 1";
		$db->setQuery($query);
		$categories = $db->LoadObjectList();
		
		
		$query  = "SELECT * FROM #__virtuemart_manufacturers as a LEFT OUTER JOIN #__virtuemart_manufacturers_".$lang." AS b on a.virtuemart_manufacturer_id = b.virtuemart_manufacturer_id WHERE a.published = 1";
		$db->setQuery($query);
		$manufacturers = $db->LoadObjectList();
			
		$category_results  = array();
		/* categories Search Start */
		foreach($categories as $key => $cat)
		{
			 $catname = strtolower($cat->category_name);
			 $searchword = strtolower($searchword);
			 if(strpos($catname, $searchword) !== FALSE)
			 {
				 $category_results[] = $cat;
		
			 }
			
		}
	
		$manufacturer_results  = array();
		foreach($manufacturers as $key => $manu)
		{
			 $mf_name = strtolower($manu->mf_name);
			 $searchword = strtolower($searchword);
			 if(strpos($mf_name, $searchword) !== FALSE)
			 {
				 $manufacturer_results[] = $manu;
			 }
		}
	
		$pModel = VmModel::getModel('product');
		$cModel = VmModel::getModel('category');
		$mModel = VmModel::getModel('manufacturer');
	
		if (!class_exists('CurrencyDisplay'))
		require(VMPATH_ADMIN . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'currencydisplay.php');
		
		$currency = CurrencyDisplay::getInstance();
		
		echo '<div class="jp_closebar">';
		echo '<div class="jp_closebartitle"><span style="line-height:20px">'.JText::_('MOD_VM_AJAX_SEARCH_RESULTS').'</span></div>';
		echo '<a class="jp_closelink" href="javascript:void(0);" onclick="closesearchbar_'.$module->id.'();">X</a>';
		echo '</div><div style="clear:both"></div>';
		
		echo '<div class="jp_heading_bg"><h4 class="nomargin">'.JText::_('MOD_VM_AJAX_SEARCH_PRODUCTS_HEADING').'</h4></div>';
		echo '<div class="contentsss" style="padding:5px; overflow:auto; max-height:410px;" id="listproduct">';

		if (count($cproduct_ids) > 0) {
			echo '<table cellpadding="0" cellspacing="0" class="listtable" >';	
			foreach ($cproduct_ids as $product_id) {
				$result = $products[$product_id];
				
				
				$tmpProduct = $pModel->getProduct($result->virtuemart_product_id, true, true,true,1);
				$pModel->addImages($tmpProduct,1);
				$pricearray = $pModel->getPrice($product, 1);
				$productname= $result->product_name;
				$sku = $result->product_sku;
				
				for ($i=0;$i<$cnt_List;$i++) {
					$word	= trim($sw_List[$i]);
					$productname				= str_replace($word,"<b class='uk-text-success uk-alert-success'>".$word."</b>",$productname);
					$tmpProduct->product_sku	= str_replace($word,"<b class='uk-text-success uk-alert-success'>".$word."</b>",$tmpProduct->product_sku);
					$word	= ucfirst($sw_List[$i]);
					$productname	=	str_replace($word,"<b class='uk-text-success uk-alert-success'>".$word."</b>",$productname);
					$tmpProduct->product_sku	= str_replace($word,"<b class='uk-text-success uk-alert-success'>".$word."</b>",$tmpProduct->product_sku);
				}
					 
				 $productLink = JRoute::_('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $result->virtuemart_product_id . '&virtuemart_category_id=' . $tmpProduct->virtuemart_category_id);
				 
				 
				 $productLink = str_replace("modules/mod_jp_vm_ajax_search/", "", $productLink);
					 
					 
				   $salesPriceval =  $tmpProduct->prices['salesPrice'];
		
				   $salesPriceformated= $currency->priceDisplay($salesPriceval,0,1,false, $currency->_priceConfig[$salesPricename][1],$salesPricename );
					// strip text
					echo '<tr>';
					echo '<td>';
							if(!empty($tmpProduct->images[0]))
								{
									if($tmpProduct->images[0]->virtuemart_media_id > 0)
									{
		
									echo '<div class="jp_imagediv">';
									echo '<a href="'.$productLink.'" title="'.$tmpProduct->product_name.'">'; 
									echo '<img src="'.$baseurl.$tmpProduct->images[0]->file_url.'">';
									echo '</a>';
									echo '</div>';
									}
								}
						   echo '<div>';
						   echo '<a class="jp_link" href="'.$productLink.'">'.$productname.'</a>';
							if (!empty($tmpProduct->product_sku)) 
							{
								echo '<div class="jp_product_sku">';
								echo '<span class="">'.VmText::_('COM_VIRTUEMART_CART_SKU').': </span>';
								echo '<span itemprop="sku">'.$tmpProduct->product_sku.'</span>';
								echo '</div>';
							}
							echo '</div>';
					 echo '</td>';
					 echo '<td>';
						  echo '<div class="jp_pricediv">'.$salesPriceformated."</div>";
					echo '</td>';
					echo '</tr>';
				}
				echo '</table>';
			}
			else
			{
				 echo '<strong>'.JText::_("MOD_VM_AJAX_SEARCH_NO_RESULTS").'</strong>';
			}
			echo '</div>';
		
			
			echo '<div class="jp_heading_bg"><h4 class="nomargin">'.JText::_('MOD_VM_AJAX_SEARCH_CATEGORIES_HEADING').'</h4></div>';
			echo '<div style="padding:5px;">';
			// search results
			//$res_items = array();
			if (count($category_results) > 0) {
		
		
				echo '<ul class="jp_list_res">';
				$i = 1;
				foreach ($category_results as $result) {
					
		
					 $tmpcategory = $cModel->getCategory($result->virtuemart_category_id);
					 $cModel->addImages($tmpcategory);
					 
					 $category_name= $tmpcategory->category_name;
					 $sku = $result->product_sku;
					 
					 for ($j=0;$j<$cnt_List;$j++) {
						$word	= trim($sw_List[$j]);
						$category_name				= str_replace($word,"<b class='uk-text-success uk-alert-success'>".$word."</b>",$category_name);
						$word	= ucfirst($sw_List[$j]);
						$category_name	=	str_replace($word,"<b class='uk-text-success uk-alert-success'>".$word."</b>",$category_name);
					}
					 
					 $categoryURL = JRoute::_ ( 'index.php?option=com_virtuemart&view=category&virtuemart_category_id=' . $result->virtuemart_category_id );
					 $categoryURL = str_replace("modules/mod_jp_vm_ajax_search/", "", $categoryURL);
		
					 if($i > $cat_limit)
					 {
						  break;
					 }
					 $i++;
					 
				   $salesPriceval =  $tmpProduct->prices['salesPrice'];
		
				   $salesPriceformated= $currency->priceDisplay($salesPriceval,0,1,false, $currency->_priceConfig[$salesPricename][1],$salesPricename );
					 
		
					// strip text
					echo '<li>';
		
					   echo '<div class="">';
							if(!empty($tmpcategory->images[0]))
								{
									if($tmpcategory->images[0]->virtuemart_media_id > 0)
									{
									echo '<div  class="jp_imagediv">';
									echo '<a href="'.$categoryURL.'" title="'.$category_name.'">'; 
									echo '<img src="'.$baseurl.$tmpcategory->images[0]->file_url.'">';
									echo '</a>';
									echo '</div>';
									}
									
								}
						   echo '<div class="jp_padding_top">';
						   echo '<a class="jp-link " href="'.$categoryURL.'">'.$category_name.'</a>';
						   echo '</div>';
						   
					  echo '</div>';
					echo '</li>';
				}
				echo '</ul>';
			}
			else
			{
				 echo '<strong>'.JText::_("MOD_VM_AJAX_SEARCH_NO_RESULTS").'</strong>';
			}
			echo '</div>';
			
			
			echo '<div class="jp_heading_bg"><h4 class="nomargin">'.JText::_('MOD_VM_AJAX_SEARCH_MANUFACTURER_HEADING').'</h4></div>';
			echo '<div style="padding:5px;">';
			if (count($manufacturer_results) > 0) {
		
				echo '<ul class="jp_list_res">';
				$i = 1;
				foreach ($manufacturer_results as $result) {
					
					 $tmp_manu = $mModel->getManufacturer($result->virtuemart_manufacturer_id);
					 $mModel->addImages($tmp_manu,1);
					 
					 
					 $mf_name= $tmp_manu->mf_name;
					 $manufacturerURL = JRoute::_('index.php?option=com_virtuemart&view=category&virtuemart_manufacturer_id=' .$result->virtuemart_manufacturer_id , FALSE);
					 $manufacturerURL = str_replace("modules/mod_jp_vm_ajax_search/", "", $manufacturerURL);
					 
					  for ($j=0;$j<$cnt_List;$j++) {
						$word	= trim($sw_List[$j]);
						$mf_name				= str_replace($word,"<b class='uk-text-success uk-alert-success'>".$word."</b>",$mf_name);
						$word	= ucfirst($sw_List[$j]);
						$mf_name	=	str_replace($word,"<b class='uk-text-success uk-alert-success'>".$word."</b>",$mf_name);
					}
		
		
					 if($i > $manu_limit)
					 { 
						  break;
					 }
					 $i++;
		
					// strip text
					echo '<li>';
					   echo '<div class="">';
							if(!empty($tmp_manu->images[0]->file_url))
								{
									if($tmp_manu->images[0]->virtuemart_media_id > 0)
									{
									echo '<div class="jp_imagediv">';
									echo '<a href="'.$manufacturerURL.'" title="'.$mf_name.'">'; 
									echo '<img src="'.$baseurl.$tmp_manu->images[0]->file_url.'">';
									echo '</a>';
									echo '</div>';
									}
									
								}
						   echo '<div class="jp_padding_top">';
						   echo '<a class="jp_link " href="'.$manufacturerURL.'">'.$mf_name.'</a>';
						   
						   echo '</div>';
					 
					   echo '</div>';
					echo '</li>';
				}
				echo '</ul>';
			}
			else
			{
				 echo '<strong>'.JText::_("MOD_VM_AJAX_SEARCH_NO_RESULTS").'</strong>';
			}
			echo '</div>';
			exit;

	}
}