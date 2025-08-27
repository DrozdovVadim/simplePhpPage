<?
ob_start();
$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line", 
	"basket", 
	array(
		"HIDE_ON_BASKET_PAGES" => "Y",
		"PATH_TO_AUTHORIZE" => SITE_DIR."profile/login.php",
		"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
		"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",
		"PATH_TO_PROFILE" => SITE_DIR."profile/",
		"PATH_TO_REGISTER" => SITE_DIR."profile/reg.php",
		"POSITION_FIXED" => "N",
		"SHOW_AUTHOR" => "Y",
		"SHOW_EMPTY_VALUES" => "N",
		"SHOW_NUM_PRODUCTS" => "N",
		"SHOW_PERSONAL_LINK" => "Y",
		"SHOW_PRODUCTS" => "N",
		"SHOW_REGISTRATION" => "Y",
		"SHOW_TOTAL_PRICE" => "N",
		"COMPONENT_TEMPLATE" => "basket"
	),
	false
);
$auth = ob_get_clean();
?>

<?= \TAO::frontend()->renderBlock(
    'common/navigation-menu',
    ['arResult'=>$arResult,
	 'auth' => $auth,	
	]
    );
?>