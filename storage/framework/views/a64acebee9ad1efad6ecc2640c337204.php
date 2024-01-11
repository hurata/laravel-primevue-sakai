<?php echo $__env->make('pages.constants.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('pages.constants.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/forge/devapi.cloud/resources/views/layouts/pagesapp.blade.php ENDPATH**/ ?>