<?php 

$servername = "localhost";
$username  = "root";
$password = "";
$dbname = "ajax";

$conn = mysqli_connect("localhost","root","", "ajax");
if($conn == false){
    die("database could'not connected".$mysqli_connect_error());
}
else{
    echo "connection succesfull";
}
?>