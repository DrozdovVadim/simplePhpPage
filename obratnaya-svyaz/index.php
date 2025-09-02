<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
\TAO::frontendCss('forms');
\TAO::frontendJs('forms');
$APPLICATION->SetTitle("Форма обратной связи");
?><section>
<div class="container">
	<h1 class="title"><?php $APPLICATION->ShowTitle() ?></h1>
</div>
 </section>
 	<?$APPLICATION->IncludeComponent(
	"custom:main.feedback", "", Array(
	"EMAIL_TO" => "drozdov.vadim.v.2003@gmail.com",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => Array(
		"RADIO,"),	// Обязательные поля для заполнения
		"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

