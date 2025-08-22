<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
?>
<section class="section">
    <div class="container">
        <h1><?php $APPLICATION->ShowTitle()?></h1>
        <div class="main__show-news"><a class href="./pravila/">Наши Правила</a></div>
        <div class="main__show-news"><a href="./information/">Информация</a></div>  
    </div>
    
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>