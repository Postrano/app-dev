<H2>
    <a href="<?php echo e(route('user.create')); ?>">AddUser</a>
    
Hello!
<?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<?php echo e($user->email); ?>

<?php echo e($user->name); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<div>wala</div>
<?php endif; ?> 
</H2><?php /**PATH C:\Users\REMELOU POSTRANO\Desktop\billnwow\prototype\resources\views/about/index.blade.php ENDPATH**/ ?>