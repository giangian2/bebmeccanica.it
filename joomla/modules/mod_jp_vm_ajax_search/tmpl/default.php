<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_jp_vm_ajax_search
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;


$res_limit  = $params->get('product_count', 6);
$cat_limit  = $params->get('cat_count', 3);
$manu_limit  = $params->get('man_count', 3);
$enter_action  = $params->get('enter_action', 1);
$alignment  = $params->get('alignment', 'jp_search_left');
$inputheight  = $params->get('inputheight', 50);
$result_top_margin = $inputheight+5;

$jlang = JFactory::getLanguage();
$language_tag = $jlang->getTag();

$app = JFactory::getApplication();

$category_id = vRequest::getInt ('virtuemart_category_id', 0);

$menu = JFactory::getApplication()->getMenu();
$itemid = $menu->getDefault()->id;



// Including fallback code for the placeholder attribute in the search field.
JHtml::_('jquery.framework');
JHtml::_('script', 'system/html5fallback.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));

JHtml::script(Juri::base() . 'modules/mod_jp_vm_ajax_search/assets/jquery.mCustomScrollbar.js');
JHtml::stylesheet(Juri::base() . 'modules/mod_jp_vm_ajax_search/assets/jquery.mCustomScrollbar.css');
?>
<?php

if (!class_exists ('VmConfig')) 
{
	require(JPATH_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_virtuemart' . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'config.php');
}
VmConfig::loadConfig();
vmLanguage::loadJLang('com_virtuemart');
$langtag =  vmLanguage::getShopDefaultSiteLangTagByJoomla();
$lang = strtolower($langtag);
$lang = str_replace("-", "_", $lang);

?>
<style type="text/css">
.jp_product_sku
{
	font-size:12px;
	line-height:1.5;
}
#loaddiv
{
	text-align:center;
}
.jp_padding_top
{
	padding-top:15px;
}
.jp_pricediv
{
	width:75px;
	text-align:right;
	font-weight:bold;
}
.jp_imagediv
{
	float:left;
	margin-right:10px;
	height:50px;
	text-align:center;
	width:75px;
}
.jp_imagediv img
{
height: 100%;
width: auto;
max-width: 75px !important;
}
strong
{
	line-height:18px;
}
.listtable
{
width:100%;
}
.listtable td
{
	border-bottom:1px solid;
	padding:5px;
}
.nomargin
{
 margin:0px !important;
}
.jp_largewidth
{

	position: relative;
	max-width: 100%;
	vertical-align: middle;
}
.dropdownsearch{
  padding:0px !important;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: hidden;
  border-radius:0px !important;
  width:450px;
  max-width:100%;
  left: 0;
  z-index: 1;
  transition: visibility 0s, opacity 0.5s linear;
}

.show {display: block;}
.jp_closebar 
{

	background:#000;
	color:#fff !important;
	float:left;
	width:100%;
}
.jp_closebartitle
{
	font-weight:bold;
	float:left;
	padding:2px 5px;
}
.jp_closelink
{
	float:right;
	line-height:18px;
	margin-right: 5px;
	padding:3px 5px;
}
.jp_closebar a, .jp_closebar a:hover
{
	color:#fff !important;
}
.jp_heading_bg h4
{
	color:#fff !important;
}
.jp_heading_bg
{
	background:#333;
	color:#fff !important;
	padding:10px;
}
@media only screen and (min-width: 768px) {
	#jp_search_res_div, .dropdownsearch
	{
		max-width:none !important;
	}
	
}
.jp_searchinput
{
	width:250px !important;
	margin:0 auto;
}

@media only screen and (max-width: 768px) {
    .jp_searchinput
	{
		width:100% !important;
	}
}


#jp_search_res_div
{
	text-align:left;
}
	
div.mod_search63 input[type="search"]
{
	width:100% 	!important;
}
.tm-page
{
	z-index:10;
}
.jp_list_res
{
	padding:0 10px;
	margin-bottom:0px;
}
.jp_list_res li
{
	list-style:none;
	margin-bottom:5px;
	padding-bottom:5px;
	border-bottom:1px solid;
	min-height:50px;
}
#jp_search_res_div a, #jp_search_res_div span
{
	line-height:20px;
}
#jp_input_div
{
	display: inline-block;
	width: 100%;
	position: relative;
	max-width:250px;
}
.jp_search_right #jp_input_div
{
float:right;
}
.jp_search_left #jp_input_div
{
float:left;
}
.jp_search_right .dropdownsearch
{
	right:0 !important;
	left:auto !important;

}
.jp_search_center #jp_search_res_div
{
	width:450px;
	display:inline-block;
}
.jp_search_center
{
  text-align:center;
}
#jp_search_word_<?php echo $module->id; ?>
{
	height: <?php echo $inputheight; ?>px !important;
}
#jp_search_button_<?php echo $module->id; ?>
{
	  width:<?php echo $inputheight; ?>px !important;
	  height:<?php echo $inputheight; ?>px !important;
}
.jp_searchform
{
	height:<?php echo $inputheight; ?>px !important;
	margin:0 0 8px 0 !important;
}
.jp_search_input
{ 
	padding: 0px 0px 0px 8px !important;
	border: 1px solid #efefef !important;
	width:240px;
}
.jp_search_button
{
  position:absolute;
  background:#000000 !important;
  border:1px none !important;
  right:0px;
  top:0px;
}
.jp_spinner > * {
    animation: uk-spinner-rotate 1.4s linear infinite;
}
</style>
<script type="text/javascript">
window.siteurl = "<?php echo JURI::Base(); ?>";
<?php
if($enter_action != 1)
{
	?>
	jQuery(document).ready(function(e) {
		jQuery('#jp_search_word_<?php echo $module->id; ?>').keypress(function(event){
			var keycode = (event.keyCode ? event.keyCode : event.which);
			if(keycode == '13'){

			}
		});
    });
	<?php
}
else
{
	?>
	jQuery(document).ready(function(e) {
		jQuery('#jp_search_word_<?php echo $module->id; ?>').keypress(function(event){
			var keycode = (event.keyCode ? event.keyCode : event.which);
			if(keycode == '13'){
				return false;
			}
		});
    });
	<?php
}
?>
function closesearchbar_<?php echo $module->id; ?>()
{

	jQuery(".dropdownsearch").hide();
	
}

function searchajax_<?php echo $module->id; ?>()
{
	
	searchinput = jQuery("#jp_search_word_<?php echo $module->id; ?>").val();
	if(searchinput.length > 2)
	{

		jQuery("#dropdownsearch_<?php echo $module->id; ?> #loaddiv").show();
	    jQuery("#dropdownsearch_<?php echo $module->id; ?>").slideDown();
		jQuery("#dropdownsearch_<?php echo $module->id; ?> #results").html("");
		async: false,
		jQuery.ajax({ 
				type: "POST",
				cache: false,
				url: window.siteurl + "index.php?option=com_ajax&module=jp_vm_ajax_search&format=json&method=searchdata&jpsearchword="+searchinput+"&moduleid=<?php echo $module->id; ?>&language_tag=<?php echo $language_tag; ?>"
			}).done(
			function (data, textStatus){
				
				
				
				jQuery("#dropdownsearch_<?php echo $module->id; ?> #results").html(data);
				jQuery("#dropdownsearch_<?php echo $module->id; ?>  #results").show();
				

				jQuery("#dropdownsearch_<?php echo $module->id; ?> .contentsss").mCustomScrollbar({
				   theme:"dark"
				});

				jQuery("#dropdownsearch_<?php echo $module->id; ?>  #loaddiv").hide();
			});
	}
	else
	{
		jQuery("#dropdownsearch_<?php echo $module->id; ?>  #results").html("");
		//jQuery("#results").hide();
		jQuery("#dropdownsearch_<?php echo $module->id; ?>  #loaddiv").hide();
		jQuery("#dropdownsearch_<?php echo $module->id; ?>").hide();

	}
}
</script>
<?php
$itemidval = $itemid > 0 ? $itemid : $app->input->getInt('Itemid'); 
?>
<div class="jp_vmajaxsearch_div search" style="">
	<form action="<?php echo JRoute::_('index.php?option=com_virtuemart&view=category&search=true&limitstart=0&virtuemart_category_id=0&Itemid='.$itemidval); ?>" method="get" class="jp_searchform <?php echo $alignment; ?>" role="search" name="searchform">
         <div id="jp_input_div">
            <input autocomplete="off" onkeyup="searchajax_<?php echo $module->id; ?>();"  name="keyword" id="jp_search_word_<?php echo $module->id; ?>" class="jp_search_input" type="text" placeholder="<?php echo JText::_("MOD_VM_AJAX_SEARCH_INPUT"); ?>" />
            <button id="jp_search_button_<?php echo $module->id; ?>" class="jp_search_button" onclick="searchajax_<?php echo $module->id; ?>()">
            	<img src="modules/mod_jp_vm_ajax_search/images/search.png" />
            </button>
        </div>
      
        
        </form>

        
      <div class="<?php echo $alignment; ?>" style="line-height:0">
		   <div id="jp_search_res_div" class="jp_largewidth">
                <div id="dropdownsearch_<?php echo $module->id; ?>" class="dropdownsearch" > 
                      <div id="loaddiv" class="" style="display:none;">
                           <img src="modules/mod_jp_vm_ajax_search/images/loader.gif"/>
                      </div>
                      <div id="results" style="display:none">
                      </div>
                </div>
            </div>
        </div>
 

</div>
<div style="clear:both"></div>