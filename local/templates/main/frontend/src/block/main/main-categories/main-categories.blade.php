<div class="news__categories">
    Темы: 
    @if(!empty($arResult['NEWS_CATEGORIES']))                
        @foreach($arResult['NEWS_CATEGORIES'] as $category)
        <a href="/news/category/<?= $category["CODE"]?>"><?= $category['NAME'] ?></a><?= ($category !== end($arResult['NEWS_CATEGORIES'])) ? ', ' : '.' ?>
        @endforeach
    @endif
</div>