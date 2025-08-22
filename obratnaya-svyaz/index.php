<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Форма обратной связи");
?><section>
<div class="container">
	<h1 class="title"><?php $APPLICATION->ShowTitle() ?></h1>
</div>
 </section><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"main.feedback",
	Array(
		"EMAIL_TO" => "drozdov.vadim.v.2003@gmail.com",
		"EVENT_MESSAGE_ID" => array("7"),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(),
		"USE_CAPTCHA" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>