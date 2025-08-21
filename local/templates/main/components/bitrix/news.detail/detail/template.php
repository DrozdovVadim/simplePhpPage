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
?>

<?php extract($arResult); 
?>
<section class="section news-detail__section">
	<div class="container">
		<div class="new">
            <h1 class="news-detail__title"><?= $NAME ?></h1>
            
            <div class="news-detail">
                <div class="news-detail__text">
                    <?php
                    $date = date("d.m.Y", strtotime($PROPERTIES["CREATION_DATE"]["VALUE"]));
                    ?>
                    <div class="news-item__date"><?=$date ?></div>
                    <h2 class="news-detail__announce"><?= $PREVIEW_TEXT ?></h2>
                    <img class="news-detail__img hidden-img" src="/assets/images/newsPhoto/<?= $SRC ?>" alt="newsPhoto">   
                    <div class="news-detail__content">
                        <?=$DETAIL_TEXT;?>
                    </div>
                    <div class="news__categories">
                        Темы: 
                        <?php if(!empty($NEWS_CATEGORIES)): ?>
                            <?php foreach($NEWS_CATEGORIES as $category): ?>
                                <a href="/news/category/<?= $category["CODE"]?>"><?= $category['NAME'] ?></a><?= ($category !== end($NEWS_CATEGORIES)) ? ', ' : '.' ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <a class="news-detail__link" href="/news/"><svg width="26" height="16"
                            viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.293015 8.70711C-0.0975094 8.31658 -0.0975094 7.68342 0.293014 7.2929L6.65698 0.928934C7.0475 0.538409 7.68067 0.538409 8.07119 0.928934C8.46171 1.31946 8.46171 1.95262 8.07119 2.34315L2.41434 8L8.07119 13.6569C8.46171 14.0474 8.46171 14.6805 8.07119 15.0711C7.68067 15.4616 7.0475 15.4616 6.65698 15.0711L0.293015 8.70711ZM26 9L1.00012 9L1.00012 7L26 7L26 9Z"
                                fill="#841844" />
                        </svg>
                        Назад к новостям</a>
                </div>
                <img class="news-detail__img" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                    alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>">


            </div>

        </div>
	</div>
</section>