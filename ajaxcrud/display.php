<?php

include 'conn.php';




$sql = " SELECT * FROM student" ;

$result = mysqli_query($conn , $sql);

$output = "";

if(mysqli_num_rows($result) >0){

    $output = '<table border="3" width="100%" cellspecing="0" cellpadding="10p">
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th colspan="2"> Action <th>
    </tr>';

    while($row = mysqli_fetch_array($result)){
        $output.= "<tr id='record_".$row['id']."'>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['password']."</td>
        <td><button class='update-btn' data-id='{$row["id"]}'>Edit</button></td>
        <td><button class='delete-btn' data-id='{$row["id"]}'>Delete</button></td>
        </tr>";
    }
    $output .="</table>";
   mysqli_close($conn);

   echo $output;
}else{
    echo "record not found";
}