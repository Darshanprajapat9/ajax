<?php 
include 'conn.php';

$sql = "SELECT * FROM `student`";
$res = mysqli_query($conn , $sql);

while($row = mysqli_fetch_array($res)){    
?>     
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['dob']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['technology']; ?></td>
        <td><?php echo $row['hobbise']; ?></td>
        <td><?php echo $row['address']; ?></td>     
       
        <td><button class="btn btn-outline-danger" onclick ="update_record('<?php echo $row['id']; ?>')" id="<?php  $row['id'] ?>">edit</button>
        </td>
     
        <td><button class="btn btn-outline-warning del" id="<?php echo $row['id']; ?>" 
        onclick="delete_record('<?php echo $row['id']; ?>');">Delete</button></td>
    </tr>
<?php   
}
?>