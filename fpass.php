<?php require_once 'controllers/passwordcontroller.php';?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <style>
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}


    </style>
    <title>FORGOT PASSWORD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <link rel="stylesheet"  href ="style(1).css">
</head>
<body style="background-image: url('background.jpg');background-repeat: ;background-size: 100%,100%" >
<section id="nav-bar">
   <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
   <div class="container-fluid">
    <a class="navbar-brand" href="fpass.php"><img src="CMS-LOGO-removebg-preview.png" style="height:40px" ></a>
    <ul class=" navbar-nav navbar-right" >
      <li class="nav-item"><a class="nav-link" href="help.php" style="color:gray"><strong>Support</strong></a></li>
      <li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:gray">
		<strong>Login/Signup</strong></a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="signup.php" ><strong>Sign Up</strong></a>
                <a class="dropdown-item" href="login.php" ><strong>Sign In</strong></a>
			</div>
	  </li>
      
    </ul>
    </div>
</nav>
</section>
<div class="login">
    <div class="container">
    	<div class="row">
            <div class="col-md-6 offset-md-3 form-div login">
                <form action="fpass.php" method="post">
                <h2 class="text-center">Forgot Password</h2><hr>
                <?php if(count($errors)>0): ?>
                    <div class="aler alert-danger">
                        <?php foreach($errors as $error):?>
                        <li><?php echo $error;?></li>
                        <?php endforeach;?>
                    </div>
                <?php endif; ?>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email"  class="form-control form-control-lg" placeholder="Enter Email">
            </div>


            <div class="form-group">
                <button type="submit" name="fpass" class="btn btn-primary btn-lg" style="margin:auto;display:block">Submit</button>

            </div>
            </form>
            <?php
            if(isset($_GET["reset"]))
            {
                if($_GET["reset"]=="success")
                {
                    echo'<p class="signupsuccess" align=center><a href="https://accounts.google.com/signin/v2/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"<strong>Check your e-mail!</strong></a></p>';

                }
            }
            ?>
           
        </div>
    </div>
</div>
<script>

</script>
</body>
</html>