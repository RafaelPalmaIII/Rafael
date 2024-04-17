<?php
session_start();
include('dbcon.php');

function sendemail_verify($name,$email,$verify_token);
{

}



if(isset($_POST['register_btn']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verify_token = md5(rand());

    // Email Exist or not
    $check_email_query = "SELECT email FROM user1 WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Id already exists";
        header("Location: register.php");
    }
    else
    {
        // Insert new user into the database
        $insert_query = "INSERT INTO user (name, phone, email, password, verify_token) VALUES ('$name', '$phone', '$email', '$password', '$verify_token')";
        $insert_query_run = mysqli_query($con, $insert_query);

        if($insert_query_run)
        {
            sendemail_verify("$name","$email","$verify_token");

            $_SESSION['status'] = "User registered successfully, Please verify your Email Address";
            header("Location: register.php");
        }
        else
        {
            $_SESSION['status'] = "Failed to register user";
            header("Location: register.php");
        }
    }
}

?>
