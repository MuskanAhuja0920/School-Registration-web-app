<?php require_once 'controllers/authController.php';?>
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
    <title>REGISTER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <link rel="stylesheet"  href ="style(1).css">
</head>
<body style="background-image: url('background.jpg');background-repeat: ;background-size: 100%,100%" >
<section id="nav-bar">
   <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top ">
   <div class="container-fluid">
    <a class="navbar-brand" href="signup.php"><img src="CMS-LOGO-removebg-preview.png" style="height:40px" ></a>
    <ul class=" navbar-nav navbar-right" >
      <li class="nav-item"><a class="nav-link" href="help.php" style="color:gray"><strong>Support</strong></a></li>
      <li class="nav-item"><a class="nav-link" href="images.jpg" style="color:gray" download="brochure.jpg"><strong>Download Brochure</strong></a></li>
      <li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="login" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:gray">
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
            <div class="col-md-6 offset-md-3 form-div">
                <form action="signup.php" method="post">
                <h2 class="text-center">Register</h2>
                <?php if(count($errors)>0): ?>
                    <div class="aler alert-danger">
                        <?php foreach($errors as $error):?>
                        <li><?php echo $error;?></li>
                        <?php endforeach;?>
                    </div>
                <?php endif; ?>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" value="<?php echo  $username; ?>" class="form-control form-control-lg" placeholder="Example12">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo  $email; ?>" class="form-control form-control-lg" placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control form-control-lg pwd" id="myInput" placeholder="********">
                
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" name="confirmPassword" class="form-control form-control-lg pwd" id="myInput" placeholder="********">
                
            </div>
            <div class="form-group">
            <input type="checkbox" onclick="myFunction()">Show Password
            </div>

            <div class="form-group">
                <button type="submit" name="Submitbutton" class="btn btn-primary btn-lg" style="margin:auto;display:block">Sign Up</button>

            </div>
           
            <p class="Content" style="font-size:16px; text-align:center">Already registered?<a href="login.php"> Sign In</a></p>
            </form>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction() {
    var $pwd = $(".pwd");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
    } else {
        $pwd.attr('type', 'password');
    }
}

</script>
</body>
</html>