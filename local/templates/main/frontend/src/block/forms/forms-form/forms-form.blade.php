<div class="{{ $block }}">

    <!-- <div id="feedback-message" class="{{ $block->elem('message-hidden') }}"></div> -->
    <form
    id="{{ $formId ?? ''}}"
    name = "{{ $name ?? '' }}"
    class="{{ $block->elem('form') }}"
    action="{{ $formAction ?? '' }}"
    method="{{ $method ?? '' }}">
        @if(!empty($hiddenFields))
        @foreach($hiddenFields as $i)
            <input type="hidden" name="{{ $i['name'] }}" id="{{ $i['id'] }}" value="{{ $i['value'] }}" />
        @endforeach
    @endif
    {!! bitrix_sessid_post() !!}
        @foreach($arResult['formItems'] as $item)
            {!! $item !!}
        @endforeach

    <!-- <input type="hidden" name="PARAMS_HASH" value="{{$arResult["PARAMS_HASH"]}}">     -->
    </form>
</div>


