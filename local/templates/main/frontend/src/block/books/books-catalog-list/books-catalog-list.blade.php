@foreach($arResult['ITEMS'] as $item)
    <a href="{{ $item['DETAIL_PAGE_URL'] }}">
        <img src="{!! $item['PREVIEW_PICTURE']['SRC']!!}" alt="{{$item['ALT']}}">
        <p>{{$item['PREVIEW_TEXT']}}</p>
        <p>{!! $item['DISPLAY_PROPERTIES']['AUTHOR']['DISPLAY_VALUE'] !!}</p>
        <div>
            @foreach($item['PROPERTIES']['ZHANR']['VALUE_ENUM'] as $zhanr)
                <span>{{ $zhanr}}</span>
            @endforeach
        </div>
        <p>{{$item['PROPERTIES']['PEREPLET']['VALUE_ENUM']}}</p>
    </a><br><br>
@endforeach