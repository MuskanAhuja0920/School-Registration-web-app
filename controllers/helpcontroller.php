<?php
session_start();
require 'config/db.php';
require_once 'emailController.php';

$errors=array();
$username="";
$email="";
if(isset($_POST['login-btn']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$subject=$_POST['subject'];
$query=$_POST['query'];

if(empty($username))
{
    $errors['username']="Username required";

}
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $errors['email']="Email address is invalid";
}
if(empty($email))
{
    $errors['email']="Email required";

}
if(empty($phonenumber))
{
    $errors['phonenumber']="Phone number required";

}
if(empty($subject))
{
    $errors['subject']="subject required";

}
if(empty($query))
{
    $errors['query']="Please type in your query.";

}
$emailQuerry="SELECT * FROM help WHERE email=? LIMIT 1";
$stmt=$conn->prepare($emailQuerry);
$stmt->bind_param('s',$email);        // S IS for string
$stmt->execute();
$result= $stmt->get_result();
$userCount=$result->num_rows;
$stmt->close();

/*$mailTo="webapp.services@gmail.com";
$headers= "From: ".$email;
$txt="You have received an email from".$username.".\n\n".$query;
mail($mailTo,$subjec,$txt,$headers);
header('location:index.php?mailsent');*/
if(count($errors)===0)
{
    $sql="INSERT INTO help (username,email,phonenumber,subject,query) VALUES (?,?,?,?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param('ssiss',$username,$email,$phonenumber,$subject,$query);
    
    if($stmt->execute())
    {
        $user_id=$conn->insert_id;
        sendQueryEmail($email);
        sendUserEmail($email);
        function_alert("Your query is recieved, Thank you for contacting us."); 
        //Response.Write("<script>alert('you are redirected to home page')</script>");
        //Server.Transfer("help.php");
        //header('location:help.php');
        exit();

    }
    else
    {
        $errors['db_error']="Database error:failed to register";  
    }
}
}

?>
