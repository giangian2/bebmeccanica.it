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
2025-03-23 14:12:20 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;http://localhost:8080/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/views/config/view.html.php(117): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcontroller.php(126): VirtuemartViewConfig-&gt;display()
&lt;/pre&gt;
2025-03-23 16:00:53 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:00:53 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(361): vmJsApi::css()
&lt;/pre&gt;
2025-03-23 16:00:53 ERROR vmError: Warning, the Safe Path is &lt;b&gt;not accessible&lt;/b&gt; (does not exist or no permission). Use this link to the &lt;a href=&#039;http://localhost:8080/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(130): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(105): AdminUIHelper::writeVmm()
&lt;/pre&gt;
2025-03-23 16:00:53 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:00:53 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:00:53 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:00:53 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:00:53 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:00:53 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:00:53 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:00:53 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:01:01 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(881): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/components/com_virtuemart/virtuemart.php(96): vmJsApi::cssSite()
&lt;/pre&gt;
2025-03-23 16:01:01 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(881): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/components/com_virtuemart/virtuemart.php(96): vmJsApi::cssSite()
#3 /var/www/html/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(881): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/components/com_virtuemart/virtuemart.php(96): vmJsApi::cssSite()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(881): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/components/com_virtuemart/virtuemart.php(96): vmJsApi::cssSite()
#3 /var/www/html/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
#3 /var/www/html/administrator/components/com_virtuemart/models/product.php(3357): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(361): vmJsApi::css()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(45): vmJsApi::css()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(46): vmJsApi::css()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: Warning, the Safe Path is &lt;b&gt;not accessible&lt;/b&gt; (does not exist or no permission). Use this link to the &lt;a href=&#039;http://localhost:8080/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(130): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(105): AdminUIHelper::writeVmm()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(996): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(996): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/views/product/tmpl/default.php(52): vmJsApi::jDate()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:14 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(644): vmJsApi::css()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(204): VmTemplate::getTemplateById()
#2 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(140): VmTemplate::setTemplate()
#3 /var/www/html/components/com_virtuemart/views/category/view.html.php(389): VmTemplate::setVmTemplate()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: The chosen template couldnt be found on the filesystem: /var/www/html/templates/12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(240): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(140): VmTemplate::setTemplate()
#2 /var/www/html/components/com_virtuemart/views/category/view.html.php(389): VmTemplate::setVmTemplate()
#3 /var/www/html/components/com_virtuemart/controllers/category.php(61): VirtuemartViewCategory-&gt;display()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(73): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(73): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(73): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(712): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
#3 /var/www/html/components/com_virtuemart/sublayouts/products.php(20): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
#3 /var/www/html/components/com_virtuemart/sublayouts/products.php(93): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
#3 /var/www/html/components/com_virtuemart/sublayouts/products.php(97): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
#3 /var/www/html/components/com_virtuemart/sublayouts/products.php(118): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
#3 /var/www/html/components/com_virtuemart/sublayouts/products.php(123): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
#3 /var/www/html/components/com_virtuemart/sublayouts/addtocart.php(53): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmview.php(196): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(565): VmView::getVmSubLayoutPath()
#3 /var/www/html/components/com_virtuemart/sublayouts/addtocartbar.php(64): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(193): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(193): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(193): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(193): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(193): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(193): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:01:39 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(193): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/views/config/view.html.php(107): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcontroller.php(126): VirtuemartViewConfig-&gt;display()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/views/config/view.html.php(107): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmcontroller.php(126): VirtuemartViewConfig-&gt;display()
#3 /var/www/html/libraries/src/MVC/Controller/BaseController.php(730): VmController-&gt;display()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: Warning, the Safe Path is &lt;b&gt;not accessible&lt;/b&gt; (does not exist or no permission). Use this link to the &lt;a href=&#039;http://localhost:8080/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/views/config/view.html.php(117): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcontroller.php(126): VirtuemartViewConfig-&gt;display()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(361): vmJsApi::css()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(45): vmJsApi::css()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(318): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(46): vmJsApi::css()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: getTemplateById get Template failed for id: 12&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(99): vmError()
#1 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(41): VmTemplate::getTemplateById()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
&lt;/pre&gt;
2025-03-23 16:03:49 ERROR vmError: loadVmTemplateStyle failed: Could not load default template style&lt;pre&gt;#0 /var/www/html/components/com_virtuemart/helpers/vmtemplate.php(45): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(391): VmTemplate::loadVmTemplateStyle()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/vmjsapi.php(211): vmJsApi::setPath()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmviewadmin.php(87): vmJsApi::writeJS()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(73): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(73): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:09:52 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(73): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(73): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:12:06 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:14:44 ERROR vmError: Warning, the Safe Path is &lt;b&gt;not accessible&lt;/b&gt; (does not exist or no permission). Use this link to the &lt;a href=&#039;http://localhost:8080/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/views/config/view.html.php(117): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/vmcontroller.php(126): VirtuemartViewConfig-&gt;display()
&lt;/pre&gt;
2025-03-23 16:16:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/beb-101174/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
#3 /var/www/html/libraries/src/Cache/Controller/CallbackController.php(120): mod_virtuemart_product::displayProductsMod()
&lt;/pre&gt;
2025-03-23 16:16:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/beb-101174/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
&lt;/pre&gt;
2025-03-23 16:16:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/beb-101189/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
#3 /var/www/html/libraries/src/Cache/Controller/CallbackController.php(120): mod_virtuemart_product::displayProductsMod()
&lt;/pre&gt;
2025-03-23 16:16:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/beb-101189/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
&lt;/pre&gt;
2025-03-23 16:16:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/beb-101190/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
#3 /var/www/html/libraries/src/Cache/Controller/CallbackController.php(120): mod_virtuemart_product::displayProductsMod()
&lt;/pre&gt;
2025-03-23 16:16:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/beb-101190/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
&lt;/pre&gt;
2025-03-23 16:16:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/beb-101191/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
#3 /var/www/html/libraries/src/Cache/Controller/CallbackController.php(120): mod_virtuemart_product::displayProductsMod()
&lt;/pre&gt;
2025-03-23 16:16:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/beb-101191/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(73): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(73): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:19:50 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(73): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(73): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/categories.php(81): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/default.php(181): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:27:02 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/products.php(86): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:29:48 ERROR vmError: Warning, the Safe Path is &lt;b&gt;not accessible&lt;/b&gt; (does not exist or no permission). Use this link to the &lt;a href=&#039;http://localhost:8080/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(130): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(105): AdminUIHelper::writeVmm()
&lt;/pre&gt;
2025-03-23 16:30:02 ERROR vmError: Warning, the Safe Path is &lt;b&gt;not accessible&lt;/b&gt; (does not exist or no permission). Use this link to the &lt;a href=&#039;http://localhost:8080/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(130): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(105): AdminUIHelper::writeVmm()
&lt;/pre&gt;
2025-03-23 16:30:02 ERROR vmError: Path wrong to store invoices, folder invoices does not exist /mnt/disk/web/bebmeccanica.it/public_html/administrator/components/com_virtuemart/aTqNeuHmNp9qfXRSXkekF/invoices/&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/invoice.php(399): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/views/updatesmigration/tmpl/default_gdpr.php(5): VirtueMartModelInvoice::getInvoicePath()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/a...&#039;)
#3 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(240): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:34:38 ERROR vmError: Warning, the Safe Path is &lt;b&gt;not accessible&lt;/b&gt; (does not exist or no permission). Use this link to the &lt;a href=&#039;http://localhost:8080/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(130): ShopFunctions::getSafePathFor()
#3 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(105): AdminUIHelper::writeVmm()
&lt;/pre&gt;
2025-03-23 16:34:38 ERROR vmError: Path wrong to store invoices, folder invoices does not exist /mnt/disk/web/bebmeccanica.it/public_html/administrator/components/com_virtuemart/aTqNeuHmNp9qfXRSXkekF/invoices/&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/models/invoice.php(399): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/views/updatesmigration/tmpl/default_gdpr.php(5): VirtueMartModelInvoice::getInvoicePath()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/a...&#039;)
#3 /var/www/html/administrator/components/com_virtuemart/helpers/adminui.php(240): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006705/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006705/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006697/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006697/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006285/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006285/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0005841/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0005841/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0005839/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0005839/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0004618/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0004618/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0004617/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0004617/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0004388/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0004388/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0004045/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0004045/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0004040/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0004040/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003962/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003962/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003931/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003931/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003616/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003616/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003402/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003402/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003088/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003088/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0002926/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0002926/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0002847/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0002847/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0002622/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0002622/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0002553/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0002553/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/prestashop-9958/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/prestashop-9958/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/33084.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/33084.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: File not found /var/www/html/images/virtuemart/product/prestashop-9599/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-23 16:35:01 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/prestashop-9599/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(73): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/2.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/2.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/3.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/3.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/4.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/4.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/5.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/5.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/6.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/6.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/7.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/7.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/8.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/8.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/9.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/9.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/10.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:35:34 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/10.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(73): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/2.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/2.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/3.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/3.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/4.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/4.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/5.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/5.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/6.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/6.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/7.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/7.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/8.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/8.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/9.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/9.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/10.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default.php(77): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:36:04 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/10.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/productdetails/tmpl/bs5-default_images_additional.php(35): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-23 16:36:15 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0003078/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/views/cart/tmpl/bs5-default_cartpricelist.php(30): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/cart/tmpl/bs5-default.php(206): Joomla\CMS\MVC\View\HtmlView-&gt;loadTemplate()
&lt;/pre&gt;
2025-03-23 16:36:15 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0003078/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/views/cart/tmpl/bs5-default_cartpricelist.php(30): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/libraries/src/MVC/View/HtmlView.php(416): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 12:12:31 ERROR vmError: File not found /var/www/html/images/virtuemart/product/beb-101174/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
#3 /var/www/html/libraries/src/Cache/Controller/CallbackController.php(120): mod_virtuemart_product::displayProductsMod()
&lt;/pre&gt;
2025-03-24 12:12:31 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/beb-101174/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
&lt;/pre&gt;
2025-03-24 12:12:31 ERROR vmError: File not found /var/www/html/images/virtuemart/product/beb-101189/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
#3 /var/www/html/libraries/src/Cache/Controller/CallbackController.php(120): mod_virtuemart_product::displayProductsMod()
&lt;/pre&gt;
2025-03-24 12:12:31 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/beb-101189/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
&lt;/pre&gt;
2025-03-24 12:12:31 ERROR vmError: File not found /var/www/html/images/virtuemart/product/beb-101190/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
#3 /var/www/html/libraries/src/Cache/Controller/CallbackController.php(120): mod_virtuemart_product::displayProductsMod()
&lt;/pre&gt;
2025-03-24 12:12:31 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/beb-101190/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
&lt;/pre&gt;
2025-03-24 12:12:31 ERROR vmError: File not found /var/www/html/images/virtuemart/product/beb-101191/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
#3 /var/www/html/libraries/src/Cache/Controller/CallbackController.php(120): mod_virtuemart_product::displayProductsMod()
&lt;/pre&gt;
2025-03-24 12:12:31 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/beb-101191/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/modules/mod_virtuemart_product/tmpl/default.php(82): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/modules/mod_virtuemart_product/helper.php(66): require(&#039;/var/www/html/m...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-categories.php(40): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(67): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-categories.php(40): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-categories.php(40): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(67): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-categories.php(40): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 13:55:25 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-categories.php(40): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(67): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-categories.php(40): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-categories.php(40): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(67): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-categories.php(40): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:14:36 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-categories.php(40): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(67): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/manubri e semimanubri.png&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-categories.php(40): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-categories.php(40): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(67): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/category/image.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-categories.php(40): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006779/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006778/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006775/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006771/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006770/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006769/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006768/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006767/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006765/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006764/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006763/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006762/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006760/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006759/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006758/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006757/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006756/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006755/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006754/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006752/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006751/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006750/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006749/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: File not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(642): vmError()
#1 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#2 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
#3 /var/www/html/components/com_virtuemart/views/category/tmpl/bs5-default.php(179): shopFunctionsF::renderVmSubLayout()
&lt;/pre&gt;
2025-03-24 14:37:39 ERROR vmError: Couldnt create thumb, file not found /var/www/html/images/virtuemart/product/R2024-0006748/1.jpg&lt;pre&gt;#0 /var/www/html/administrator/components/com_virtuemart/helpers/image.php(194): vmError()
#1 /var/www/html/administrator/components/com_virtuemart/helpers/mediahandler.php(673): VmImage-&gt;createThumb()
#2 /var/www/html/components/com_virtuemart/sublayouts/bs5-products.php(84): VmMediaHandler-&gt;displayMediaThumb()
#3 /var/www/html/components/com_virtuemart/helpers/shopfunctionsf.php(569): include(&#039;/var/www/html/c...&#039;)
&lt;/pre&gt;