<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/signin.css">
</head>
<body>


 <?php if(Auth::guest()): ?>
                            <a class="loginbutton" href="<?php echo e(route('login')); ?>" style="color:white;">Login</a>
                            <a class="registerbutton" href="<?php echo e(route('register')); ?>"" style="color:white;">Register</a>

<?php endif; ?>


<?php if(session('statustrue')): ?>
    <div class="alert alert-success">
        <?php echo e(session('statustrue')); ?>

    </div>
 <?php elseif((session('statusalready'))): ?>
    <div class="alert alert-warning">
        <?php echo e(session('statusalready')); ?>

    </div>
 <?php elseif((session('statusfalse'))): ?>
     <div class="alert alert-danger">
        <?php echo e(session('statusfalse')); ?>

    </div>

<?php endif; ?>

<div class="form-error">
<?php echo $__env->make('layout.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<!--ball in the box div -->
<div class="box"></div>



<div class="container1">
<?php if((session('status0'))): ?>
    <div class="alert alert-danger">
        <?php echo e(session('status0')); ?>

        <?php echo e(session()->forget('status0')); ?>

    </div>

<?php endif; ?>
<form method="POST" action="<?php echo e(route('login')); ?>">
<?php echo e(csrf_field()); ?>

<p id="headsignup"><strong>Login</strong></p>
<div class="form-signin">
<label for="email" id="controllabel">* Email</label>
 <input type="email" name="email" class="useridlogin" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required>
 
  <label for="password" id="controllabel">Password</label>
 <input type="password" class="passwordlogin" id="passwordlogin" name="password" placeholder="Enter Password" required>
 <br>
  <button id="subsignin" type="submit">Sign In</button>
<a href="<?php echo e(route('password.request')); ?>" style="text-decoration:none;"><p id="forgotpass">forgot password</p></a>
 </div>
 
</form>
</div>
</body>
</html>