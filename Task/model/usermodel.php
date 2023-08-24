<?php 
    require_once('../model/connect.php');
    function auth($username, $password){

        $con = getConnection();
        $sql = "select * from registration where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count > 0){
            // echo "working!";
            return true;
        }else{
            return false;
        }
    }

    function addUser($user){
        $con = getConnection();
        $sql = "insert into registration VALUES ('{$user['id']}', '{$user['username']}','{$user['email']}','{$user['password']}','{$user['phone']}','{$user['address']}','{$user['dob']}')";
        $result = mysqli_query($con, $sql);
        return $result;
        }       
    function seeByEmail($username)
        {
            $con = getConnection();
            $sql = "select * from registration where email='{$email}'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
        function updateUser($username, $email, $password, $gender, $dob, $image)
        {
            $row = seeByUsername($username);
            if(empty($password)) $password = $row['password'];
            if(empty($image)) $image = $row['profilePicture'];
            
            $con = getConnection();
            $query = "update user set name='{$name}', password='{$password}', email='{$email}', gender='{$gender}', dob='{$dob}', profilePicture='{$image}' where  username='{$username}'";
            $result = mysqli_query($con,$query);
            return $result;
        }
        
        
        function updatePassword($username, $password)
        {
            $con = getConnection();
            $query = "update user set password='{$password}'where username='{$username}'";
            $result = mysqli_query($con,$query);
            return $result;
        }
    
    
?>