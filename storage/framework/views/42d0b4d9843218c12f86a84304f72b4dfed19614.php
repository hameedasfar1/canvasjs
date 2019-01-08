<!DOCTYPE html>
<html>
 <head>
  <title>User Page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Welcome User</h3><br />

   <?php if(isset(Auth::user()->email)): ?>
    <div class="alert alert-danger success-block">
     <strong>Welcome <?php echo e(Auth::user()->email); ?></strong>
     <br />
     <a href="<?php echo e(url('/main/logout')); ?>">Logout</a>
    </div>
   <?php else: ?>
    <script>window.location = "/main";</script>
   <?php endif; ?>
   
   <br />
  </div>
 </body>
</html>