<div class="{{ $block }}">
    <input
    class="{{ $block->elem('input') }}"
    id="{{ $item['id'] ?? '' }}"
    value="{{ $item['value'] ?? '' }}"
    name="{{$item['name'] ?? ''}}"
    data-name="{{$item['data'] ?? '' }}"
    {{$item['required'] ?? ''}}
    onclick="{{$item['onclick'] ?? ''}}"
    type="{{$item['type'] ?? '' }}"
    > <label class="{{ $block->elem('label')}}" for="">{{ $item['NAME'] }}</label>
</div>
