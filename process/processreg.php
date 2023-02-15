<?php session_start();?>
<?php include "../includes/dbconnection.php";?>
<?php
$id=$_SESSION['logged'];
$reg_date=date('Y-m-d');
$reg_ref=$_GET['pref'];

 

$insert = " INSERT INTO regfee(user_id,reg_date,reg_ref)VALUES('$id','$reg_date','$reg_ref') ";
$result = mysqli_query($conn,$insert);
if($result){
    $update= " UPDATE users SET reg_fee = 'yes',reg_date='$reg_date' WHERE user_id = '$id' ";
    if ($sql = mysqli_query($conn,$update)){
        $_SESSION['message'] = " Registeration Payment was successful ";
        $_SESSION['reged'] ='yes';
        header("Location:../member/index.php");
    }else {
        echo mysqli_error($conn);
    }
    
}else{
    echo mysqli_error($conn);
}
?>