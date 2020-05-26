<?php
session_start();
require 'config/db.php';
$errors=array();
$username="";
$email="";

if(isset($_POST['login-btn']))
{
    
    $username=$_POST['username'];

    $password=$_POST['password'];
    
    
    //validation
    if(empty($username))
    {
        $errors['username']="Username required";
    
    }
    if(empty($password))
    {
        $errors['password']="Password required";
    }
    
    if(count($errors)===0)
    {
    $sql=" SELECT * FROM admintable WHERE username='$username' AND password='$password' LIMIT 1";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
    if(mysqli_num_rows($result)==1)
        {
            echo "login succesfull";
            $_SESSION['username']=$username;
            header('location:adminpage.php');
        }
        else
        {
            echo "login unsuccesfull";
            
            header('location:adminlogin.php');
        }

    }
}
}

if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    header('location:adminlogin.php');
    exit();
}
?>
