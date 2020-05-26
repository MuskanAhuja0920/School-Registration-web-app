
<?php require_once 'controllers/helpcontroller.php';?>
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
    <title>LOGIN</title>
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
    <a class="navbar-brand" href="login.php"><img src="CMS-LOGO-removebg-preview.png" style="height:40px" ></a>
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
<div class="help">
    <div class="container">
    	<div class="row">
            <div class="col-md-8 offset-md-2 form-div help">
                <form action="help.php" method="post">
                <h1 class="text-center">Support</h1>
                <h6 class="text-center">Give us a chance to help you.</h6><hr>
                <h5 style="background-color:lightgray;">We're always there to serve you.<br>We ensure you that you will get a reply from our team within the next 24hrs.</h5>
                
                <?php if(count($errors)>0): ?>
                    <div class="aler alert-danger">
                        <?php foreach($errors as $error):?>
                        <li><?php echo $error;?></li>
                        <?php endforeach;?>
                    </div>
                <?php endif; ?>
            <div><?=$msg;?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" value="<?php echo  $username; ?>" class="form-control form-control-lg" placeholder="Enter Username">
            </div>

            <div class="form-group">
            
                <label for="email">Email</label>
                <input type="email" name="email"  value="<?php echo  $email; ?>" class="form-control form-control-lg" placeholder="example@gmail.com">
                

            </div>

            <div class="form-group">
            <label for="phone">Phone Number</label>
                <input type="tel" name="phonenumber" class="form-control form-control-lg" placeholder="1234567890">
                

            </div>
            <div class="form-group">
            <label for="phone">Subject</label>
                <input type="text" name="subject" class="form-control form-control-lg" placeholder="Subject...">
                

            </div>
            <div class="form-group form-group-lg">
            <label for="phone">Query</label>
                <textarea rows="7" name="query" class="form-control form-control-lg " placeholder="Type your message here"></textarea>
                

            </div>
            <div class="form-group">
                <button type="submit" name="login-btn" class="btn btn-primary btn-lg" style="margin:auto;display:block">Submit</button>

            </div>
            </form>
            </div>
        </div>
    </div>
</div>