<?php $__env->startSection('breadcrumb'); ?>
<li class="breadcrumb-item">
    tags
</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('tools'); ?>
<a href="<?php echo e(route('tags.create')); ?>">
    <span class="fa fa-plus"></span> tags
</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('cards.tag', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $records->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('laracrud.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>