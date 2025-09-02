
<div class="product-item {{ $block }}">
	<a class="{{ $block->elem('link') }}" href="{!! $item['DETAIL_PAGE_URL'] !!}" data-entity="image-wrapper">
		<span id="{!!$itemIds['PICT_SLIDER']!!}" style="display: none" data-slider-interval="3000" data-slider-wrap="true"></span>
		<span
			class="product-item-image-original {{ $block->elem('img') }}"
			id="{!!$itemIds['PICT']!!}"
			style="
				background-image: url({!!$item['DETAIL_PICTURE']['SRC']!!});
			"
		>
		</span>
		<span
			class="product-item-image-alternative {{ $block->elem('img') }}"
			id="{!!$itemIds['SECOND_PICT']!!}"
			style="
				background-image: url({!!$item['DETAIL_PICTURE']['SRC']!!});
			"
		>
		</span>
		<div class="product-item-label-text product-item-label-small product-item-label-top product-item-label-left {{ $block->elem('inf-wrapper') }}">
			<span class="{{ $block->elem('zhanr') }}">
				@foreach($item['PROPERTIES']['ZHANR']['VALUE_ENUM'] as $zhanr)
                    {!! $zhanr !!} /
                @endforeach
			</span><br>
				<span class="{{ $block->elem('pereplet') }}">{!!$item['PROPERTIES']['PEREPLET']['VALUE_ENUM']!!}</span>
		</div>
	</a>
	<div class="product-item-title {{$block->elem('title') }}">
		<a class="{{ $block->elem('title-link') }}" href="{!!$item['DETAIL_PAGE_URL']!!}">
			{!!$item['NAME']!!}
		</a>
	</div>
	<div class="product-item-info-container product-item-price-container"  data-entity="price-block">
		<span class="product-item-price-current" id="{{ $itemIds['PRICE'] }}">{{$price['UNROUND_PRICE']}} Руб.</span>
	</div>
	<!--div class="product-item-button-container">
		<a class="btn btn-link btn-md" id="{{ $itemIds['NOT_AVAILABLE_MESS'] }}" href="javascript:void(0)" rel="nofollow">
		Нет в наличии
		</a>
	</div-->


	<div class="product-item-info-container product-item-hidden {{ $block->elem('author-wrapper') }}" data-entity="props-block">
				<span>Автор: </span>{!! $item['DISPLAY_PROPERTIES']['AUTHOR']['DISPLAY_VALUE'] !!}</a>
		</dl>
	</div>
	<div class="product-item-info-container product-item-hidden" data-entity="buttons-block">
		<div class="product-item-button-container" id="{{ $itemIds['BASKET_ACTIONS'] }}">
			<a class="btn btn-default btn-md" id="{{ $itemIds['BUY_LINK'] }}" href="javascript:void(0)" rel="nofollow">В корзину</a>
		</div>
	</div>

</div>
