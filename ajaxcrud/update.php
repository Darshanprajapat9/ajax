
<?php 

include 'conn.php';

$id = $_POST['id'];

$SELECT = "SELECT * FROM `student` WHERE id = '$id'";

echo $SELECT;


?>

