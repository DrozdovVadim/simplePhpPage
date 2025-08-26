<?php

namespace php_interface;

include \CModule::IncludeModule("iblock");

class Filter
{
    public static function setLoginFilter()
    {
        array_push($GLOBALS["arrFilter"], ["ACTIVE" => "Y"]);
        global $USER;
        $isLogin = $USER->IsAuthorized();
        $isLogin ? null : array_push($GLOBALS['arrFilter'], ["PROPERTY_IS_LOGIN" => 0, "ACTIVE" => "Y"]);
        return $GLOBALS["arrFilter"];
    }

    public static function setCategoryFilter($id)
    {
        $category = \CIBlockElement::GetList(
            [],
            ["IBLOCK_ID" => 9, "CODE" => $id, "ACTIVE" => "Y"],
            false,
            false,
            ["ID"]
        )->Fetch();
        if ($category) {
            array_push($GLOBALS['arrFilter'], ["PROPERTY_CATEGORIES" => $category['ID']]);
        }
        return $GLOBALS["arrFilter"];
    }
}