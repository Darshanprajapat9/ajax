<?php 

include 'conn.php';

$id = $_POST['id'];

$sql = "DELETE FROM `student` WHERE id = '$id'";

$res = mysqli_query($conn ,$sql);
if($res) {
    echo "<div class='alert alert-success'>Data delete Sucessfully!!</div>";
}

?>