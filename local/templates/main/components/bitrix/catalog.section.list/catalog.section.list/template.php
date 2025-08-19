<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$strTitle = "";
?>
<div class="container">
	<h1 class="title">Новости</h1>
	<ul class="topics__wrapper">
	<?
	foreach($arResult["SECTIONS"] as $arSection):
	extract($arSection);
	?>
	<li>
		<a href="<? $SECTION_PAGE_URL ?>"><?= $NAME . " (" . $ELEMENT_CNT . ")"?></a>
	</li>
	<? endforeach;?>
	</ul>
</div>
<?=($strTitle?'<br/><h2>'.$strTitle.'</h2>':'')?>
