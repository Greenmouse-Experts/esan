<?php session_start();
if(!isset($_SESSION['adminlogged'])){
    header("Location:login.php");
}
$id = $_SESSION['adminlogged'];
?>
<?php include "../includes/head.php";?>
<?php include "../includes/count.php";?>
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
                    <?php include "../includes/header.php";?>
                    <!-- dashboard area -->
                    
                    <div class="row mt-3">
                        <!-- top kpis -->
                        <div class="col-md-4 mb-2">
                            <div class="card  kpi">
                                <div class="card-body">
                                  <h5 class="card-title text-comp">Members</h5>
                                  <span><?php countMembers();?></span>
                                  <i class="fa fa-users kpi--icons"></i>
                                </div>
                              </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="card  kpi kpi-ext">
                                <div class="card-body">
                                    <h5 class="card-title text-comp">Vacancies</h5>
                                    <span class="card-text"><?php countVacancy();?></span>
                                    <i class="fa fa-wrench kpi--icons"></i>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card  kpi kpi-ext2">
                                <div class="card-body">
                                    <h5 class="card-title text-comp">Message</h5>
                                    <span class="card-text"><?php countMessages();?></span>
                                    <i class="fa fa-envelope kpi--icons"></i>
                                </div>
                              </div>
                        </div>
                    </div>

                    <!-- second level kpis -->
                    <div class="row mt-2">
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-brand--sec">
                                    <h4 class="text-white"> Approved Members  <i class="fa fa-users kpi--icons kpi--icons-light"></i></h4>
                                   
                                  </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-stripped">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Registered </th>
                                                <th>Status</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                            </thead>
                                            <tbody>

                                    <?php
                                  
                                        $sql= " SELECT * FROM users WHERE user_approval is NOT NULL";
                                        if($result = mysqli_query($conn,$sql)){ 
                                              if (mysqli_num_rows($result)>0){
                                                  $n=1;
                                                  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                                    $user_id= $row['user_id'];
                                                    $user_fullname = $row['user_fullname'];
                                                    $user_phone = $row['user_phone'];
                                                    $user_email = $row['user_email'];
                                                    $user_gender = $row['user_gender'];
                                                    $user_status = $row['user_status'];
                                                    $register = $row['reg_fee'];
                                              
                                                  ?>
                                                  
                                                    <tr>
                                                        <td><?php echo $n;?></td>
                                                        <td><?php echo  $user_fullname;?></td>
                                                        <td><?php echo  $register;?></td> 
                                                        <td><?php echo  $user_status;?></td>
                                                        <td><?php echo  $user_phone;?></td>
                                                        <td><?php echo  $user_email;?></td>
                                                        <td><?php echo  $user_gender;?></td>       
                                                    </tr>
                                                  
                                                  <?php  
                                                  $n++;    
                                                }
                                            }   
                                        }else { 
                                            echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                                        } 

                              
                                    ?>
                                               
                                            </tbody>
                                        </table>
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