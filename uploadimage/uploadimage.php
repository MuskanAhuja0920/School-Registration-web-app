<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: #ffffdb;
}
.center {
	 margin: auto;
  text-align: center;
  border: 3px solid black;
  width: 500px;
}
</style>
</head>
<body>
    <div class="title" align="center">
   <h1>Upload Image</h1>
   </div>
   <hr>
   <h4 style="color:red; font-size:14px" align="right">Keep the name of your image as Child's name(Eg: Arya_Singh) *</h4>
   
   <div class="center" align="center">
<form action="" method="post" enctype="multipart/form-data" ><br><br>
<input type="file" name="uploadfile"  /><br><br>
<input type="submit" name="uploadfilesub" value="Upload" style="margin-top:10px; height:35px; width:75px;" /><br><br>
</form>
	</div><br>
</body>
</html>




<?php

require 'config/db.php';
/*if($conn) {
echo "connected";
}
*/
if(isset($_POST['uploadfilesub'])) {

$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];

$folder = 'imagesuploadedf/';

if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $filename)) 
{
echo "<center><img src=".$filename." height=200 width=300 border=3 /></center>";
} 
echo "<br><br><br>";
$sql = "INSERT INTO `uploadedimage` (`imagename`)  VALUES ('$filename')";
$qry = mysqli_query($conn,  $sql);
if( $qry) {
echo "<center>Image has been uploaded</center>";
}
}

?>








