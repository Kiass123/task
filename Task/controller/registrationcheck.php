<?php 
    session_start();
    require_once('../model/usermodel.php');
    
    if(isset($_REQUEST['submit'])){
        
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $dob = $_REQUEST['dob'];
        

        if($username == "" && $email == "" && $password ==  ""&& $phone == "" && $address == "" && $dob == ""){
            echo "null data found...";
        }else{

            $user = [
            'username'=>$username,
             'email'=> $email, 
             'password'=> $password, 
             'phone'=> $phone,
             'address'=> $address,
             'dob'=> $dob,
            ];
            $result = addUser($user);
            
            if($result){
                header('location:../view/login.php');
            }else{
                echo "Data Error, please try again";
            }
        }
    
    }else{
        
        header('location: ../view/login.php');
    }

?>