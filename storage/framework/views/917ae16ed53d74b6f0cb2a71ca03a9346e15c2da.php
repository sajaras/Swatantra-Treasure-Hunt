<<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo e(URL::asset('css/navigationbar.css')); ?>" rel="stylesheet"> 
		<link href="<?php echo e(URL::asset('css/leaderboard.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(URL::asset('css/custommodal.css')); ?>" rel="stylesheet"> 

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="mainbody">
		  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="topcontainer">
        
        <div class="container-fluid" id="test">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(route('adminpage')); ?>" id="glyphy"><span  class="glyphicon glyphicon-text-background"></span></a>
                <a class="navbar-brand" href="<?php echo e(route('adminaddquestion')); ?>" id="glyphy"><span  class="glyphicon glyphicon-plus-sign"></span></a>
                <a class="navbar-brand" href="#" id="glyphy" data-toggle="modal" data-target="#rules_modal" ><span  class="glyphicon glyphicon-registration-mark"></span></a>
            </div> 
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
           
                 
                 
               
           <!--         <li>
                        <a href="#">Contact</a>
                    </li> -->
                </ul>
                
              <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                   <a id="namebutton" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative;"><img src="/storage/profile_avatars/<?php echo e(Auth::user()->profile_avatar); ?>" style="width:20px;height:20px; position:absoulte; border-radius:50%;">
                                     <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                   <li><a id="profilebutton" href="<?php echo e(route('profile')); ?>">Profile</a></li>
                                    <li>
                                        <a id="logoutbutton" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>  
              
            </div>
         </div>
         </nav>

 

 <br> 
<br>
    <div class="container-fluid" id="topmostcontainer">
    <div class="container" id="topcontainer">
  <div class="row" id="contactlisttable">
      <div class="panel panel-def Contactault" id="toplevel">
        <div class="panel-heading">
    <br>
    <br>         
  
        <table class="table table-fixed table-hover" >
          <thead>
            <tr>
              <th class="text-center col-xs-offset-1 col-xs-2 col-sm-offset-1 col-sm-2 col-md-offset-1 col-md-2 col-lg-offset-1 col-lg-2" id= "formobilehead" >RANK</th><th class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id= "formobilehead">NAME</th><th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2" id= "formobileheadcollege">PHONE</th><th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" id= "formobilehead">LEVEL</th><th class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id= "formobileheadtime">EMAIL</th>
           </tr>
          </thead>
           <tbody>
          <?php if(count($fulldata)): ?>
           <?php $__currentLoopData = $fulldata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eachuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr class="currentrowcontact" id="rowelement" data-toggle="modal" data-target="#PreviewModal"> 
          <td class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1"><span><img src="/storage/profile_avatars/<?php echo e($eachuser->profile_avatar); ?>" style="width:20px;height:20px;border-radius:50%;"></span></td><td class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2" id="currentposition"><?php echo e($loop->iteration); ?></td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id="currentname"><?php echo e($eachuser->name); ?></td><td class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2" id="college"><?php echo e($eachuser->phoneno); ?></td><td class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" id="currentlevel"><?php echo e($eachuser->level); ?></td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id= "formobilehead"><?php echo e($eachuser->email); ?></td> 
          <input type="hidden" id="currentid" value="<?php echo e($eachuser->user_id); ?>">
          <input type="hidden" id="photo" value="<?php echo e($eachuser->profile_avatar); ?>">

          </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
           <?php endif; ?>    
          </tbody>
        </table>
      
      </div>
  </div>
</div>
<br>
<br>
</div>

<!-- Modal -->
<div class="modal fade" id="PreviewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog mymodal" role="document">
        <div class="modal-content" id="modaldesign">
      <div class="modal-header" id="mheader">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
    
      <div class="modal-body" >
      <div class="container-fluid" id="mbody">

       <input type="hidden" id="elementid">
       <div class="row">
           <div class="col-lg-offset-4 col-lg-4">
               <div class="well col-lg-offset-2 col-lg-10">
                   <a href="#" id="pop" data-toggle="" data-target="#">
                       <img id="imageresource" src="">
                   </a>
                   
                   
           </div>
           </div>
           </div>

              <p id ="labelmp" style="text-align:center;font-weight:bold;">Rank:<span id="inputR" style="margin-left:1px;"></span></p>
              <p id ="labelmp" style="text-align:center;font-weight:bold;">Name:<span id="inputN" style="margin-left:1px;"></span></p>
               <p id ="labelmp" style="text-align:center;font-weight:bold;">PHONE:<span id="inputC" style="margin-left:1px;"></span></p>
 
          
      </div>
    </div>
    </div>
  </div>
</div> 






<!--RULE  Modal -->
<div id="rules_modal" class="modal fade move-horizontal" role="dialog">
  <div class="modal-dialog" id="rulemodaldial" style="transition:none;">

    <!-- Modal content-->
    <div class="modal-content" style="background:black">
      <div class="modal-header" style="text-align:center;border-bottom: 1px solid #4d4d4d;color:white">
        <button type="button" style="color:white" class="close" data-dismiss="modal">&times;</button>
        <h4  class="modal-title">Rules</h4>
      </div>
      <div class="modal-body" style="color:white">
<p>The treasure hunt has <span><?php echo e($totalquestion); ?></span> levels.</p>
<p>The person who completes the <span><?php echo e($totalquestion); ?></span>th level first will be declared the winner.</p>

<p>The leaderboard shows your current position and last level completion time with date </p>

<p> </p>

<p>Think outside the box. </p>

<p>Answers are not Case-Sensitive</p>
<p>For Eg: if your answer is 'superman'</p>
<p>You can answer in anycase u want. like Superman or SUPERMAN or sUPeRMaN  </p>


<p>The admin sees everything. Watch out. </p>

<p>Clues will be available in the SwatantraHunt Facebook page. <a href="http://fb.com/SwatantraHunt" target="_blank"> Here</a></p>

<p>Clues will be posted after 6:00 p.m. everyday and the frequency of clues will depend on the difficulty of each level </p>

<p>Anyone who attempts malpractices like hacking will be blocked at once. </p>

<p>No answer exceeds 50 characters! Stop copy pasting entire wikipedia page.</p>

<p>Rules are not limited to these.</p>

      </div>
    </div>
  </div>
</div>



      

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- UserdDefined  scripts   -->

<script>
$(document).ready(function(){

$(document).on('click','.currentrowcontact',function(event){

var id = $(this).find('#currentid').val();
var filename = $(this).find('#photo').val();

var rank = $(this).find('#currentposition').text();
var name = $(this).find('#currentname').text();
var phone = $(this).find('#college').text();

$('#inputR').text(rank);
$('#inputN').text(name);
$('#inputC').text(phone);
$('#elementid').val(id);
var folder ='/storage/profile_avatars/';
var imgpath = folder.concat(filename);
$('#imageresource').attr('src',imgpath);

});



}); 
</script>



	</body>
</html>