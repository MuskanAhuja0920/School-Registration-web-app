<?php require_once 'controllers/authController.php';
if(isset($_GET['token']))
{
    $token=$_GET['token'];
    verifyUser($token);
}
/*if(!isset($_SESSION['id']))
{
    header('location:login.php');
    exit();
}*/
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <style>
    
    </style>
    <title>Home Page</title>
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
    <a class="navbar-brand" href="home.php"><img src="CMS-LOGO-removebg-preview.png" style="height:40px" ></a>
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
            <?php if(isset($_SESSION['message'])):?>
            <div class="alert <?php echo $_SESSION['alert-class'];?>">
             <?php 
             echo $_SESSION['message'];
             unset($_SESSION['message']);
             unset($_SESSION['alert-class']);
             ?>
            </div>
            <?php endif; ?>
            <h3> Welcome, <?php echo $_SESSION['username'];?></h3>
            <a href="Home.php?logout=1" class="logout">Logout</a>
            <?php if(!$_SESSION['verified']):?>
            <div class="alert alert-warning">
             You need to verify your account.
             Sign in to your email account and click on the
             verification link we just emailed you at
             <strong><?php echo $_SESSION['email'];?></strong>

            </div>
            <?php endif; ?>
            <?php if($_SESSION['verified']):?>
            <button class="btn btn-block btn-lg btn-primary" onclick="window.location.href ='index.php';">I am verified</button> 
            <?php endif; ?> 
            </div>
        </div>
    </div>
</div>
</body>
</html>