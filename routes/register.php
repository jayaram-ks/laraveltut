<?php include("includes/common.php");
include("includes/index_header.php");
$arr_utype = $mysql->get_usrtypes();
 
$errormess = false;
$success = false;
if(isset($_POST['uname']) && !empty($_POST['uname']) && isset($_POST['uemail']) && !empty($_POST['uemail'])  && isset($_POST['umobile']) && !empty($_POST['umobile']))
{
	if(!($mysql->user_exists($_POST['uemail'])))
	{
		$qry = "INSERT INTO `cm_users` (`utype_id`, `uname`, `upwd`, `uregistrationdate`, `uemail`, `umobile`,`unick`) VALUES ('3', '".$_POST['uname']."','".md5($_POST['upwd'])."',NOW(),'".$_POST['uemail']."','".$_POST['umobile']."','".$_POST['uname']."')";
		$mysql->execute($qry);
		$success = "Your Registration was successfull.";
		
	}
	else
	{
		$errormess = "Email already exists.";
	}
	
}

?>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
      <a href="index.php"><img src="dist/img/com-logo.png"/></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>
<?php if(!$success) { ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onSubmit="return validate();">
    
    
    
      <div class="form-group has-feedback">
        <input required value="<?php echo isset($_POST['uname'])?$_POST['uname']:""; ?>" type="text" name="uname" id="uname" class="form-control" placeholder="Full name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input required value="<?php echo isset($_POST['uemail'])?$_POST['uemail']:""; ?>"   type="email" name="uemail" id="uemail" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span> 
      </div>
      
      
      <?php if($errormess) { ?>
      
      <div class="alert alert-danger alert-dismissible">
          <p><?php echo $errormess; ?></p>
        </div>
      
      <?php } ?>
      
       
      <div class="form-group has-feedback">
        <input required type="password" name="upwd" id="upwd" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input required type="password" id="cupwd"  class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input required value="<?php echo isset($_POST['umobile'])?$_POST['umobile']:""; ?>" type="number" name="umobile" id="umobile" class="form-control" placeholder="Phone number">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
     
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <a href="index.php" class="text-center">I already have a membership</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="ubtn" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
<?php } else { ?> 
    <div class="alert alert-success alert-dismissible">
      <p><?php echo $success; ?></p>
      <p><a href="index.php">Login to your session</a></p>
    </div>
<?php } ?>   

   

   
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->


adding new text with rtest message on git