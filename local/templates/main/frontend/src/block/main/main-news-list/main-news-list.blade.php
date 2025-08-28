<section class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        {!! $renderer->renderBlock(
            'main/main-title',
            ['titleText' => $APPLICATION->GetTitle(),]
            ) !!}
        <div class="{{ $block->elem('wrapper') }}">
            @foreach($arResult['ITEMS'] as $arItem)
                {!! $renderer->renderBlock(
                    'main/main-news-item',
                    ['arItem' => $arItem,]
                    ) !!}
            @endforeach

        </div>
    </div>
                @if($arParams["DISPLAY_BOTTOM_PAGER"])
	        <br />{!! $arResult["NAV_STRING"] !!}
            @endif
</section>