<?php 

include 'conn.php';

 $name =  $_POST['name'];
 $email  = $_POST['email'];
 $gender = $_POST['gender'];
 $dob =    date('y-m-d',strtotime($_POST['dob']));
 $phone = $_POST['phone'];
 $address = $_POST['address'];
 $hobbise =implode(", ", $_POST['hobbise']);
 $technology  = $_POST['technology'];
 


$sql  = "INSERT INTO `student`(`name`, `email`,`gender`,`dob`, `phone`,`technology`,`hobbise` ,`address`) VALUES ('$name','$email','$gender','$dob','$phone','$technology','$hobbise','$address')";

$result = mysqli_query($conn , $sql);

if($result){
    echo "sucessful insert data";

}


?>