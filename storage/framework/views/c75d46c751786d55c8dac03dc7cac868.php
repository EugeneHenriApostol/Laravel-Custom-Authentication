<?php $__env->startSection('page-title','Main Landing Page'); ?>
<?php $__env->startSection('page-content'); ?>
<h1>Welcome to the Site</h1>
<br>

<form action="<?php echo e(route('logout')); ?>">
    <?php echo csrf_field(); ?>
    <button type="submit">
    Logout
    </button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\auth-custom-jspe3aa34\resources\views/homepage.blade.php ENDPATH**/ ?>