

<nav class="{{ $block }}">
    <ul class="{{ $block->elem('list') }}">
        @php $previousLevel = 0 @endphp
        @foreach($arResult as $arItem)
            @if ($previousLevel && $arItem['DEPTH_LEVEL'] < $previousLevel)
                @php print(str_repeat("</ul></li>", ($previousLevel - $arItem['DEPTH_LEVEL']))) @endphp
            @endif
            @if ($arItem['IS_PARENT'])
                @if ($arItem['DEPTH_LEVEL'] == 1)
                    <li class="{{ $block->elem('list-item') }}"><a href="{{$arItem['LINK']}}" class="{{ $block->elem('item-text')}} @if ($arItem['SELECTED']) {{ $block->elem('root-selected') }} @else {{ $block->elem('root-item') }} @endif">{{$arItem['TEXT']}}</a>
                    <ul class="{{ $block->elem('child-list') }}">
                @else
                    <li @if ($arItem['SELECTED']) class="{{ $block->elem('item-selected') }}" @endif><a href="{{$arItem['LINK'] }}" class="parent">{{$arItem['TEXT']}}</a>
                        <ul>
                @endif
            @else 
                @if ($arItem['PERMISSION'] > 'D')
                    @if ($arItem['DEPTH_LEVEL'] == 1)
                        <li><a href="{{$arItem['LINK']}}" class="@if ($arItem['SELECTED']) {{ $block->elem('root-selected') }} @else {{ $block->elem('root-item') }} @endif">{{$arItem['TEXT']}}</a></li>
                    @else
                        <li @if ($arItem['SELECTED']) class="item-selected" @endif><a href="{{$arItem['LINK']}}">{{$arItem['TEXT']}}</a></li>
                    @endif
                @else
                    @if ($arItem['DEPTH_LEVEL'] == 1)
                        <li><a href="" class="@if ($arItem['SELECTED']) {{ $block->elem('root-selected') }} @else {{ $block->elem('root-item') }} @endif" title="@php GetMessage('MENU_ITEM_ACCESS_DENIED') @endphp">{{$arItem['TEXT']}}</a></li>
                    @endif
                @endif
            @endif
            @php $previousLevel = $arItem['DEPTH_LEVEL'] @endphp
        @endforeach
        {!! $auth !!}    
    </ul>
</nav>