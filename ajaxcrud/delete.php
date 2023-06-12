<?php 

include 'conn.php';

$id = $_POST['id'];

$delete = "DELETE FROM `student` WHERE id = '$id'";

if(mysqli_query($conn , $delete)){
    echo $id;
}
else{
    echo 0;
}


?>