<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
//include"../includes/sendmail.php";
?>
<?php
    

     //approve member from upgrade page
     if(isset($_GET['approve'])){
        $userid =  test_input($_GET["userid"]);
        $email =  test_input($_GET["email"]);
        $sql= "UPDATE users SET user_approval = 'yes'  WHERE user_id = '$userid'";
        $update = mysqli_query($conn,$sql);
        if($update){
  //      sendApprovalEmail($email);
        $_SESSION['message']=" User approved ";
        header('Location:../admin/pendingmembers.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }
    } 

  