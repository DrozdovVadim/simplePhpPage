<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
< class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(!empty($arResult["OK_MESSAGE"]))
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
    <div class="mf-name">
        <div class="mf-text">
            <?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
        </div>
        <input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
    </div>
    <div class="mf-email">
        <div class="mf-text">
            <?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
        </div>
        <input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
    </div>
     
    <div class="so_mf mf-phone">
        <div class="mf-text">
            Ваш телефон<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("RADIO", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
        </div>
		<?php foreach($arResult['CATEGORIES']['ITEMS'] as $cat): var_dump($cat);?>
				<div>
					<input id="id_<?= $cat['ID']?>" type="radio" name="RADIO" value="<?= $cat['ID']?>"> <label for="id_<?= $cat['ID']?>"><?= $cat['NAME']?></label>
				</div>
		<?php endforeach; ?>
    </div>
     
    
     
     
    <div class="mf-message">
        <div class="mf-text">
            <?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
        </div>
        <textarea name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
    </div>
 
    <?if($arParams["USE_CAPTCHA"] == "Y"):?>
    <div class="mf-captcha">
        <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
        <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
        <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
        <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
        <input type="text" name="captcha_word" size="30" maxlength="50" value="">
    </div>
    <?endif;?>
    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
 
<p>
    Нажимаю кнопку отправить, Вы соглашаетесь с <a target="_blank" href="http://mbugeu.ru/polzovatelskoe-soglashenie/">пользовательским соглашением</a>
</p>
 
     
    <input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
     
<p class="soAttention">
    <b>Внимание:</b> при указании недостоверных данных обращение рассмотрено не будет. 
</p>
 
</form>

</div>
