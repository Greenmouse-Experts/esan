<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
//include"../includes/sendmail.php";
?>
<?php
    

     //update memeber
     if(isset($_POST['reset'])){
        $user_id =  test_input($_POST["user_id"]);
        $user_password =  test_input($_POST["user_password"]);

        //password encryption and sql query to update password
        $new_password = password_hash($user_password,PASSWORD_DEFAULT);

        $sql= "UPDATE users set user_password='$new_password' WHERE user_id = '$user_id'";
        $update = mysqli_query($conn,$sql);
        if($update){
  //      sendApprovalEmail($email);
        $_SESSION['message']=" Password Reset";
        header('Location:../admin/passwordreset.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }
    } 

  