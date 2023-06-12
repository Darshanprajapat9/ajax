<?php 

include 'conn.php';



$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data ,true);

$name = $mydata['name'];
$email = $mydata['email'];
$password = $mydata['password'];


if(!empty($name) && !empty($email) && !empty($password)){
    $sql ="INSERT INTO `student`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";
  $result = mysqli_query($conn ,$sql);

if($result ==TRUE){
    echo "student saved sucessfully";
}else{
    echo "unale to save stdent";
}
  
}else{
    echo "fill all filed";
}

?>






