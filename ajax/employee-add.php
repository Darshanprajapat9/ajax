<?php
 include ("connection.php" ); 
$name =  $_POST['name' ]; 
$email =  $_POST['email' ]; 
$gender =$_POST['gender'];
$address =  $_POST['address' ]; 
$phone =  $_POST['phone' ]; 
$position =  $_POST['position' ]; 


$sql=  "INSERT  INTO `employees`(`name` , `email`,`gender` , `address` , `phone`,`position`)
 VALUES  ('$name','$email','$gender','$address','$phone','$position')" ; 

if(mysqli_query($conn , $sql)){
    $response = [
        'status'=>'ok',
        'success'=>true,
        'message'=>'Record created succesfully!'
    ];
    print_r(json_encode($response));
}else{
    $response = [
        'status'=>'ok',
        'success'=>false,
        'message'=>'Record created failed!'
    ];
    print_r(json_encode($response));
} 
?> 