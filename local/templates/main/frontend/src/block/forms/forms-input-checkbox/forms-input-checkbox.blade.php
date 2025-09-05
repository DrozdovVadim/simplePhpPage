<div class="{{$block}}">
    @foreach($formItems as $item)
    <div class="{{ $block->elem('input-wrapper') }}">
        <input class="{{ $block->elem('input') }}"
        type="checkbox"
        id="{{ $item['id'] ?? '' }}"
        value="{{ $item['value'] ?? '' }}"
        name="{{$item['name'] ?? ''}}"
        data-name="{{$item['data'] ?? '' }}"
        {{$item['required'] ?? ''}}
        onclick="{{$item['onclick'] ?? ''}}"
        {{ $item['checked'] ? 'checked' : ''}}
        {{ $item['disabled'] ? 'disabled' : ''}}
        > <label for="">{{ $item['text'] }}</label>
    </div>

    @endforeach
</div>