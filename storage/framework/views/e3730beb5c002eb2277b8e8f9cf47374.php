<h1><?php echo e($heading); ?></h1>
<?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<<h2>
    <?php echo e($value['tytuł']); ?>

</h2>
<p>
    <?php echo e($value['opis']); ?>

</p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH E:\Inx\projekt_gym\resources\views/test.blade.php ENDPATH**/ ?>