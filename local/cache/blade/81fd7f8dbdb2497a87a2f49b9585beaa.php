
<div class="product-item <?php echo e($block); ?>">
	<a class="<?php echo e($block->elem('link')); ?>" href="<?php echo $item['DETAIL_PAGE_URL']; ?>" data-entity="image-wrapper">
		<span id="<?php echo $itemIds['PICT_SLIDER']; ?>" style="display: none" data-slider-interval="3000" data-slider-wrap="true"></span>
		<span
			class="product-item-image-original <?php echo e($block->elem('img')); ?>"
			id="<?php echo $itemIds['PICT']; ?>"
			style="
				background-image: url(<?php echo $item['DETAIL_PICTURE']['SRC']; ?>);
			"
		>
		</span>
		<span
			class="product-item-image-alternative <?php echo e($block->elem('img')); ?>"
			id="<?php echo $itemIds['SECOND_PICT']; ?>"
			style="
				background-image: url(<?php echo $item['DETAIL_PICTURE']['SRC']; ?>);
			"
		>
		</span>
		<div class="product-item-label-text product-item-label-small product-item-label-top product-item-label-left <?php echo e($block->elem('inf-wrapper')); ?>">
			<span class="<?php echo e($block->elem('zhanr')); ?>">
				<?php $__currentLoopData = $item['PROPERTIES']['ZHANR']['VALUE_ENUM']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zhanr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $zhanr; ?> /
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</span><br>
				<span class="<?php echo e($block->elem('pereplet')); ?>"><?php echo $item['PROPERTIES']['PEREPLET']['VALUE_ENUM']; ?></span>
		</div>
	</a>
	<div class="product-item-title <?php echo e($block->elem('title')); ?>">
		<a class="<?php echo e($block->elem('title-link')); ?>" href="<?php echo $item['DETAIL_PAGE_URL']; ?>">
			<?php echo $item['NAME']; ?>

		</a>
	</div>
	<div class="product-item-info-container product-item-price-container" style="display:none;" data-entity="price-block">
		<span class="product-item-price-current" id="<?php echo e($itemIds['PRICE']); ?>"></span>
	</div>
	<div class="product-item-info-container product-item-hidden <?php echo e($block->elem('author-wrapper')); ?>" data-entity="props-block">
				<span>Автор: </span><?php echo $item['DISPLAY_PROPERTIES']['AUTHOR']['DISPLAY_VALUE']; ?></a>
		</dl>
	</div>

</div>
<?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/books/books-product-item/books-product-item.blade.php ENDPATH**/ ?>