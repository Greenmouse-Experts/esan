<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
//include"../includes/sendmail.php";
?>
<?php
    

     //delete member
     if(isset($_GET['delete'])){
        $userid =  test_input($_GET["userid"]);
        $email =  test_input($_GET["email"]);
        $sql = "DELETE FROM users WHERE user_id = '$userid'";
        $delete = mysqli_query($conn,$sql);
        if($delete){
  //      sendApprovalEmail($email);
        $_SESSION['message']=" User deleted ";
        header('Location:../admin/pendingmembers.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }
    } 

  