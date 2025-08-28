<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/*global $USER;
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
/*$title = !empty($arResult['CATEGORIES']['CATEGORY_NAME']) 
    ? $arResult['CATEGORIES']['CATEGORY_NAME'] 
    : $arResult['NAME'];

$APPLICATION->SetTitle($title);
$this->setFrameMode(true);
?>
<div class="news-list">
<?php if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<? endif; 

?>
<section class="section news-section">
    <div class="container">
		<h1 class="title">

            <?= $arResult['CATEGORIES']['CATEGORY_NAME'] ? $arResult['CATEGORIES']['CATEGORY_NAME'] : $APPLICATION->ShowTitle() ?>
        </h1>

<div class="news-wrapper">
<?foreach($arResult["ITEMS"] as $arItem):?>

<?php
$DATE = date("d.m.Y", strtotime($arItem["PROPERTIES"]["CREATION_DATE"]["VALUE"]));
extract($arItem);
?>
<?php
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
	<a id="<?=$this->GetEditAreaId($ID);?>" href="/news/<?=$CODE?>" class="news-item">
        <div class="news-item__date"><?= $DATE ?></div>
        <h2 class="news-item__title"><?= $NAME ?></h2>
        <?= $PREVIEW_TEXT ?>
        <?= $PROPERTIES["IS_LOGIN"]["VALUE"]? "Для авторизованных" : "Для всех" ?>
        <div class="news-item__link">Подробнее <svg width="26" height="16" viewBox="0 0 26 16" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
            d="M0.293015 8.70711C-0.0975094 8.31658 -0.0975094 7.68342 0.293014 7.2929L6.65698 0.928934C7.0475 0.538409 7.68067 0.538409 8.07119 0.928934C8.46171 1.31946 8.46171 1.95262 8.07119 2.34315L2.41434 8L8.07119 13.6569C8.46171 14.0474 8.46171 14.6805 8.07119 15.0711C7.68067 15.4616 7.0475 15.4616 6.65698 15.0711L0.293015 8.70711ZM26 9L1.00012 9L1.00012 7L26 7L26 9Z"
            fill="#841844" />
            </svg>
		</div>
	</a>
<?php endforeach; ?>
</div>
    </div>
</section>
<?php if($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
	<br /><?=$arResult["NAV_STRING"] ?>
<?php endif;?>
</div>*/
?>
<?= \TAO::frontend()->renderBlock(
    'main/main-news-list',
    ["arResult" => $arResult,
     "APPLICATION" => $APPLICATION,
     "arParams" => $arParams, ]
    )
    ?>
