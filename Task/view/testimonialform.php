<?php
require_once '../model/connect.php';
if(isset($_POST['submit'])){

   $name=$_POST['name'];
   $testimonial=$_POST['testimonial'];
   $dos = date('y-m-d', strtotime($_POST['dos']));

   $con = getConnection();
   $sql="insert into `testimonial` (name,testimonial,dos) 
   values('$name','$testimonial', '$dos')";
   $result=mysqli_query($con, $sql);
   if($result){
    // echo"Data inserted Successfully";
    header('location: ../model/testimonial.php');
   } else{
    die(mysqli_error($con));
   }
}
?>

<html lang="en">
<head>
    <title>Testimonial Board</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<script>
function validateForm() {
    var name = document.forms["testimonialform"]["name"].value;
    var testimonial = document.forms["testimonialform"]["testimonial"].value;
    var dos = document.forms["testimonialform"]["dos"].value; 

    var dosRegex = /^\d{2}-\d{2}-\d{4}$/;
var testDate = "08-24-2023";

    if (name == "") {
        alert("Name must be filled out");
        return false;
    }
    if (testimonial == "") {
        alert("Testimonial must be filled out");
        return false;
    }
    if (dos == "") {
        alert("Date of Submission must be filled out");
        return false;
    } 
}
</script>

<body>
    <div class="signup-content">
        <form  name="testimonialform" onsubmit="return validateForm()" method="POST">
            <h1>Testimonial Upload Form</h1>
            <table>
                <tr>
                    <td>
                        <label class="notice-button" for="name">Name</label><br />
                        <input type="text" name="name" />
                    </td>
                </tr>
                <td>
                  <label class="testmonial-button" for="name">Testimonial</label><br />
                <input type="text" name="testimonial" id="testimonial" value="" onkeyup="getUser()">
        <input type="button" name="click" value="click" onclick="ajax()">
        <input type="button" name="click" value="submit" onclick="alert('Are You sure to submit this form!')">
        <p id="msg"></p><br>
            <h1></h1>
            <script>
                

function change(){
    
    let obj = document.getElementsByTagName('h1')[0];
        obj.innerHTML = "TEST....";
        obj.style.color = 'red';
}

function ajax(){
    let testimonial = document.getElementById('testimonial').value;
    let xhttp = new XMLHttpRequest();
    xhttp.open('post', '../controller/testimonial.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('testimonial='+testimonial);

    xhttp.onreadystatechange = function(){
        
        if(this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            document.getElementsByTagName('h1')[1].innerHTML = this.responseText;
        }
    }

}

function getUser(){
    let testimonial = document.getElementById('testimonial').value;
    //alert(notice);

    if(testimonial == ""){
        document.getElementById('msg').innerHTML = "null value";
        document.getElementById('msg').style.color= "blue";
    }else{
        document.getElementsByTagName('h1')[0].innerHTML = testimonial;
    }

}
</script>
</td>
   <tr>
      <td>
      <label for="dos">Date of Submission:</label>     
        <input type="date" id="dos" name="dos" required>
      </td>
   </tr>
            </table><hr>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>   
        </form>
</body>
</html>