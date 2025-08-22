<?php
\Bitrix\Main\Loader::includeModule('iblock');

$categoryCode = $_GET['category'];
$arResult['CATEGORIES']['CATEGORY_NAME'] = [];
if ($categoryCode) {
    $category = CIBlockElement::GetList(
        [],
        ["IBLOCK_ID" => 9, "CODE" => $categoryCode, "ACTIVE" => "Y"],
        false,
        false,
        ["ID", "NAME"]
    )->Fetch();
    }

    if ($category) {
        $arResult['CATEGORIES']['CATEGORY_NAME'] = $category["NAME"];
    }

?>