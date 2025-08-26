<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новостной портал");
?><section class="section">
<div class="container">
	<?= \TAO::frontend()->renderBlock(
	'main/title',
	[
		'titleText' => $APPLICATION->ShowTitle(),
	]
	)
	?>
	<h1 class="title"><?= $APPLICATION->ShowTitle() ?></h1>
	<div class="main__show-news">
 <a href="/news/">Посмотри наши новости</a>
	</div>
</div>
 </section>
<p>
</p>
 <a href="http://bitrix.drozdov/news/"></a><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>