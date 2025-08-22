<?php
\Bitrix\Main\Loader::includeModule('iblock');
$aMenuLinks = [];


$dbCategories = CIBlockElement::GetList(
    ["NAME" => "ASC"], 
    [
        "IBLOCK_ID" => 9,
        "ACTIVE" => "Y" 
    ],
    false,
    false,
    ["ID", "CODE", "NAME"]
);


while ($category = $dbCategories->Fetch()) {
    $aMenuLinks[] = Array(
        $category['NAME'], 
        "/news/category/" . $category['CODE'], 
        Array(), 
        Array(), 
        "" 
    );
}
?>