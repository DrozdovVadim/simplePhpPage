<?php
\Bitrix\Main\Loader::includeModule('iblock');

$arResult['CATEGORIES']['CATEGORY_NAME'] = [];

$res = CIBlockElement::GetList(
    ["NAME" => "ASC"], 
    [
        "IBLOCK_ID" => 9,
        "ACTIVE" => "Y"
    ],
    false,
    false,
    ["ID", "NAME", "CODE"]
);

while ($category = $res->Fetch()) {
    $arResult['CATEGORIES']['ITEMS'][] = $category;
}

    if ($category) {
        $arResult['CATEGORIES']['CATEGORY_NAME'] = $category["NAME"];
    }

?>