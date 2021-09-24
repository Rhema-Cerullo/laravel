<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('/css/')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="text-danger"> Welcome <?php echo e((Auth::user()->gender == 'Male')? 'Mr '. Auth::user()->name : 'Mme ' . Auth::user()->name); ?> !</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project\comfival\resources\views/dashboard.blade.php ENDPATH**/ ?>