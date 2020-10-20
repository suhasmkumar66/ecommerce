<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }

  if(isset($_SESSION['captcha'])){
    $now = time();
    if($now >= $_SESSION['captcha']){
      unset($_SESSION['captcha']);
    }
  }

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition register-page" style="background: rgba(0, 0, 0, 0) url(Swachha.Store/images/bg/5.jpg) no-repeat scroll center center / cover ;">
<div class="register-box">
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
  	<div class="register-box-body"  style=" box-shadow: 0 10px 6px -6px #ccc;">
    	
  <div class="logo text-center">
                                <a href="index.html">
                                    <img src="Swachha.Store/images/logo/logo.png" alt="logo" style="width: 130px;">
                                </a>
                            </div>
						<div>	<p class="login-box-msg">Register a new membership</p> </div>
    	<form action="register.php" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>"  required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="repassword" placeholder="Retype password" required>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <?php
            if(!isset($_SESSION['captcha'])){
              echo '
                <di class="form-group" style="width:100%;">
                  <div class="g-recaptcha" data-sitekey="6LevO1IUAAAAAFX5PpmtEoCxwae-I8cCQrbhTfM6"></div>
                </di>
              ';
            }
          ?>
          <hr>
      		<div class="row">
    			<div class="col-xs-12 contact-btn text-center">
          			<button type="submit" class="btn  btn-flat fv-btn text-center" name="signup"><i class="fa fa-pencil"></i> Sign Up</button>
        		</div>
      		</div>
    	</form>
      <br>
     <div class="pb--20">
   <span class="pull-left">   <a href="signup.php" class="text-center">Register a new membership</a></span>
     <span class="pull-right"> <a href="index.php"><i class="fa fa-home"></i> Home</a></span>
  	</div>
  	</div>
</div>
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
<?php include 'includes/scripts.php' ?>
</body>
</html>