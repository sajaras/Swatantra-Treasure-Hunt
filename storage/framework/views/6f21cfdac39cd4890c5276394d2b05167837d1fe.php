<!DOCTYPE html>
<html>
<head>
<title>Activate Your Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/signin.css">
</head>
<body>
<?php if(session('req_mail')): ?>
<div class="alert alert-success">
<p>An activation Link has been sent to <?php echo e(session('req_mail')); ?><a href=<?php echo e(route('login')); ?>>click here to sign in if verified</a></p>        
    </div>
<?php endif; ?>
</body>
</html>



















