<?php
require 'constants.php';
$conn= new mysqli($dbhost,$dbuser,$dbpass,$dbname,"3307");
if($conn->connect_error)
{
    die('Database error:'.$conn->connect_error);
    echo "Failed to connect";
}
?>