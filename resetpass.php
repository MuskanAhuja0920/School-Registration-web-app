<?php

if(isset($_POST["resetpass"]))
{
    $selector=$_POST["selector"];
    $validator=$_POST["validator"];
    $password=$_POST["newPassword"];
    $passwordRepeat=$_POST["confirmPassword"];

    if(empty($password)||empty($passwordRepeat))
    {
        header("location:recoverpass.php?newpwd=empty");
        exit();
    }
    else if($password!=$passwordRepeat)
    {
        header("location:recoverpass.php?newpwd=pwdnotsame");
        exit();
    }
    $currentDate=date("U");
    require 'config/db.php';
    $sql="SELECT * FROM pwdreset where selector=? AND expires >= '$currentDate'";
    $stmt=$conn->prepare($sql);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        echo "There was an error";
        exit();
    }
    else
    {
               
        $stmt->bind_param("s",$selector);
        $stmt->execute();
        $result= $stmt->get_result();
        $row=$result->num_rows;
        $user=$result->fetch_assoc();
        //$stmt->close();
        if(!$row>0)
        {
            
            echo "Re-submit your reset request";
            exit();
        }
        else
        {       echo $row["email"];
                echo $row["token"];
                $tokenBin=hex2bin($validator);
                $tokenCheck=password_verify($tokenBin,$user["token"]);
                if($tokenCheck===false)
                {
                    echo "Re-submit your reset request";
                }
                elseif($tokenCheck===true)
                    {
                    $tokenEmail=$user['email'];
                    $sql="SELECT * FROM users where email=? LIMIT 1";
                    $stmt=mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql))
                        {
                            echo "There was an error 1";
                            exit();
                        }
                    else
                    {
                        $stmt->bind_param("s",$tokenEmail);
                        $stmt->execute();
                        $result= $stmt->get_result();
                        $row=$result->num_rows;
                        $user=$result->fetch_assoc();
                        if(!$row>0)
                            {
                                echo "There was an error!";
                                exit();
                            }
                        else
                            {
                                $sql="UPDATE users SET password=? where email=?";  
                                $stmt=mysqli_stmt_init($conn);
                                if(!mysqli_stmt_prepare($stmt,$sql))
                                {
                                    echo "There was an error";
                                    exit();
                                }
                                else
                                {
                                    $newPwdHash=password_hash($password, PASSWORD_DEFAULT);
                                    mysqli_stmt_bind_param($stmt,"ss",$newPwdHash,$tokenEmail);
                                    mysqli_stmt_execute($stmt);        
                    
                                    $sql="DELETE FROM pwdreset where email=?";
                                    $stmt=mysqli_stmt_init($conn);
                                    if(!mysqli_stmt_prepare($stmt,$sql))
                                    {
                                        echo "There was an error";
                                        exit();
                                    }
                                    else
                                    {
                                    
                                        mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                                        mysqli_stmt_execute($stmt);    
                                        header("location:login.php?newPassword=passwordupdated") ;
                                    }
                                }

                
                             }
                    }
                }
        }
    }
}
else
{
    header("location:login.php");
}