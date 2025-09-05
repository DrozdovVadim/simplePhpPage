
<div class="{{$block}}">
    @if(!empty($item['labelText']))
    <label class="{{ $block->elem('label') }}" for="">{{ $item['labelText'] }}</label>
@endif
<input class="{{ $block->elem('input') }}" type="{{ $item['type'] }}" placeholder="{{ $input['placeholder'] }}" data-name="{{ $item['data'] }}" name="{{ $item['name'] }}" {{$item['required'] ? 'required' : ''}} >
</div>