<?php session_start();?>
<?php include "../includes/dbconnection.php";?>
<?php
$donation_date=date('Y-m-d');
$donation_ref=$_GET['pref'];
$amount=$_GET['amount'];
$email=$_GET['email'];
$name=$_GET['name'];

 

$insert = " INSERT INTO donation(name,email,amount,donation_ref,donation_date)VALUES('$name','$email','$amount','$donation_ref','$donation_date') ";
$result = mysqli_query($conn,$insert);
if($result){
$_SESSION['message'] = " Donation was successful ";
header("Location:../dontaions.php");
}
?>