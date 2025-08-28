
<section class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        @if(empty($arResult))
            ''
        @else
            @for ($i = 0; $i < count($arResult); $i++)
                @if($i == count($arResult)-1)
                    <span class="{{ $block->elem('span') }}">{{$arResult[$i]['TITLE']}}</span>
                @else
                    <a class="{{ $block->elem('link') }}" href="{{$arResult[$i]['LINK']}}">{{ $arResult[$i]['TITLE'] }}</a>
                    <span class="{{ $block->elem('stick') }}">/</span>
                @endif
            @endfor
        @endif
    </div>
</section>
