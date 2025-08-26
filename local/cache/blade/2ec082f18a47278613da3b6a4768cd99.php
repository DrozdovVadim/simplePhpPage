

<header class="<?php echo e($block); ?>">
    <div class="<?php echo e($block->elem('container')); ?>">
        <a href="/" class="<?php echo e($block->elem('logo-wrapper')); ?>">
            <img class="<?php echo e($block->elem('logo-img')); ?>" src="<?=SITE_TEMPLATE_PATH."/assets/images/logo.png"?>" alt="logo">
            <p class="<?php echo e($block->elem('logo-text')); ?>">Галактический<br>вестник</p>
        </a>
		<?php echo $menu; ?>

    </div>
</header>
<?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/common/header/header.blade.php ENDPATH**/ ?>