<div class="{{ $block }}">
    <label class="{{ $block->elem('label') }}" for="">{{ $item['text'] }}</label>
    <textarea
    class="{{ $block->elem('textarea') }}"
    id="{{ $item['id'] ?? '' }}"
    value="{{ $item['value'] ?? '' }}"
    name="{{$item['name'] ?? ''}}"
    data-name="{{$item['data'] ?? '' }}"
    {{$item['required'] ?? ''}}
    onclick="{{$item['onclick'] ?? ''}}"

    ></textarea>
</div>