<?php
include '../model/connect.php';
$id = $_GET['id'];
$con = getConnection();
$sql = "SELECT * FROM `testimonial` WHERE `id` = $id";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) == 0) {

  die("Testimonial with ID $id does not exist.");
}

$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {

  $name =$_POST['name'];
  $testimonial =$_POST['testimonial'];


  $sql = "UPDATE `testimonial` SET `testimonial` = '$testimonial',`name` = '$name' WHERE `id` = $id";

  $result = mysqli_query($con, $sql);

  if ($result) {

    $msg = "Testimonial with ID $id has been updated.";
  } else {

    $msg = "Error updating Testimonial with ID $id: " . mysqli_error($con);
  }

  header("Location: ../model/testimonial.php?msg=" . urlencode($msg));

  exit();
}
?>
<form method="post">
  
  <div class="form-group">
    <label for="name">Name</label><br>
    <input type="name" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
  </div>
  <div class="form-group">
    <label for="testimonial">testimonial</label><br>
    <input type="text" class="form-control" id="testimonial" name="testimonial" value="<?php echo $row['testimonial']; ?>">
  </div><hr>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
