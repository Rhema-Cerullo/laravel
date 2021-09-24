<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('/css/')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="panel panel-primary">

      <div class="panel-heading"><h2>Upload File</h2></div>

      <div class="panel-body">

        <?php if($message = Session::get('success')): ?>

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong><?php echo e($message); ?></strong>

        </div>

        <?php endif; ?>

        <?php if(count($errors) > 0): ?>

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li><?php echo e($error); ?></li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>

            </div>

        <?php endif; ?>

        <form action="<?php echo e(route('file.upload.post')); ?>" method="POST" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

            <div class="row">

                <div class="col-md-6">

                    <input type="file" name="file" class="form-control">

                </div>

                <div class="col-md-6">

                    <button type="submit" class="btn btn-success">Upload</button>

                </div>

            </div>

        </form>

      </div>

    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project\comfival\resources\views/fileUpload.blade.php ENDPATH**/ ?>