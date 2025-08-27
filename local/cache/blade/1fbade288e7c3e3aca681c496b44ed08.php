<li class="<?php echo e($block); ?>">
<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true): ?> die() <?php endif; ?>
<?php
    $compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>
<?php if(!$compositeStub && $arParams['SHOW_AUTHOR'] == 'Y'): ?>
    <?php if($USER->IsAuthorized()): ?>
        <?php $name = trim($USER->GetFullName() ? trim($USER->GetFullName()) : trim($USER->GetLogin())); ?>
        <a class="<?php echo e($block->elem('link')); ?>" href="<?php echo e($arParams['PATH_TO_PROFILE']); ?>"><?php echo e($name); ?></a>
		<a href="?logout=yes&<?php echo e(bitrix_sessid_get()); ?>"><?php echo e((GetMessage('TSB1_LOGOUT'))); ?></a>
    <?php else: ?>
        <a href="<?php echo e($arParams['PATH_TO_AUTHORIZE']); ?>">Логин</a>
        <a href="<?php echo e($arParams['PATH_TO_REGISTER']); ?>">Регистрация</a>
    <?php endif; ?>
<?php endif; ?>
</li>
            <?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/common/menu-auth/menu-auth.blade.php ENDPATH**/ ?>