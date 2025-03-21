#
#<?php die("Forbidden."); ?>

2025-03-21 13:02:49 ERROR vmError: Plugin xml not found at /var/www/html/plugins/.xml, but raw /var/www/html/plugins///.xml&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/plugins/vmplugin.php(109): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/plugins/vmpsplugin.php(29): vmPlugin-&gt;__construct()
#2 /var/www/html/plugins/vmshipment/weight_countries/weight_countries.php(33): vmPSPlugin-&gt;__construct()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vdispatcher.php(237): plgVmShipmentWeight_countries-&gt;__construct()
&lt;/pre&gt;
2025-03-21 13:02:49 ERROR vmError: getVarsToPushByXML, Error parsing /var/www/html/plugins/.xml&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/plugins/vmplugin.php(232): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/plugins/vmpsplugin.php(45): vmPlugin::getVarsToPushByXML()
#2 /var/www/html/plugins/vmshipment/weight_countries/weight_countries.php(39): vmPSPlugin-&gt;getVarsToPush()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vdispatcher.php(237): plgVmShipmentWeight_countries-&gt;__construct()
&lt;/pre&gt;
2025-03-21 13:22:18 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;https://localhost/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(322): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(236): vmCrypt::getEncryptSafepath()
&lt;/pre&gt;
2025-03-21 13:22:18 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(638): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2025-03-21 13:22:18 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(642): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2025-03-21 13:45:21 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;https://localhost/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(322): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(236): vmCrypt::getEncryptSafepath()
&lt;/pre&gt;
2025-03-21 13:45:21 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(638): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2025-03-21 13:45:21 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(642): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2025-03-21 13:45:31 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;https://localhost/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(322): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(236): vmCrypt::getEncryptSafepath()
&lt;/pre&gt;
2025-03-21 13:45:31 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(638): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2025-03-21 13:45:31 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(642): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2025-03-21 14:57:54 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;https://localhost/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(322): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(236): vmCrypt::getEncryptSafepath()
&lt;/pre&gt;
2025-03-21 14:57:54 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(638): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2025-03-21 14:57:54 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(642): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2025-03-21 14:58:37 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;https://localhost/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(322): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(236): vmCrypt::getEncryptSafepath()
&lt;/pre&gt;
2025-03-21 14:58:37 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(638): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2025-03-21 14:58:37 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(642): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2025-03-21 15:20:05 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;https://localhost/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(322): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(236): vmCrypt::getEncryptSafepath()
&lt;/pre&gt;
2025-03-21 15:20:05 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(638): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2025-03-21 15:20:05 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/administrator/components/com_virtuemart/models/ratings.php(642): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2025-03-21 15:31:54 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;https://localhost/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/views/config/view.html.php(117): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcontroller.php(126): VirtuemartViewConfig-&gt;display()
&lt;/pre&gt;
2025-03-21 15:32:23 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;https://localhost/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/config.php(499): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/controllers/config.php(59): VirtueMartModelConfig-&gt;store()
#3 /var/www/html/libraries/src/MVC/Controller/BaseController.php(730): VirtuemartControllerConfig-&gt;save()
&lt;/pre&gt;
2025-03-21 15:32:29 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;https://localhost/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/views/config/view.html.php(117): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcontroller.php(126): VirtuemartViewConfig-&gt;display()
&lt;/pre&gt;
2025-03-21 15:33:58 ERROR vmError: Empty slug product with id 197, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:33:58 ERROR vmError: Empty slug product with id 160, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:33:58 ERROR vmError: Empty slug product with id 155, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:33:58 ERROR vmError: The product is no longer available; cart getProduct is empty&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/cart.php(2387): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/cart.php(2414): VirtueMartCart::getProduct()
#2 /var/www/html/components/com_virtuemart/helpers/cart.php(2661): VirtueMartCart-&gt;prepareCartData()
#3 /var/www/html/modules/mod_virtuemart_cart/mod_virtuemart_cart.php(73): VirtueMartCart-&gt;prepareAjaxData()
&lt;/pre&gt;
2025-03-21 15:33:58 ERROR vmError: The product is no longer available; prepareCartData virtuemart_product_id is empty&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/cart.php(2417): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/cart.php(2661): VirtueMartCart-&gt;prepareCartData()
#2 /var/www/html/modules/mod_virtuemart_cart/mod_virtuemart_cart.php(73): VirtueMartCart-&gt;prepareAjaxData()
#3 /var/www/html/libraries/src/Dispatcher/ModuleDispatcher.php(52): include(&#039;/var/www/html/m...&#039;)
&lt;/pre&gt;
2025-03-21 15:34:23 ERROR vmError: Empty slug product with id 197, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:34:23 ERROR vmError: Empty slug product with id 160, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:34:23 ERROR vmError: Empty slug product with id 155, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:34:43 ERROR vmError: Empty slug product with id 197, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:34:43 ERROR vmError: Empty slug product with id 160, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:34:43 ERROR vmError: Empty slug product with id 155, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:35:11 ERROR vmError: Empty slug product with id 197, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:35:11 ERROR vmError: Empty slug product with id 160, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:35:11 ERROR vmError: Empty slug product with id 155, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:36:15 ERROR vmError: Tried to load controller &quot;featured&quot; on base path &quot;/var/www/html/components/com_virtuemart&quot;. No File available VirtuemartControllerFeatured&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/virtuemart.php(126): vmError()
#1 /var/www/html/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once(&#039;/var/www/html/c...&#039;)
#2 /var/www/html/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#3 /var/www/html/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher-&gt;dispatch()
#4 /var/www/html/libraries/src/Application/SiteApplication.php(218): Joomla\CMS\Component\ComponentHelper::renderComponent()
&lt;/pre&gt;
2025-03-21 15:36:15 ERROR vmError: Empty slug product with id 197, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:36:15 ERROR vmError: Empty slug product with id 160, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:36:15 ERROR vmError: Empty slug product with id 155, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:39:37 ERROR vmError: Empty slug product with id 197, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:39:37 ERROR vmError: Empty slug product with id 160, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:39:37 ERROR vmError: Empty slug product with id 155, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:40:17 ERROR vmError: Empty slug product with id 197, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:40:17 ERROR vmError: Empty slug product with id 160, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:40:17 ERROR vmError: Empty slug product with id 155, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:41:22 ERROR vmError: Empty slug product with id 197, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:41:22 ERROR vmError: Empty slug product with id 160, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:41:22 ERROR vmError: Empty slug product with id 155, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:41:36 ERROR vmError: Empty slug product with id 197, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:41:36 ERROR vmError: Empty slug product with id 160, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:41:36 ERROR vmError: Empty slug product with id 155, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:46:42 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;https://localhost/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/views/config/view.html.php(117): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcontroller.php(126): VirtuemartViewConfig-&gt;display()
&lt;/pre&gt;
2025-03-21 15:47:00 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;https://localhost/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/config.php(499): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/controllers/config.php(59): VirtueMartModelConfig-&gt;store()
#3 /var/www/html/libraries/src/MVC/Controller/BaseController.php(730): VirtuemartControllerConfig-&gt;save()
&lt;/pre&gt;
2025-03-21 15:47:06 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;https://localhost/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/views/config/view.html.php(117): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcontroller.php(126): VirtuemartViewConfig-&gt;display()
&lt;/pre&gt;
2025-03-21 15:47:15 ERROR vmError: Empty slug product with id 197, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:47:15 ERROR vmError: Empty slug product with id 160, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:47:15 ERROR vmError: Empty slug product with id 155, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/administrator/components/com_virtuemart/models/product.php(2306): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(2235): VirtueMartModelProduct-&gt;getProducts()
&lt;/pre&gt;
2025-03-21 15:48:03 ERROR vmError: Plugin xml not found at /var/www/html/plugins/.xml, but raw /var/www/html/plugins///.xml&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/plugins/vmplugin.php(109): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/plugins/vmpsplugin.php(29): vmPlugin-&gt;__construct()
#2 /var/www/html/plugins/vmshipment/weight_countries/weight_countries.php(33): vmPSPlugin-&gt;__construct()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vdispatcher.php(237): plgVmShipmentWeight_countries-&gt;__construct()
&lt;/pre&gt;
2025-03-21 15:48:03 ERROR vmError: getVarsToPushByXML, Error parsing /var/www/html/plugins/.xml&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/plugins/vmplugin.php(232): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/plugins/vmpsplugin.php(45): vmPlugin::getVarsToPushByXML()
#2 /var/www/html/plugins/vmshipment/weight_countries/weight_countries.php(39): vmPSPlugin-&gt;getVarsToPush()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vdispatcher.php(237): plgVmShipmentWeight_countries-&gt;__construct()
&lt;/pre&gt;