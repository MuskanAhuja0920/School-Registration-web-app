<?php  
$connect = mysqli_connect("localhost", "root", "", "userverification",3307);
$sql = "INSERT INTO student (class1,firstname,lname,gender,dob,city,taluka,district,state,country,nationality,religion,caste,category,mothertongue,lang,ffname,fmname,fsurname,fqual,foccu,mfname,mmname,msurname,mqual,moccu,income,raddr,email,aadhar,distance,landmark,whatsappno,telno,paddr,brosis,file) VALUES ('".$_POST["class1"]."','".$_POST["firstname"]."','".$_POST["lname"]."','".$_POST["gender"]."','".$_POST["dob"]."','".$_POST["city"]."','".$_POST["taluka"]."','".$_POST["district"]."','".$_POST["state"]."','".$_POST["country"]."','".$_POST["nationality"]."','".$_POST["religion"]."','".$_POST["caste"]."','".$_POST["category"]."','".$_POST["mothertongue"]."','".$_POST["lang"]."','".$_POST["ffname"]."','".$_POST["fmname"]."','".$_POST["fsurname"]."','".$_POST["fqual"]."','".$_POST["foccu"]."','".$_POST["mfname"]."','".$_POST["mmname"]."','".$_POST["msurname"]."','".$_POST["mqual"]."','".$_POST["moccu"]."','".$_POST["income"]."','".$_POST["raddr"]."','".$_POST["email"]."','".$_POST["aadhar"]."','".$_POST["distance"]."','".$_POST["landmark"]."','".$_POST["whatsappno"]."','".$_POST["telno"]."','".$_POST["paddr"]."','".$_POST["brosis"]."','".$_POST["file"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>