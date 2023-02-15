<?php session_start();
if(!isset($_SESSION['adminlogged'])){
    header("Location:login.php");
}
?>
<?php 
include"../includes/head.php";
include"../includes/alerts.php";
include"../includes/dbconnection.php";
?>
<title> Admin| Dashboard </title>
</head>
<body>
    <section>
        <div class="container-fluid">
               <!-- mobile nav -->
               <?php include "../includes/adminmobile.php";?>
           
            <div class="row area">
                <!-- side nav -->
                <?php include "../includes/adminside.php";?>

                <!-- top navigation/header -->
                <div class="col-md-10">
                    <header class="row topnav">
                        <div class="col-md-12">
                        <div class="flash"><?php error_alert();success_alert();?></div>
                            <ul class="inline topnav--content">
                                <li class="topnav--link"><i class="fa fa-user mr-2 text-comp"></i><span class="text-comp">Admin</span></li>
                            </ul>
                        </div>
                    </header>

                    <div class="row mt-2">
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-brand--sec">
                                    <h4 class="text-white">Approved Member Password Reset <i class="fa fa-users kpi--icons kpi--icons-light"></i></h4>
                                  </div>
                                <div class="card-body">
                                    <form action="../process/changepassword.php" method="post">
                                    <?php
                                  
                                        $sql= " SELECT * FROM users WHERE user_approval is NOT NULL ";
                                        if($result = mysqli_query($conn,$sql)){ 
                                            if (mysqli_num_rows($result)>0) {
                                                echo "<div class='form-group'>";
                                                echo "<select name='user_id'  class='form-control'>";
                                                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                                    echo "<option value=$row[user_id]>$row[user_email]</option>";
                                                }
                                                echo "</select>";
                                                echo "</div>";

                                                echo "<div class='form-group'>";
                                                echo "<input type='password' name='user_password'  class='form-control' placeholder='Enter New Password'>";
                                                echo "</div>";

                                                echo "<div class='form-group'>";
                                                echo "<input type='submit' name='reset' class='btn btn-primary' value='Reset Password'/>";
                                                echo "</a>";
                                                echo "</div>";
                                            }
                                        }else { 
                                            echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                                        } 

                            
                                    ?>        
                                    </form>
          
                                </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

  <?php include "../includes/footer.php";?> 
</body>
</html>