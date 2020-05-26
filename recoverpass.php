<?php require_once 'controllers/passwordcontroller.php';
//require_once 'abc.php';

?>
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
    <title>RESET PASSWORD</title>
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
    <a class="navbar-brand" href="recoverpass.php"><img src="CMS-LOGO-removebg-preview.png" style="height:40px" ></a>
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
    <?php
    $selector=$_GET["selector"];
    $validator=$_GET["validator"];
    if(empty($selector)||empty($validator))
    {
        echo"Could  not validate your request!";
    }
    else{
        if(ctype_xdigit($selector)!==false && ctype_xdigit($selector)!==false)
        {
            ?>
            <div class="row">
            <div class="col-md-6 offset-md-3 form-div login">
                <form action="resetpass.php" method="post">
                <input type="hidden" name="selector" value="<?php echo $selector ?>">
                <input type="hidden" name="validator" value="<?php echo $validator ?>">
                <input type="hidden" name="expires" value="<?php echo $expires ?>">
                <h2 class="text-center">Reset Password</h2><hr>
                <?php if(count($errors)>0): ?>
                    <div class="aler alert-danger">
                        <?php foreach($errors as $error):?>
                        <li><?php echo $error;?></li>
                        <?php endforeach;?>
                    </div>
                <?php endif; ?>
                
            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" name="newPassword" class="form-control form-control-lg pwd" id="myInput" placeholder="********">
                
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" name="confirmPassword" class="form-control form-control-lg pwd" id="myInput" placeholder="********">
                <input type="checkbox" onclick="myFunction()">Show Password

            </div>


            <div class="form-group">
                <button type="submit" name="resetpass" class="btn btn-primary btn-lg" style="margin:auto;display:block">Reset Password</button>

            </div>
           
        </div>
        </form>
            <?php
        }
    }
    ?>
    	
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