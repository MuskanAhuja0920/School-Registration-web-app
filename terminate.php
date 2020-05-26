<?php require_once 'controllers/authController.php';

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Thank You</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
	
	
    <link rel="stylesheet"  href ="style(1).css">
	
	<style>
	            #custom-button {
                padding: 5px;
                color: white;
                background-color: #867979;
                border: 1px solid #000;
                border-radius: 5px;
                cursor: pointer;
            }

               #custom-button:hover {
               background-color: blueviolet;
            }

               #custom-text {
               margin-left: 10px;
               font-family: sans-serif;
               color: #aaa;
            }
	</style>
	
</head>
      <body style="background-image: url('backgroundh.jpg');background-repeat: ;background-size: 100%,100%" >
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="CMS-LOGO-removebg-preview.png" style="height:40px" ></a>
                    <ul class=" navbar-nav navbar-right" >
                    <li class="nav-item"><a class="nav-link" href="images.jpg" style="color:gray" download="brochure.jpg"><strong>Download Brochure</strong></a></li>
                        <li class="nav-item"><a href="index.php" style="color:gray"><strong>Form</strong></a></li>
                        <li class="nav-item"><a href="uploadimage.php" style="color:gray"><strong>Upload Image</strong></a></li>
                        <li class="nav-item"><a href="pay.php" style="color:gray"><strong>Pay Online</strong></a></li>
                        <li class="nav-item"><a href="help1.php" style="color:gray"><strong>Help</strong></a></li>
                        <li class="nav-item dropdown ml-auto">
		                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:gray">
		                    <strong><?php echo $_SESSION['email'];?></strong></a>
			                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				                <a class="dropdown-item" href="login.php?logout=1" name="logout" ><strong>Log Out</strong></a>
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
                <form action="" method="post">

            <div class="form-group">
            <input class="form-control" required="true" type="hidden" placeholder="Email id" name="email" id="email" value="<?php echo $_SESSION['email'];?>" readonly/>
            </div>

            <div class="form-group">
                <h3> Click continue to confirm your Registration.</h3>
               

            </div>
            <div class="form-group">
                <button type="submit" name="continue" class="btn btn-primary btn-lg" style="margin:auto;display:block">Continue</button>

            </div>

           
        </body>
        </html>
        <?php


/*if($conn) {
echo "connected";
}
*/
if(isset($_POST['continue'])) {
    $email=$_POST['email'];
    $errors=array();
    $emailQuerry="SELECT * FROM student WHERE emaill=? LIMIT 1";
     $stmt=$conn->prepare($emailQuerry);
     $stmt->bind_param('s',$email);        // S IS for string
     $stmt->execute();
     $result= $stmt->get_result();
     $userCount=$result->num_rows;
     $stmt->close();

     if($userCount>0)
     {
         $errors['email']="Email already in use";
     }
    $sql="INSERT INTO payment_done (email) VALUES ('$email')";
    
    if(mysqli_query($conn,$sql))
    {
        echo "<h3> Thank you for registering, We'll contact you regarding the interview procedure</h3>";
    }
    
}
?>
