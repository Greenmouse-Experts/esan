<?php session_start();?>
<?php include "../includes/dbconnection.php";?>
<?php include "../includes/formfunctions.php";?>
<?php

$id = $_SESSION['logged'];
$name=$_SESSION['userfullname'];
//collect data from form on profile.php
if (isset($_POST['profile'])){
  
      $fname = test_input($_POST["fname"]);
      $email = test_input($_POST["email"]);
      $phone = test_input($_POST["phone"]);
      $state = test_input($_POST["state"]);
      $lga = test_input($_POST["lga"]);
      $street = test_input($_POST["street"]);
      $bday = test_input($_POST["bday"]);
      $gender = test_input($_POST["gender"]);


      $sql = " UPDATE users SET user_fullname = '$fname',user_email = '$email',user_phone = '$phone',user_state = '$state',user_lga = '$lga',user_streetaddress = '$street',user_birthday = '$bday',user_gender = '$gender' WHERE user_id = '$id' ";
      if($result = mysqli_query($conn,$sql)){
        // reset data  session        
            $_SESSION['username'] = $uname;
            $_SESSION['userfullname'] = $fname;
            $_SESSION['useremail'] = $email;
            $_SESSION['userphone'] = $phone;
            $_SESSION['usergender'] = $gender;
            $_SESSION['userstate'] = $state;
            $_SESSION['userlga'] = $lga;
            $_SESSION['userstreet'] = $street;
            $_SESSION['userbday'] = $bday;
            $_SESSION['message'] = " Profile successfully updated";
            header("Location:../member/index.php");
            die();

        }else{
                
            echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
        
        }
  
  
  }
  
  
  
// profile picture upload

if(isset($_POST['pic'])) {
    
  if(empty($_FILES["attachment"])) {
      $_SESSION['error']=" pic is required";
      header("Location:../member/profile.php");
      die();
    } else {
      $info = pathinfo($_FILES['attachment']['name']);
      $ext = $info['extension'];
      $cv = $name.".".$ext; 
      $target = '../profile/'.$cv;
      move_uploaded_file( $_FILES['attachment']['tmp_name'], $target);
    }


    $sql = " UPDATE users SET user_pic = '$target' WHERE user_id = '$id' ";
    if($result = mysqli_query($conn,$sql)){
          $_SESSION['message'] = " Profile picture successfully updated";
          header("Location:../member/index.php");
          die();
      }else{
          echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
      }

}