<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (isset($arParams["TEMPLATE_THEME"]) && !empty($arParams["TEMPLATE_THEME"]))
{
	$arAvailableThemes = array();
	$dir = trim(preg_replace("'[\\\\/]+'", "/", __DIR__."/themes/"));
	if (is_dir($dir) && $directory = opendir($dir))
	{
		while (($file = readdir($directory)) !== false)
		{
			if ($file != "." && $file != ".." && is_dir($dir.$file))
				$arAvailableThemes[] = $file;
		}
		closedir($directory);
	}

	if ($arParams["TEMPLATE_THEME"] == "site")
	{
		$solution = COption::GetOptionString("main", "wizard_solution", "", SITE_ID);
		if ($solution == "eshop")
		{
			$templateId = COption::GetOptionString("main", "wizard_template_id", "eshop_bootstrap", SITE_ID);
			$templateId = (preg_match("/^eshop_adapt/", $templateId)) ? "eshop_adapt" : $templateId;
			$theme = COption::GetOptionString("main", "wizard_".$templateId."_theme_id", "blue", SITE_ID);
			$arParams["TEMPLATE_THEME"] = (in_array($theme, $arAvailableThemes)) ? $theme : "blue";
		}
	}
	else
	{
		$arParams["TEMPLATE_THEME"] = (in_array($arParams["TEMPLATE_THEME"], $arAvailableThemes)) ? $arParams["TEMPLATE_THEME"] : "blue";
	}
}
else
{
	$arParams["TEMPLATE_THEME"] = "blue";
}

$arParams["FILTER_VIEW_MODE"] = (isset($arParams["FILTER_VIEW_MODE"]) && mb_strtoupper($arParams["FILTER_VIEW_MODE"]) == "HORIZONTAL") ? "HORIZONTAL" : "VERTICAL";
$arParams["POPUP_POSITION"] = (isset($arParams["POPUP_POSITION"]) && in_array($arParams["POPUP_POSITION"], array("left", "right"))) ? $arParams["POPUP_POSITION"] : "left";

?>



<?php
$arResult['formItems'] =[];
$formItems = [];
$formItems['authors'] = [];
$formItems['buttons'] = [];

foreach($arResult['ITEMS'] as $items)
{
	$iName = $items['CODE'];
	$formItems[$iName] =[];
	foreach($items['VALUES'] as $item)
	{
		array_push($formItems[$iName], [
		'id' => $item['CONTROL_ID'],
		'value' => $item['HTML_VALUE'],
		'template' => 'input-checkbox',
		'text' => $item['VALUE'],
		'name' => $item['CONTROL_NAME'],
		'onclick' => 'onclick="smartFilter.click(this)',
		'checked' => $item['CHECKED'],
		'disabled' => $item['DISABLED'],
		]);
	}
	array_push($arResult['formItems'], \TAO::frontend()->renderBlock('forms/forms-'. $formItems[$iName][0]['template'], ['formItems' => $formItems[$iName],]));
}
array_push($formItems['buttons'], 
	[
		'type' => 'submit',
		'id' => 'set_filter',
		'name' => 'set_filter',
		'value' => GetMessage('CT_BCSF_SET_FILTER'),
		'template' => 'input-button',
	],
	[
		'type' => 'submit',
		'id' => 'del_filter',
		'name' => 'del_filter',
		'value' => GetMessage('CT_BCSF_DEL_FILTER'),
		'template' => 'input-button',
	],
);

$formItems['range'] = [];
array_push($formItems['range'],
	[
		'template' => 'input-range',
		'type' => 'range',
	]);
foreach($formItems['range'] as $item) {
    array_push($arResult['formItems'], \TAO::frontend()->renderBlock('forms/forms-'. $item['template'], ['item' => $item, 'key' => $arResult['ITEMS']['РУБЛИ']['ENCODED_ID']]));
}
foreach($formItems['buttons'] as $item) {
    array_push($arResult['formItems'], \TAO::frontend()->renderBlock('forms/forms-'. $item['template'], ['item' => $item]));
}


?>
