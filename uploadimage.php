<?php require_once 'controllers/authController.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <title>UPLOAD IMAGE</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
	
	
    <link rel="stylesheet"  href ="style(1).css">
<style>
.center {
	margin: 50px auto 50px;
    padding: 25px 15px 10px 15px;
    border: 10px solid lightslategray;
    border-radius: 8px;
    font-size: 1.1em;
    font-family: 'lora',serif;
    background-color: #F5EEF8;
  
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
				                <a class="dropdown-item" href="login.php?logout=1" ><strong>Log Out</strong></a>
			                  </div>
	                      </li>
                    </ul>
                </div>
            </nav>
        </section>
 <div class="space">
 </div>
   <div class="center" align="center">
   <h1 style="color:black" align="middle"><strong>UPLOAD IMAGE</strong> </h1><hr>
   <h2 style="color:red; font-size:14px" align="left">Please follow these instructions:*</h2>
   <h3 style="color:red; font-size:14px" align="left">1) Keep the name of your image as Child's name(Eg: Arya_Singh) *</h3>
   <h3 style="color:red; font-size:14px" align="left">2) Upload of only jpg/jpeg/png files allowed*</h3>
   <h3 style="color:red; font-size:14px" align="left">3) Maximum allowable size 1MB*</h3>
<form action="" method="post" enctype="multipart/form-data" ><br><br>
<input class="form-control" required="true" type="hidden" placeholder="Email id" name="email" id="email" value="<?php echo $_SESSION['email'];?>" readonly/>
<br><br><input type="file" name="uploadfile"  /><br><br>

<input type="submit" name="uploadfilesub" value="Upload" style="margin-top:10px; height:35px; width:75px;" /><br><br>

</form>
	</div>
    <br>
</body>
</html>




<?php


/*if($conn) {
echo "connected";
}
*/
if(isset($_POST['uploadfilesub'])) {

$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
$email=$_POST['email'];
$fileSize=$_FILES['uploadfile']['size'];
$fileError=$_FILES['uploadfile']['error'];
$fileType=$_FILES['uploadfile']['type'];
$fileExt=explode('.',$filename);
$fileActualExt=strtolower(end($fileExt));
$allowed=array('jpg','jpeg','png');
if(in_array($fileActualExt, $allowed))
{
    if($fileError === 0)
    {
        if($fileSize<100000)
        {
            $fileNameNew=$filename;
            $fileDestination='uploadimage/'.$fileNameNew;
            move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $fileDestination);
            echo "<br><br><br>";
$sql = "INSERT INTO uploadedimage (email,imagename)  VALUES ('$email','$fileNameNew')";
//$sql = "UPDATE student set imagename='$fileNameNew' where email='$email'";
$qry = mysqli_query($conn,  $sql);
if( $qry) {
    header("Location: pay.php");
echo "<center>Image has been uploaded</center>";
}
            
        }
        else
        {
            echo"Your file is too big";
        }
    }
    else
    {
        echo"THERE WAS AN ERROR UPLOADING YOUR FILE";
    }
}
else
{
    echo"YOU CANNOT UPLOAD THIS TYPE OF FILE";
}
}
//$folder = 'imagesuploadedf/';

/*$errors=array();
$emailQuerry="SELECT * FROM student WHERE emaill=? LIMIT 1";
$stmt=$conn->prepare($emailQuerry);
$stmt->bind_param('s',$email);        // S IS for string
$stmt->execute();
$result= $stmt->get_result();
$userCount=$result->num_rows;
$stmt->close();

if($userCount>0)
{
    $errors['email']="Image already uploaded";
}

/*if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $filename)) 
{
echo "<center><img src=".$filename." height=200 width=300 border=3 /></center>";
} 
echo "<br><br><br>";
$sql = "INSERT INTO uploadedimage (email,imagename)  VALUES ('$email','$filename')";
$qry = mysqli_query($conn,  $sql);
if( $qry) {
echo "<center>Image has been uploaded</center>";
}
}*/

?>
