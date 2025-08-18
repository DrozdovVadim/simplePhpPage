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
<title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>
	<?= require_once("local/templates/main/header.php");?>
	