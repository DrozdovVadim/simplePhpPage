<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle(""); ?><section>
<div class="container">
	<?$APPLICATION->IncludeComponent("bitrix:main.register", "registration", Array(
	"AUTH" => "Y",	// Автоматически авторизовать пользователей
		"REQUIRED_FIELDS" => array(	// Поля, обязательные для заполнения
			0 => "EMAIL",
		),
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_FIELDS" => array(	// Поля, которые показывать в форме
			0 => "EMAIL",
		),
		"SUCCESS_PAGE" => "/profile/",	// Страница окончания регистрации
		"USER_PROPERTY" => "",	// Показывать доп. свойства
		"USER_PROPERTY_NAME" => "",	// Название блока пользовательских свойств
		"USE_BACKURL" => "N",	// Отправлять пользователя по обратной ссылке, если она есть
	),
	false
);?>
</div>
 </section><? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>