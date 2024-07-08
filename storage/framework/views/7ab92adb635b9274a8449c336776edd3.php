
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registration</title>

  
  <link href="<?php echo url('css/registration.css'); ?>" rel="stylesheet">
  <link href="<?php echo url('css/common.css'); ?>" rel="stylesheet">
  

</head>

<body class="regestrationUI" >



     



<div class="topnav" style="padding: 5px">
           
  <a href="#news">  </a>
  
  <a href="<?php echo e(route('about.registration')); ?>" >Online Application</a>


  <a href="#about">Branches</a>
  <a href="#about">About</a>
  <a href="#contact">Contact us</a>
  <a href="<?php echo e(route('about.layout')); ?>" >Home</a>
 
  

</div> 
 



   <div class="container">
   <h1>Online Application</h1>
   <form>
       <div class="form-group">
           <label><input type="checkbox" name="new" style="margin: 0%; width: 50px;height: 20px"> New</label>
           <label><input type="checkbox" name="used" style="margin: 0%; width: 50px;height: 20px"> Used</label>
           <input type="text" placeholder="Model & Color">
           <input type="text" placeholder="Cash Price">
           <input type="text" placeholder="Down Payment">
       </div>
       <div class="form-group">
           <label><input type="checkbox" name="purpose" style="margin: 0%; width: 50px;height: 20px"> Business</label>
           <label><input type="checkbox" name="purpose" style="margin: 0%; width: 50px;height: 20px"> Personal</label>
       </div>
       <div class="form-group">
           <label>Last Name:</label>
           <input type="text" placeholder="">
           <label>First Name:</label>
           <input type="text" placeholder="">
           <label>Middle Name:</label>
           <input type="text" placeholder=""style="width: 20px;">
       </div>
       <div class="form-group">
           <label>Age:</label>
           <input type="text" placeholder=""style="width: 20px;">
       </div>
       <div class="form-group">
           <label>Religion:</label>
           <input type="text" placeholder="">
           <label>Citizenship:</label>
           <input type="text" placeholder="">
           <label>Gender:</label>
           <input type="text" placeholder="" style="width: 20px;">
       </div>
       <div class="form-group">
           <label>Date of Birth:</label>
           <input type="date" placeholder="">
       </div>
       <div class="form-group">
           <label>Email:</label>
           <input type="email" placeholder="">
           <label>Password:</label>
           <input type="password" placeholder="">
       </div>
       <div class="form-group full-width">
           <label>Present Address:</label>
       </div>
       <div class="form-group">
           <input type="text" placeholder="(RM/FLR/UNIT/NO./BLDG.NAME)">
           <input type="text" placeholder="(HOUSE NO./LOT & BLK. NO)">
           <input type="text" placeholder="(STREET NAME)">
           <input type="text" placeholder="(SUBDIVISION)"style="width: 20px;">
       </div>
       <div class="form-group">
           <input type="text" placeholder="(BARANGAY/DISTRICT/LOCALITY)">
           <input type="text" placeholder="(CITY/MUNICIPALITY)">
           <input type="text" placeholder="(PROVINCE/STATE)">
       </div>
       <div class="form-group full-width">
           <label>Residence is:</label>
           <label><input type="checkbox" name="residence" style="margin: 0%; width: 50px;height: 20px;"> Own Mortgaged</label>
           <label><input type="checkbox" name="residence" style="margin: 0%; width: 50px;height: 20px;"> Rented</label>
           <label><input type="checkbox" name="residence" style="margin: 0%; width: 50px;height: 20px;"> Living with Relatives</label>
           <input type="text" placeholder="Length of Stay">
       </div>
       <div class="form-group full-width">
           <label>Mobile Number:</label>
           <input type="text" placeholder="">
           <label>Telephone Number:</label>
           <input type="text" placeholder="">
       </div>
       <div class="form-group full-width">
           <label>FB Account:</label>
           <input type="text" placeholder="">
       </div>
       <div class="form-group full-width">
           <label>Email Address:</label>
           <input type="email" placeholder="">
       </div>
       <div class="submit-container">
           <input type="submit" value="Submit">
       </div>
   </form>
</div>





</body>

</html>
<?php /**PATH C:\Users\REMELOU POSTRANO\Desktop\billnwow\prototype\resources\views/about/registration.blade.php ENDPATH**/ ?>