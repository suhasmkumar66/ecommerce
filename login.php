<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page" style="background: rgba(0, 0, 0, 0) url(Swachha.Store/images/bg/5.jpg) no-repeat scroll center center / cover ;">
<div class="login-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="login-box-body" style=" box-shadow: 0 10px 6px -6px #ccc;">
    	
  <div class="logo text-center">
                                <a href="index.html">
                                    <img src="Swachha.Store/images/logo/logo.png" alt="logo" style="width: 130px;">
                                </a>
                            </div>
						<div>	<p class="login-box-msg">Login Here</p> </div>
    	<form action="verify.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-12 contact-btn text-center">
          			<button type="submit" class="btn  btn-flat fv-btn text-center" name="login" style="outline:none;"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
      <br>
      <a href="password_forgot.php">I forgot my password</a><br>
   <div class="pb--20">
   <span class="pull-left">   <a href="signup.php" class="text-center">Register a new membership</a></span>
     <span class="pull-right"> <a href="index.php"><i class="fa fa-home"></i> Home</a></span>
  	</div>
	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
<style>
.form-control{
	border-color: currentcolor currentcolor #8e8e8e;
    border-image: none;
    border-style: none none solid;
    border-width: 0 0 1px;
    color: #686868;
    font-size: 16px;
    height: 40px;
    line-height: 40px;
    padding: 0 15px;
    width: 100%;
	outline:none;
}
</style>
</body>
</html>