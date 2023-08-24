<?php
session_start();
require_once("registationcheckdata.php");
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $mobile_number = $_POST['mobile_number'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $division = $_POST['division'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if (empty($name) || empty($email) ||empty($dob) || empty($mobile_number) ||empty($gender) ||empty($blood_group) ||empty($division) ||empty($city) ||empty($address) ||empty($password) || empty($confirm_password)) {
        echo "Null Input";
    } else {
        $user = [
            'email' => $email,
            'dob' => $dob,
            'mobile_number' => $mobile_number,
            'gender' => $gender,
            'blood_group' => $blood_group,
            'division' => $division,
            'city' => $city,
            'address' => $address,
            'password' => $password,
            'confirm_password' => $confirm_password,
            'type' => 'Admin'
        ];
        $status = updateUser($user);
        if ($status) {
            header("location:welcome.php");
        } else {
            echo "Error";
        }
    }
}
