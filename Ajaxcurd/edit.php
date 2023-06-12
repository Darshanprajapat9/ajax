<?php 

include 'conn.php';

//echo '<pre>';print_r($_POST);echo '</pre>';
//exit();

  $name =  $_POST['name'];
  $email  = $_POST['email'];
  $gender = $_POST['gender'];
  $dob =    date('y-m-d',strtotime($_POST['dob']));
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $hobbise =implode(", ", $_POST['hobbise']);
  $technology  = $_POST['technology'];
 


 $sql  = "UPDATE `student` SET `name`='$name',`email`='$email',`gender`='$gender',`dob`='$dob',`phone`='$phone',`technology`='$technology',`hobbise`='$hobbise',`address`='$address' WHERE id = '$id'";
  $result = mysqli_query($conn , $sql);

 if($result){
    echo "sucessful update  data";
 }


?>