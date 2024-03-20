<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "ipt101";

// Connection
$con = mysqli_connect("$host","$username","$password","$database");

// Check Connection
if(!$con)
{
    //header("Location: ../errors/db.php");
   // die();

}
//else{
    //echo "Database Connected.!";
//}
?>