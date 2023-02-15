<?php session_start();
if(!isset($_SESSION['adminlogged'])){
    header("Location:login.php");
}
?>
<?php include "../includes/dbconnection.php";?>
<?php include "../includes/head.php";?>
<?php include "../includes/alerts.php";?>
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
                    
                     <!-- table -->
                    <div class="row mt-2">
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-brand--sec">
                                    <h4 class="text-white">Registrations <i class="fa fa-address-book-o kpi--icons kpi--icons-light"></i></h4>
                                  </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-stripped">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Reg Date</th>
                                                <th>Ref code</th>
                                            </thead>
                                            <tbody>
        <?php


                $sql= " SELECT regfee.reg_ref,regfee.reg_date,users.user_fullname FROM regfee JOIN users ON  users.user_id = regfee.user_id ORDER BY regfee.reg_date ";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $n=1;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                $name=$row['user_fullname'];
                                $pay_date = $row['reg_date'];
                                $ref = $row['reg_ref'];
                            
                                ?>
                                
                                <tr>
                                    <td><?php echo $n;?></td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $pay_date;?></td>
                                    <td><?php echo $ref;?></td>             
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
            </div>
        </div>
    </section>

    <?php include "../includes/footer.php";?>
</body>
</html>