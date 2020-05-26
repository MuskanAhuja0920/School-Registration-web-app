<?php require_once 'controllers/logincontroller.php';?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <style>
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  border-radius: 8px;
    }

  

    </style>
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <link rel="stylesheet"  href ="style(1).css">
</head>
<body style="background-image: url('backgroundh.jpg');background-repeat: ;background-size: 100%,100%" >
<section id="nav-bar">
   <nav class="navbar navbar-expand-lg navbar-light ">
   <div class="container-fluid">
    <a class="navbar-brand" href="adminpage.php"><img src="CMS-LOGO-removebg-preview.png" style="height:40px" ></a>
    <ul class=" navbar-nav navbar-right" >
    <li class="nav-item dropdown ml-auto">
		<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:gray">
		<strong><?php echo $_SESSION['username'];?></strong></a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="adminlogin.php?logout=1" ><strong>Log Out</strong></a>
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
                

            <div class="form-group">
                <p  style="font-size:25px"><strong> Download Student Database:</strong></p>
            </div>
            <div class="form-group">
                <a href="dataexport.php" class="button" style="margin:auto;display:block" ><i class="fa fa-download"></i> Download</button></a>

            </div>
            <div class="form-group">
                <p style="font-size:25px"><strong>Live Edit/Insert/Delete into Student Database:</strong></p>
            </div>

            <div class="form-group">
                <a href="index_live.php" class="button" style="margin:auto;display:block" ><i class="fa fa-edit"></i>Live Data</button></a>

            </div>
            <div class="form-group">
                <p  style="font-size:25px"><strong> Download Payment Database:</strong></p>
            </div>
            <div class="form-group">
                <a href="paymentexport.php" class="button" style="margin:auto;display:block" ><i class="fa fa-download"></i> Download</button></a>

            </div>

            
    


</body>
</html>