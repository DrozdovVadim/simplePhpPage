<?php
use Bitrix\Iblock\ElementTable;

if(!empty($arResult["PROPERTIES"]["CATEGORIES"]["VALUE"])){
    $arResult["NEWS_CATEGORIES"] = [];
    
    foreach($arResult["PROPERTIES"]["CATEGORIES"]["VALUE"] as $categoryId){
        $category = ElementTable::getList([
            'filter' => ['ID' => $categoryId],
            'select' => ['ID', 'NAME', 'CODE'] 
        ])->fetch();
        
        if($category){
            $arResult["NEWS_CATEGORIES"][] = [
                'NAME' => $category['NAME'],
                'CATEGORY_ID' => $categoryId,
                'CODE' => $category['CODE'] 
            ];
        }
    }
}
?>