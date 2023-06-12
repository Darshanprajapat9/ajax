<?php
include ("connection.php" );
$name= $_POST['name' ];
$email= $_POST['email' ];
$gender =$_POST['gender'];
$address= $_POST['address' ];
$phone= $_POST['phone' ];
$position =$_POST['position'];


$id= $_POST['employee_id' ];
$sql= "UPDATE `employees`  SET  `name` = '". $name."'  , `email` =  '". $email."' , `gender` =  '". $gender."' , 
`address`  =  '".$address ."' , `phone`  ='".$phone ."' ,  `position` =  '". $position."'   WHERE `id` = $id " ;

if(mysqli_query($conn , $sql)){
    $response = [
        'status'=>'ok',
        'success'=>true,
        'message'=>'Record updated succesfully!'
    ];
    print_r(json_encode($response));
}else{
    $response = [
        'status'=>'ok',
        'success'=>false,
        'message'=>'Record updated failed!'
    ];
    print_r(json_encode($response));
} 
?>