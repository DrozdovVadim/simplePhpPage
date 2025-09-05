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


<?
$formItems['inputs'] = [];
$formItems['radiobuttons'] = [];
$formItems['textarea'] = [];
$formItems['check'] = [];
$formItems['titles']['checkboxTitle'] = 'Выберете категорию';
$formItems['titles']['inputTitle'] = '';
$formItems['sendButton'] = [
    [
    'value' => 'Отправить',
    'template' => 'input-button',
    'id' => 'send-btn',
    ],
    
];
$formItems['inputs'] = [
    [
        'template' => 'input-text',
        'labelText' => 'Ваше имя',
        'name' => 'user_name',
        'placeholder' => '',
        'value' => '',
        'required' => '0',
        'type' => 'text',
        'data' => "Имя",
    ],
    [
        'template' => 'input-text',
        'labelText' => 'Ваш E-mail',
        'name' => 'user_email',
        'placeholder' => '',
        'value' => '',
        'required' => '0',
        'type' => 'email',
        'data' => "E-mail",
    ],
        [
        'template' => 'input-text',
        'labelText' => 'Ваш Номер телефона',
        'name' => 'TEL',
        'placeholder' => '',
        'value' => '',
        'required' => '0',
        'type' => 'tel',
        'data' => "Номер телефона",
        'pattern' => 'pattern=[0-9]*'
    ],
];
foreach($arResult['CATEGORIES']['ITEMS'] as $cat)
    {
    array_push($formItems['radiobuttons'], [
        'type' => 'radio',
        'labelText' => '',
        'required' => '0',
        'CODE' => $cat['CODE'],
        'ID' => $cat['ID'],
        'NAME' => $cat['NAME'],
        'name' => 'RADIO',
        'template' => 'input-radiobutton',
        'data' => "Категория",
    ]);
}
array_push($formItems['check'],
    [
    'text' => 'Нажимая кнопку "Отправить" я соглашаюсь на обработку персональных данных',
    'template' => 'input-checkbox',
    'required' => 1, 
    'id' => 'submitBtn', 
    'data' => "Чекбокс", 
    'name' => 'CHECK',
    ]);
    
array_push($formItems['textarea'], [
    'text' => 'Напишите сообщение',
    'template' => 'textarea',
    'required' => 1, 
    'data' => "Сообщение",  
]);   

     

$arResult['formItems'] = [];
foreach($formItems['inputs'] as $item) {
    array_push($arResult['formItems'], \TAO::frontend()->renderBlock('forms/forms-'. $item['template'], ['item' => $item]));
}
foreach($formItems['radiobuttons'] as $item) {
    array_push($arResult['formItems'], \TAO::frontend()->renderBlock('forms/forms-'. $item['template'], ['item' => $item]));
} 
foreach($formItems['textarea'] as $item) {
    array_push($arResult['formItems'], \TAO::frontend()->renderBlock('forms/forms-'. $item['template'], ['item' => $item]));
}  
foreach($formItems['check'] as $item) {
    array_push($arResult['formItems'], \TAO::frontend()->renderBlock('forms/forms-'. $item['template'], ['item' => $item]));
}
foreach($formItems['sendButton'] as $item) {
    array_push($arResult['formItems'], \TAO::frontend()->renderBlock('forms/forms-'. $item['template'], ['item' => $item]));
}

?>