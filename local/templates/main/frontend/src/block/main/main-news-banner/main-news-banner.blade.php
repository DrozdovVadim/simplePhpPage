<section class="swiper {{ $block }}">
    <div class="swiper-wrapper {{ $block->elem('wrapper') }}">
        @foreach($arResult['ITEMS'] as $arItem)
            
            <a href="/news/{{ $arItem['CODE'] }}" class="swiper-slide {{ $block->elem('slide') }}">
                <img class="{{ $block->elem('img') }}" src="{{ $arItem['PREVIEW_PICTURE']['SRC']}}" alt="{{ $arItem['PREVIEW_PICTURE']['ALT'] }}">
                <div class="{{ $block->elem('text') }}">
                    <h2 class="{{ $block->elem('title') }}">{{ $arItem['NAME'] }}</h2>
                    {!! $arItem['PREVIEW_TEXT'] !!}
                </div>
            </a>
        @endforeach
    </div>
</section>