<?php 
session_start();
include "../includes/dbconnection.php";
$id=$_SESSION['logged'];
$renewal_date=date('Y-m-d');
$renewal_ref=$_GET['pref'];
$renewal_date;

 

$insert = " INSERT INTO membership_renewal(user_id,renewal_date,renewal_ref)VALUES ('$id','$renewal_date','$renewal_ref') ";
$result = mysqli_query($conn,$insert);
if($result){
$_SESSION['message'] = " Payment was successful ";
header("Location:../member/dues.php");
}
?>