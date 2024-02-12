<?php
require 'config/database.php';

if(isset($_POST['submit'])){
    //get the form submission data
$username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (!$username_email) {
    $_SESSION['signin'] = "Please enter username or email address";
} elseif (!$password){
    $_SESSION['signin'] = "Please enter password";
} else {
    //fetch user dat from database
    $fetch_user_query = "SELECT * FROM user WHERE email = '$email'";
    $fetch_user_result = mysqli_query($connection, $fetch_user_query);

    if(mysqli_num_rows($fetch_user_result) == 1){
        //convert the record into an assoc array
        $user_record = mysqli_fetch_assoc($fetch_user_result);
        $db_password = $user_record['password'];

        //compare the passwords

        if(password_verify($password, $db_password)){
            //set session for access control

            $_SESSION['user-id'] = $user_record['id'];

    } else{
        $_SESSION['signin'] = "User not found";
    }
}
//if an error occured, redirect back to login with login details

if(isset($_SESSION['signin'])) {
    $_SESSION['signin-data'] = $_POST;
    header('location: ' . ROOT_URL .'login.php');
    die();
}
} else {
    header('location: ' . ROOT_URL . 'login.php');
    die();
}