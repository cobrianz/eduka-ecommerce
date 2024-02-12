<?php
require 'config/database.php';


//get data from database

if(isset($_POST['submit'])){

$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);   
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);   
$password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);   
$confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);   

//validate inputs

if(!$name){
    $_SESSION['signup'] = "Please enter your name";
    } elseif(!$email){
        $_SESSION['signup'] = "Please enter your email";
        } elseif(strlen($password) < 8 || strlen($confirmpassword) < 8){
            $_SESSION['signup'] = "Password should be 8+ characters";
                } else{ 
                    //check password equality

                    if($password != $confirmpassword){
                        $_SESSION['signup'] = 'password do not match';
                    } else {
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                        //check if the username arealdy exists

                        $user_check_query = "SELECT * FROM user WHERE email = '$email'";
                        $user_check_result = mysqli_query($connection, $user_check_query);

                        if (mysqli_num_rows($user_check_result) > 0) {
                            $_SESSION['signup'] = "Email already exist";
                        } else {
                            $time = time();
                        }
                           }
                    }
                }

               //if there is an error redirects back to login

               if(isset($_SESSION['signup'])){
                //pass data to signup page
                $_SESSION['signup-data'] = $_POST;
                header('location: ' . ROOT_URL .'signup.php');
                die();
               } else {
                //insert  data into database
                 $insert_user_query = "INSERT INTO user (id, name, email, password) VALUES ('$time','$name','$email','$hashed_password')";

                $insert_user_result = mysqli_query($connection, $insert_user_query);
               }

                 if(!mysqli_errno($connection)){
                    //redirect to login page with success message

                    $_SESSION['signup-success'] = "Registration Successfully. Please login";
                    header('location: ' . ROOT_URL .'login.php');
                    die();
                 } else{

//if button was not clicked then back to signup

header('Location: '. ROOT_URL . '/signup.php');
die();

}