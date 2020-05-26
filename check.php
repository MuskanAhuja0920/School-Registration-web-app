<?php 
    require 'config/db.php';

    // query to fetch Username and Password from 
    // the table geek 
    $query = " SELECT * FROM admintable WHERE email='webapp.services.ma@gmail.com' OR username='adminM' AND password='M@webapp' LIMIT 1"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($conn, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf("Number of row in the table : " . $row); 
    
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($conn); 
?> 