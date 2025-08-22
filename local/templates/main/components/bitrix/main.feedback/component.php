<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class CustomFeedbackForm extends CBitrixComponent
{
    public function executeComponent()
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        
        $this->arResult['SUCCESS'] = false;
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && check_bitrix_sessid() && $_POST['submit'] === 'Отправить') {
            $this->processForm();
        }
        
        $this->includeComponentTemplate();
    }
    
    private function processForm()
    {

        $categoryId = $_POST['RADIO'];
        $categoryName = '';
        
        if (!empty($categoryId)) {
            $res = CIBlockElement::GetByID($categoryId);
            if ($category = $res->Fetch()) {
                $categoryName = $category['NAME'];
            }
        }

        $arEventFields = array(
            "USER_NAME" => $_POST['user_name'],
            "USER_EMAIL" => $_POST['user_email'],
            "RADIO" => $categoryName,
            "RADIO_ID" => $categoryId,
            "MESSAGE" => $_POST['MESSAGE'],
            "PARAMS_HASH" => $_POST['PARAMS_HASH']
        );

        if (CEvent::Send("FEEDBACK_FORM", SITE_ID, $arEventFields)) {
            $this->arResult['SUCCESS'] = true;
        } else {
            $this->arResult['ERROR'] = 'Ошибка отправки';
        }
    }
}
?>