<a class="{{ $block }}" href="/news/{{$arItem['CODE']}}">
        <div class="{{$block->elem('date')}}">{{ $arItem['PROPERTIES']['CREATION_DATE']['VALUE'] }} {{ $arItem['PROPERTIES']['IS_LOGIN']['VALUE'] ? "Для авторизованных" : "Для всех" }}</div>
        <h2 class="{{ $block->elem('title')}}">{{ $arItem['NAME']}}</h2>
        {!! $arItem['PREVIEW_TEXT'] !!}
        {!! $renderer->renderBlock(
            'main/main-news-button',
            ['text' => 'Подробнее']
            ) !!}
        
	</a>