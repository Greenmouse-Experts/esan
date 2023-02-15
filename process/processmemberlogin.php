<?php session_start();
include "../includes/dbconnection.php";
include "../includes/formfunctions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["data"])) {
      $_SESSION['error']="  Email is required";
      header("Location:../login.php");
      die();
    } else {
      $data =  test_input($_POST["data"]);
    }
    
    if(empty($_POST["password"])) {
      $_SESSION['error']="Password is required";
      header("Location:../login.php");
      die();
    } else {
      $password = test_input($_POST["password"]);
    }
    
  }

// check if user exist
$sql= " SELECT * FROM users WHERE  user_email='$data' ";
    if($result = mysqli_query($conn,$sql)){
        if (mysqli_num_rows($result)<1){
            $_SESSION['error'] = " Wrong details";
            header("Location:../login.php");
            die();
          }       
      }




if(mysqli_num_rows($result)==1){
    //extract data from db row and store in an array
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $db_password = $row["user_password"];
        $_SESSION['userfullname'] = $row["user_fullname"];
        $_SESSION['useremail'] = $row["user_email"];
        $_SESSION['userphone'] = $row["user_phone"];
        $_SESSION['usergender'] = $row["user_gender"];
        $_SESSION['userstate'] = $row["user_state"];
        $_SESSION['userlga'] = $row["user_lga"];
        $_SESSION['userstreet'] = $row["user_streetaddress"];
        $_SESSION['userstatus'] = $row["user_status"];
        $_SESSION['userbday'] = $row["user_birthday"];
        $_SESSION['approval'] = $row["user_approval"];
        $approval=$row["user_approval"];  
        
        
        
    // check for password matching
    if(password_verify($password, $db_password)){
        if($approval!="yes"){
          $_SESSION['error'] = "Your account has not be approved contact Admin";
          header("Location:../login.php");
          die();  
        }
        $_SESSION['logged'] = $row["user_id"];
        header("Location:../member/index.php");
        die();
      }else{
          $_SESSION['error'] = " Wrong login details";
          header("Location:../login.php");
          die();
      }
    
}