<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
IncludeTemplateLangFile(__FILE__);
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?$APPLICATION->ShowHead();?>
<?if (!isset($_GET["print_course"])):?>
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH."/print_style.css"?>" type="text/css" media="print" />
<?else:?>
	<meta name="robots" content="noindex, follow" />
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH."/print_style.css"?>" type="text/css" />
<?endif?>
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH."/assets/style/style.css"?>" type="text/css" />
<script src="<?=SITE_TEMPLATE_PATH."/js/imgshw.js"?>"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js" type="text/javascript"></script>
</head>
<title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>
	<?$APPLICATION->ShowPanel();?>
	<header class="section header">
    <div class="container header__container">
        <a href="/" class="header__logo-wrapper">
            <img src="<?=SITE_TEMPLATE_PATH."/assets/images/logo.png"?>" alt="logo">
            <p>Галактический<br>вестник</p>
        </a>
        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"topMenu", 
	array(
		"COMPONENT_TEMPLATE" => "topMenu",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
    </div>
</header>
	