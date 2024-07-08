<h1>
    ITs me!!
</h1>
<a href="<?php echo e(route('about.show')); ?>">back</a>
<form action="<?php echo e(route('user.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="name" id="name">
    <input type="email" name="email" placeholder="email" id="email">
    <input type="password" name="password" placeholder="password" id="password">
    <button>
    Save
    </button>

</form><?php /**PATH C:\Users\REMELOU POSTRANO\Desktop\billnwow\prototype\resources\views/about/create.blade.php ENDPATH**/ ?>