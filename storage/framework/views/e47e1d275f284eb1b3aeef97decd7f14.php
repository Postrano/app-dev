<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo url('css/common.css'); ?>" rel="stylesheet">
    <link href="<?php echo url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    

    <title>BillnWow</title>
</head>

        <body>
           

         <div class="topnav">
           
          

          <a href="<?php echo e(route('about.registration')); ?>" >Online Application</a>
          <a href="#about">Branches</a>
          <a href="#about">About</a>
          <a href="#contact">Contact us</a>
          <a href="<?php echo e(route('about.layout')); ?>" >Home</a>
         
          <li class="nav-btn">
            <a class="btn " data-toggle="modal" data-target="#LoginModal">Login</a>
           
          </li>


          
        </div> 

        <img src="/image/3nwow.png" alt="background" class="homebackground">      

<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
        <div class= "d-flex" style="padding: 12px; justify-content: space-between">
          <div>
            <h5 class="modal-title" id="LoginModalLabel">Billn'Wow</h5>
          </div>
          <div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
        <form action="<?php echo e(route('about.entry')); ?>" method="POST" enctype="multipart/form-data"  >
        <?php echo csrf_field(); ?>
      <div class="modal-body">
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
      </div>


      <div class="modal-footer">
        
       
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
    </div>
  </div>
</div>


        
        

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>


</html><?php /**PATH C:\Users\REMELOU POSTRANO\Desktop\billnwow\prototype\resources\views/about/layout.blade.php ENDPATH**/ ?>