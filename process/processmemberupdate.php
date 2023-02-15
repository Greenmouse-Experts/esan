<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
//include"../includes/sendmail.php";
?>
<?php
    

     //update memeber
     if(isset($_POST['update'])){
        $user_id =  test_input($_POST["user_id"]);
        $user_fullname =  test_input($_POST["user_fullname"]);
        $username =  test_input($_POST["username"]);
        $user_email =  test_input($_POST["user_email"]);
        $user_phone =  test_input($_POST["user_phone"]);
        $user_gender =  test_input($_POST["user_gender"]);
        $user_state =  test_input($_POST["user_state"]);
        $user_lga =  test_input($_POST["user_lga"]);
        $user_streetaddress =  test_input($_POST["user_streetaddress"]);
        $user_status =  test_input($_POST["user_status"]);
        $user_birthday =  test_input($_POST["user_birthday"]);
        $reg_fee =  test_input($_POST["reg_fee"]);
        $reg_date =  test_input($_POST["reg_date"]);
        $user_approval =  test_input($_POST["user_approval"]);

        $sql= "UPDATE users set user_fullname='$user_fullname', username='$username',
        user_email='$user_email', user_phone='$user_phone', user_gender='$user_gender',
        user_state='$user_state', user_lga='$user_lga', user_streetaddress='$user_streetaddress',
        user_status='$user_status', user_birthday='$user_birthday', reg_fee='$reg_fee',
        reg_date='$reg_date', user_approval='$user_approval' WHERE user_id = '$user_id'";
        $update = mysqli_query($conn,$sql);
        if($update){
  //      sendApprovalEmail($email);
        $_SESSION['message']=" User Updated";
        header('Location:../admin/members.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }
    } 

  