
<div>
    @if(!empty($item['labelText']))
    <label for="">{{ $item['labelText'] }}</label>
@endif
<input type="{{ $item['type'] }}" placeholder="{{ $input['placeholder'] }}" name="{{ $item['name'] }}" {{$input['required'] ? 'required' : ''}}>
</div>