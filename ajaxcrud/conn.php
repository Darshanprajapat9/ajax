<?php 
$servername = "localhost";
$username ="root";
$password = "";
$dbname ="ajax";

$conn = mysqli_connect("localhost","root","","ajax");
if($conn ==false){
    die("could not connection ".mysqli_connect_error());
}

?>