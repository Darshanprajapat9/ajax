<?php 

include 'conn.php';

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM `student` WHERE `id`='$id'";

    $result = mysqli_query($conn ,$sql); 

    $row = $result->fetch_assoc(); 

    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $gender = $row['gender'];
    $dob = $row['dob'];
    $phone=$row['phone'];
    $technology =$row['technology'];
    $hobbise = $row['hobbise'];
    $address  =$row['address'];  

?> 


                                    <form  method="post" id="editform">
                                      <div class="mb-3">
                                        <label  class="form-label">Name</label>
                                        <input type="name" class="form-control" id="name" value="<?php echo $name; ?>">
                                        </div>
                  
                                      <div class="mb-3">
                                        <label  class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"  value="<?php echo $email; ?>" >
                                      </div>

                                      <div class="mb-3">
                                        <label  class="form-label">Gender</label>
                                        <input type="radio" class="m-2" id="gender" name="gender" value="male"  <?php if($gender == 'male') echo "checked"; ?> >Male
                                        <input type="radio" class="m-2" id="gender" name="gender" value="female"  <?php if($gender == 'female') echo "checked"; ?>>Female
                                      </div>

                                      <div class="mb-3">
                                        <label  class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob"  value="<?php echo $dob; ?>">
                                      </div>

                                      <div class="mb-3">
                                          <label  class="form-label">Phone</label>
                                          <input type="number" class="form-control" id="phone" value="<?php echo $phone; ?>" >
                                          </div>

                                          <div class="mb-3">
                                            <label  class="form-label">Technology</label>
                                            <select class="form-control" id="technology"   >
                                              <option value="select" >Select</option>
                                              <option value="php">PHP</option>
                                              <option value="react">React</option>
                                              <option value="flutter">Flutter</option>
                                              <option value="digital Marketing">Digital Marketing</option>

                                            </select>
                                            </div>

                                            <div class="mb-3">
                                              <label  class="form-label">Hobbise</label>
                                          
                                        <input name="hobbise[]" type="checkbox" id="hobbise"  value="rading" <?php if($hobbise == 'rading') echo "checked"; ?> />Reading
                                        <input name="hobbise[]" type="checkbox" id="hobbise" value="dancing" <?php if($hobbise == 'dancing') echo "checked"; ?>/>Dancing
                                        <input name="hobbise[]" type="checkbox" id="hobbise" value="cricket"  <?php if($hobbise == 'cricket') echo "checked"; ?>/>Cricket
                                        <input name="hobbise[]" type="checkbox" id="hobbise" value="Other"  <?php if($hobbise == 'other') echo "checked"; ?>/>Other
                                              </div>
                    
                                        <div class="mb-3">
                                          <label  class="form-label">Address</label>
                                          <input type="text" class="form-control" id="address"  value="<?php echo $address; ?>">
                                        </div>
                  
                                    
                                      <button type="submit"  class="btn btn-primary" onclick="update_record()" id="add">Update</button>
                                    </form>

                                  <!-----form end-->

                            


