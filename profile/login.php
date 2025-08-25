<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>

<section class="section">
    <div class="container">
        <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth", 
	array(
		"COMPONENT_TEMPLATE" => "auth",
		"REGISTER_URL" => "",
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"SHOW_ERRORS" => "N"
	),
	false
);?>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>


