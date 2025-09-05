<div class="{{ $block }}">
    <input
    class="{{ $block->elem('input') }}"
    type="submit"
    id="{{ $item['id'] ?? '' }}"
    value="{{ $item['value'] ?? '' }}"
    name="{{$item['name'] ?? ''}}"
    data-name="{{$item['data'] ?? '' }}"
    {{$item['required'] ?? ''}}
    onclick="{{$item['onclick'] ?? ''}}"
    >
</div>