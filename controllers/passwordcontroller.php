<?php
require 'config/db.php';
require_once 'controllers/emailController.php';


$errors=array();

if(isset($_POST['fpass']))
{
$selector=bin2hex(random_bytes(8));
$token=random_bytes(32);
$url="http://localhost/webapp/recoverpass.php?selector=" .$selector. "&validator=" .bin2hex($token);
$expires=date("U") + 900;
$email=$_POST['email'];

//validation
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $errors['email']="Email address is invalid";
}
if(empty($email))
{
    $errors['email']="Email required";

}

if(count($errors)===0)
{

 $sql= "DELETE FROM pwdreset where email=? LIMIT 1";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql))
{
    echo "There was an error";
    exit();
}
else
{
mysqli_stmt_bind_param($stmt,"s",$email);
mysqli_stmt_execute($stmt);
}
$sql="INSERT INTO pwdreset (email,selector,token,expires) VALUES (?,?,?,?)";
$stmt=$conn->prepare($sql);
if(!mysqli_stmt_prepare($stmt,$sql))
{
    echo "There was an error";
    exit();
}
else
{
$hashedtoken=password_hash($token,PASSWORD_DEFAULT);   
$stmt->bind_param("ssss",$email,$selector,$hashedtoken,$expires);
//mysqli_stmt_execute($stmt);
//}
/*mysqli_stmt_close($stmt);
mysqli_close();
/*$sql=" SELECT * FROM users WHERE email='$email' LIMIT 1";
$result = mysqli_query($conn,$sql);
$user = mysqli_fetch_array($result); */
if($stmt->execute()) {
    $user_id=$conn->insert_id;
    sendRecoveryEmail($email,$selector,$token);
    header('location:fpass.php?reset=success');
    exit();
    //alert("An email has beeen sent to you");
} else {
    
    $errors['wrong email']="Wrong Credentials";
    header('location:login.php');
}
}

}}
?>