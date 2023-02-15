<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php
    //set dues
    if(isset($_POST['setdues'])){
        $dueprice =  test_input($_POST["dueprice"]);
        $sql= "UPDATE  due SET due_amount='$dueprice'  WHERE due_id = '1'";
        $insert = mysqli_query($conn,$sql);
        if($insert){
        $_SESSION['message']=" Due price set ";
        header('Location:../admin/duesuc.php');
        die();
        }else{
        die();
        }
    }   



