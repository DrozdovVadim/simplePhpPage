
<div class="product-item <?php echo e($block); ?>">
	<a
		class="<?php echo e($block->elem('link')); ?>"
		href="<?php echo $item['DETAIL_PAGE_URL']; ?>"
		title="<?php echo $item['NAME']; ?>"
		data-entity="image-wrapper"
	>
		<span
			id="<?php echo $itemIds['PICT_SLIDER']; ?>"
			style="display: none"
			data-slider-interval="3000"
			data-slider-wrap="true"
		>
		
		</span>
		<img src="<?php echo e($item['PREVIEW_PICTURE']['SRC']); ?>" alt="">
		<span
			id="<?php echo e($itemIds['PICT']); ?>"
		>
		</span>
		<span
			class="product-item-image-alternative"
			id="<?php echo e($itemIds['SECOND_PICT']); ?>"
		>
		</span>
		<div
			class="product-item-label-text product-item-label-small product-item-label-top product-item-label-left"
			id="bx_3966226736_77_7e1b8e3524755c391129a9d7e6f2d206_sticker"
		>
			<span>
				<?php $__currentLoopData = $item['PROPERTIES']['ZHANR']['VALUE_ENUM']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zhanr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $zhanr; ?> /
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</span>
			<div>
				<span><?php echo $item['PROPERTIES']['PEREPLET']['VALUE_ENUM']; ?></span>
			</div>
		</div>
		<div
			class="product-item-image-slider-control-container"
			iid="<?php echo e($itemIds['PICT_SLIDER']); ?>_indicator"
			style="display: none"
		></div>
	</a>
	<div class="product-item-title">
		<a
			href="<?php echo $item['DETAIL_PAGE_URL']; ?>"
			title="<?php echo $item['NAME']; ?>"
		>
			<?php echo $item['NAME']; ?>

		</a>
	</div>
	<div
		class="product-item-info-container product-item-price-container"
		data-entity="price-block"
	>
		<span
			class="product-item-price-current"
			id="<?php echo e($itemIds['PRICE']); ?>"
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

	</div>
</div>
<?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/books/books-list-item/books-list-item.blade.php ENDPATH**/ ?>