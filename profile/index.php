<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Профиль");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth",
	Array(
		"COMPONENT_TEMPLATE" => "auth",
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "/profile/",
		"REGISTER_URL" => "",
		"SHOW_ERRORS" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>