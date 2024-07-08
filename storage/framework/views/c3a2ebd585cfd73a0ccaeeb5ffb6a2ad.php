
    <div class="contaitner">
    <form action="<?php echo e(route('about.entry')); ?>" method="POST" class="ms-auto me-auto mt-3" style="width: 500px">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-comtrol" placeholder="Enter Username" name="email" required>
    <?php if($errors->has('email')): ?>
    <div class="error"><?php echo e($errors->first('email')); ?></div>
<?php endif; ?>
  </div>
 
  <div class="mb-3" style="margin-top: 5px" >
    <label class="form-label">Password</label>

    <input type="password" class="form-comtrol" placeholder="Enter Password" name="password" required>
    <?php if($errors->has('password')): ?>
    <div class="error"><?php echo e($errors->first('password')); ?></div>
<?php endif; ?>
  </div>

  <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
  </label>

  <div class=" " style="margin-top: 5px" >
    
    <span class="password" style="margin-top: 5px" > <a href="#">forgot password?</a></span>
  </div>
 
  <button type="submit" class="btn btn-primary"  style="margin-top: 5px" >Submit</button>
</form>
    </div>












   





    
<?php /**PATH C:\Users\REMELOU POSTRANO\Desktop\billnwow\prototype\resources\views/about/login.blade.php ENDPATH**/ ?>