<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

$breadcrumbs = \TAO::frontend()->renderBlock(
	'main/main-breadcrumbs',
	['arResult' => $arResult]
);
return $breadcrumbs;
?>