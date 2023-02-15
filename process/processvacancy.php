<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php


    //create vacancy from vacancy page
    if(isset($_POST['create'])){

        $jobtitle =  test_input($_POST["jobtitle"]);
        $deadline =  test_input($_POST["deadline"]);
        $jobdsc=  test_input($_POST["jobdsc"]);
        
        $sql= "INSERT INTO jobs(job_title,deadline,job_dsc)VALUES('$jobtitle','$deadline','$jobdsc')";
        $insert = mysqli_query($conn,$sql);
        if($insert){
        $_SESSION['message']=" Vacancy created successfully";
        header('Location:../admin/vacancysuc.php');
        die();
        }else{
        echo   mysqli_error($conn);
        die();
        }
    }   

     //delete vacancy from vacancy page
     if(isset($_POST['deletejob'])){
        if(isset($_POST['jobid']) && !empty($_POST['jobid'])){
            $jobid = $_POST['jobid'];
            $sql= "DELETE  FROM jobs  WHERE job_id ='$jobid'";
            $delete = mysqli_query($conn,$sql);
            if($delete){
                $_SESSION['message']=" Vancancy and all applicants  successfully deleted ";
                header('Location:../admin/vacancysuc.php');
                die();
            }else{
                echo  mysqli_error($conn);
                die();
            }
        }
    }
