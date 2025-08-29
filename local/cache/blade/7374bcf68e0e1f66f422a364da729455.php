
<div class="product-item">
	<a
		class="product-item-image-wrapper"
		href="<?php echo e($item['DETAIL_PAGE_URL']); ?>"
		title="<?php echo e($item['NAME']); ?>"
		data-entity="image-wrapper"
	>
		<span
			class="product-item-image-slider-slide-container slide"
			id="bx_3966226736_77_7e1b8e3524755c391129a9d7e6f2d206_pict_slider"
			style="display: none"
			data-slider-interval="3000"
			data-slider-wrap="true"
		>
		</span>
		<span
			class="product-item-image-original"
			id="bx_3966226736_77_7e1b8e3524755c391129a9d7e6f2d206_pict"
			style="
				background-image: url(<?php echo e($item['DETAIL_PICTURE']['SRC']); ?>);
			"
		>
		</span>
		<span
			class="product-item-image-alternative"
			id="bx_3966226736_77_7e1b8e3524755c391129a9d7e6f2d206_secondpict"
			style="
				background-image: url(<?php echo e($item['DETAIL_PICTURE']['SRC']); ?>);
			"
		>
		</span>
		<div
			class="product-item-label-text product-item-label-small product-item-label-top product-item-label-left"
			id="bx_3966226736_77_7e1b8e3524755c391129a9d7e6f2d206_sticker"
		>
			<div>
				<?php $__currentLoopData = $item['PROPERTIES']['ZHANR']['VALUE_ENUM']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zhanr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span><?php echo e($zhanr); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<div>
				<span title="Твердый"><?php echo e($item['PROPERTIES']['PEREPLET']['VALUE_ENUM']); ?></span>
			</div>
		</div>
		<div
			class="product-item-image-slider-control-container"
			id="bx_3966226736_77_7e1b8e3524755c391129a9d7e6f2d206_pict_slider_indicator"
			style="display: none"
		></div>
	</a>
	<div class="product-item-title">
		<a
			href="<?php echo e($item['DETAIL_PAGE_URL']); ?>"
			title="<?php echo e($item['NAME']); ?>"
		>
			<?php echo e($item['NAME']); ?>

		</a>
	</div>
	<div
		class="product-item-info-container product-item-price-container"
		data-entity="price-block"
	>
		<span
			class="product-item-price-current"
			id="bx_3966226736_77_7e1b8e3524755c391129a9d7e6f2d206_price"
		>
		</span>
	</div>
	<div
		class="product-item-info-container product-item-hidden"
		data-entity="props-block"
	>
		<dl class="product-item-properties">
			<dt>Автор</dt>
			<dd>
				<?php echo $item['DISPLAY_PROPERTIES']['AUTHOR']['DISPLAY_VALUE']; ?></a>
			</dd>
		</dl>
	</div>
	<div
		class="product-item-info-container product-item-hidden"
		data-entity="buttons-block"
	>
		<div class="product-item-button-container">
			<a
				class="btn btn-link btn-md"
				id="bx_3966226736_77_7e1b8e3524755c391129a9d7e6f2d206_not_avail"
				href="javascript:void(0)"
				rel="nofollow"
			>
				Нет в наличии
			</a>
		</div>
	</div>
</div>
<?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/books/books-list-item/books-list-item.blade.php ENDPATH**/ ?>