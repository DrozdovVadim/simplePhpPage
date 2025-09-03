<div class="{{ $block }}">

<div class="mfeedback container">
@if(!empty($arResult["ERROR_MESSAGE"]))
	@foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
    @endforeach
@endif
@if(!empty($arResult["OK_MESSAGE"]))
	<div class="mf-ok-text">{{$arResult["OK_MESSAGE"]}}</div>
@endif
</div>
<form id='main-form' class="{{ $block->elem('form') }}" action="{{ $formAction }}" method="POST">
{!! bitrix_sessid_post() !!}
        <!-- @if(!empty($formItems['inputs']))
            @if(!empty($formItems['titles']['inputTitle']))
                <div class="{{ $block->elem('chechbox-title') }}">
                    {{ $formItems['titles']['inputTitle'] }}
                </div>
            @endif
            <div class="{{ $block->elem('inputs-wrapper') }}">
                @foreach($formItems['inputs'] as $input)
                    @php $template = $input['template']; @endphp
                {!! $renderer->renderBlock(
                    "forms/forms-".$template,
                    ['item' => $input]
                    ) !!}
                    
                @endforeach
            </div>
        @endif
        @if(!empty($formItems['radiobuttons']))
            @if(!empty($formItems['titles']['checkboxTitle']))
                <div class="{{ $block->elem('chechbox-title') }}">
                    {{ $formItems['titles']['checkboxTitle'] }}
                </div>
            @endif
            <div class="{{ $block->elem('checkboxes-wrapper') }}">
                @foreach($formItems['radiobuttons'] as $radiobutton)
                    @php $template = $radiobutton['template']; @endphp
                    {!! $renderer->renderBlock(
                        "forms/forms-".$template,
                        ['item' => $radiobutton]
                    ) !!}
                @endforeach
            </div>
        @endif
        
        <div>
            @if(!empty($formItems['textarea']))
                @foreach($formItems['textarea'] as $textarea)
                    @php $template = $textarea['template']; @endphp
                    {!!
                        $renderer->renderBlock(
                            'forms/forms-'.$template,
                            [
                            'item' => $textarea,
                            ]
                            ) 
                    !!}
                @endforeach
            @endif
        </div>
        
        <div>
            @if(!empty($formItems['check']))
                @foreach($formItems['check'] as $check)
                    @php $template = $check['template'];@endphp
                    {!! $renderer->renderBlock(
                            "forms/forms-".$template,
                            ['item' => $check]
                        ) !!}
                @endforeach
            @endif
        </div>
        

        @if(!empty($formItems['sendButton']))
            {!! $renderer->renderBlock(
                "forms/forms-input-button",
                ['item' => $formItems['sendButton'],]
            ) !!}
        @endif -->
        @foreach($arResult['formItems'] as $item)
        <div>
            {!! $item !!}
        </div>
            
        @endforeach
    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                
    </form>
</div>