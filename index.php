<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новостной портал");
?><section class="section">
<div class="container">

	<?php print(\TAO::frontend()->renderBlock(
		'main/main-title',
		['titleText' => $APPLICATION->GetTitle(),]
	)); ?>

	<?php print(\TAO::frontend()->renderBlock(
	'main/main-button',
	['buttonText' => "Посмотри наши новости",
	 'buttonLink' => "/news/",
	]
	)); ?>

</div>
 </section>
<p>
</p>
 <a href="http://bitrix.drozdov/news/"></a><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>