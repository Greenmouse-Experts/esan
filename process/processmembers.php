<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php


    //create member from member page
    if(isset($_POST['create'])){

        $user_fullname =  test_input($_POST["user_fullname"]);
        $username =  test_input($_POST["username"]);
        $email =  test_input($_POST["email"]);
        $password = test_input($_POST["password"]);

        //password encryption
        $password = password_hash($password,PASSWORD_DEFAULT);

        // database insert SQL code
        $sql = "INSERT INTO `users` (`user_fullname`, `username`, `user_email`, `user_password`) VALUES ('$user_fullname', '$username', '$email', '$password')";

        // insert in database 
        $rs = mysqli_query($conn, $sql);

        if($conn->connect_error) {
            die('Connection Failed : '.$conn->connect_error);
        }elseif($rs)
        {
            $_SESSION['message'] = " Member created ";
            header("Location:../admin/createmember.php");
            $conn->close();
        }
    }   


