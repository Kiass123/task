<?php
include '../model/connect.php';
if (isset($_GET['msg'])) {
  $msg = filter_var($_GET['msg'], FILTER_SANITIZE_STRING);

  echo "<div class='alert alert-success'>$msg</div>";
}
?>
<html lang="en">
<head>
    <title>Operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <link rel="stylesheet" href="../css/style.css">
        <button><a href=" ../view/testimonialform.php">Add New Testimonial</a></button><br><br>

<table class="table table-striped table-bordered" border="1">
  <thead>
    <tr>
      <th>Serial No.</th>
      <th>Name</th>
      <th>Testimonial</th>
      <th>Date Of Submission</th>
      <th>Operation</th>
    </tr>
  </thead> 
  <tbody>
    <?php
      
      $con = getConnection();
      $sql="select * from `testimonial`";
      $result=mysqli_query($con,$sql);
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["testimonial"] . "</td>";
        echo "<td>" . $row["dos"] . "</td>";
        echo "<td><a href='../controller/edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='../controller/delete.php?id=" . $row["id"] . "'>Delete</a></td>";
        echo "</tr>";
      }
      
    ?>
  </tbody>
</table>
<button><a href="../view/dashboard.html">Back</a></button>
</body>
</html>
