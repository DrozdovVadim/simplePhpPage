
<div class="bx-catalog-element bx-blue" id="<?php echo e($itemIds['ID']); ?>" itemscope="" itemtype="http://schema.org/Product">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<?php echo $renderer->renderBlock(
					'main/main-title',
					['titleText' => $arResult['NAME'],]
					); ?>

			</div>
		</div>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="product-item-detail-slider-container" id="<?php echo e($itemIds['BIG_SLIDER_ID']); ?>">
				<span class="product-item-detail-slider-close" data-entity="close-popup"></span>
				<div class="product-item-detail-slider-block
				" data-entity="images-slider-block">
					<span class="product-item-detail-slider-left" data-entity="slider-control-left" style="display: none;"></span>
					<span class="product-item-detail-slider-right" data-entity="slider-control-right" style="display: none;"></span>
					<div class="product-item-label-text product-item-label-big product-item-label-top product-item-label-left" id="<?php echo e($itemIds['BIG_SLIDER_ID']); ?>">
						<div>
							<span><?php echo e(implode(' / ', $arResult['PROPERTIES']['ZHANR']['VALUE_ENUM'])); ?></span>
						</div>
						<div>
							<span><?php echo e($arResult['PROPERTIES']['PEREPLET']['VALUE_ENUM']); ?></span>
						</div>
					</div>
					<div class="product-item-detail-slider-images-container" data-entity="images-container" style="cursor: zoom-in;">
						<div class="product-item-detail-slider-image active" data-entity="image" data-id="<?php echo e($arResult['DETAIL_PICTURE']['ID']); ?>">
							<img src="<?php echo e($arResult['DETAIL_PICTURE']['SRC']); ?>" alt="Братья Карамазовы" itemprop="image" data-title="Братья Карамазовы" style="background-image: url(&quot;<?php echo e($arResult['DETAIL_PICTURE']['SRC']); ?>&quot;);">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-item-detail-pay-block col-md-6 col-sm-12">
			<div class="product-item-detail-info-container">
					<div class="product-item-detail-price-current" id="<?php echo e($itemIds['PRICE_ID']); ?>" style="font-size: 30px;">
					<?php echo e($arResult['ITEM_PRICES'][0]['PRICE']); ?> Руб.</div>
			</div>
			<div class="product-item-detail-info-container" id="<?php echo e($itemIds['QUANTITY_LIMIT']); ?>">
				<div class="product-item-detail-info-container-title">
					Наличие:
					<span class="product-item-quantity" data-entity="quantity-limit-value">
					<?php echo e($arResult['PRODUCT']['QUANTITY']); ?>

					</span>
				</div>
			</div>
		<div data-entity="main-button-container">
		<div id="<?php echo e($itemIds['BASKET_ACTIONS_ID']); ?>" style="display: ;">
		<div class="product-item-detail-info-container">
		<a class="btn btn-default product-item-detail-buy-button" id="<?php echo e($itemIds['BUY_LINK']); ?>" href="javascript:void(0);">
		<span>Купить</span>
		</a>
		</div>
		</div>
		<div class="product-item-detail-info-container">
		<a class="btn btn-link product-item-detail-buy-button" id="<?php echo e($itemIds['NOT_AVAILABLE_MESS']); ?>" href="javascript:void(0)" rel="nofollow" style="display: none;">
		Нет в наличии</a>
		</div>
		</div>
		</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-md-9">
				<div class="row" id="<?php echo e($itemIds['TABS_ID']); ?>">
					<div class="col-xs-12">
						<div class="product-item-detail-tabs-container">
							<ul class="product-item-detail-tabs-list">
								<li class="product-item-detail-tab active" data-entity="tab" data-value="description">
									<a href="javascript:void(0);" class="product-item-detail-tab-link">
										<span>Описание</span>
									</a>
								</li>
								<li class="product-item-detail-tab" data-entity="tab" data-value="properties">
									<a href="javascript:void(0);" class="product-item-detail-tab-link">
										<span>Характеристики</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row" id="<?php echo e($itemIds['TAB_CONTAINERS_ID']); ?>">
					<div class="col-xs-12">
						<div class="product-item-detail-tab-content active" data-entity="tab-container" data-value="description" itemprop="description" id="<?php echo e($itemIds['DESCRIPTION_ID']); ?>">
							<p><?php echo e($arResult['DETAIL_TEXT']); ?></p>
						</div>
						<div class="product-item-detail-tab-content" data-entity="tab-container" data-value="properties" style="display: none;">
						<dl class="product-item-detail-properties">
							<dt><?php echo e($arResult['DISPLAY_PROPERTIES']['AUTHOR']['NAME']); ?></dt>
							<dd><?php echo $arResult['DISPLAY_PROPERTIES']['AUTHOR']['DISPLAY_VALUE']; ?></dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4 col-md-3">
			<div>
			</div>
		</div>
	</div>
	</div>

	<div class="product-item-detail-tabs-container-fixed hidden-xs" id="<?php echo e($itemIds['TABS_PANEL_ID']); ?>">
		<ul class="product-item-detail-tabs-list">
			<li class="product-item-detail-tab active" data-entity="tab" data-value="description">
				<a href="javascript:void(0);" class="product-item-detail-tab-link">
					<span>Описание</span>
				</a>
			</li>
			<li class="product-item-detail-tab" data-entity="tab" data-value="properties">
				<a href="javascript:void(0);" class="product-item-detail-tab-link">
					<span>Характеристики</span>
				</a>
			</li>
		</ul>
	</div>
</div><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/books/books-detail/books-detail.blade.php ENDPATH**/ ?>