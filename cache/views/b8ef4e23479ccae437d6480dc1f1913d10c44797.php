<?php if(isset($action, $module)): ?>
    <?php echo $__env->make("$module::$action", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->yieldContent('content'); ?>
<?php endif; ?>
<?php /**PATH /home/n1603213/public_html/certitude.pakarangan.id/app/Views/Templates/layouts/blank.blade.php ENDPATH**/ ?>