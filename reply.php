<?php require_once 'controllers/helpcontroller.php';
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
<div class="login">
    <div class="container">
    	<div class="row">
            <div class="col-md-6 offset-md-3 form-div login">
            
            <h3> Thank you, for your query, we will get back to you as soon as possible</h3>
            
            </div>
        </div>
    </div>
</div>
</body>
</html>