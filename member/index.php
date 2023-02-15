<?php session_start();
if(!isset($_SESSION['logged'])){
    header("Location:../login.php");
}
$id = $_SESSION['logged'];
?>
<?php include "../includes/alerts.php";?>
<?php include "../includes/head.php";?>
<?php include "../includes/count.php";?>
<title> Members | Dashboard </title>
</head>
<body>
    <section>
        <div class="container-fluid">
               <!-- mobile nav -->
               <?php include "../includes/mobile.php";?>
           
            <div class="row area">
                <!-- side nav -->
                <?php include "../includes/side.php";?>
                <!-- top navigation/header -->
                <div class="col-md-10">
                    <header class="row topnav">
                        <div class="col-md-12">
                        <span><?php success_alert();error_alert();?></span>
                            <span>Welcome <?php echo $_SESSION['userfullname'];?></span>
                        </div>
                    </header>

    
                     
                    <!-- dashboard area -->
                    
                    <div class="row mt-5">
                        <!-- top kpis -->
                

                        <div class="col-md-4 mb-2">
                            <div class="card  kpi">
                                <div class="card-body">
                                    <h5 class="card-title">Message</h5>
                                    <span class="card-text"><?php countMessages();?></span>
                                    <i class="fa fa-envelope kpi--icons"></i>
                                </div>
                              </div>
                        </div>

                        <div class="col-md-4  mb-2">
                            <div class="card  kpi">
                                <div class="card-body">
                                    <h5 class="card-title">Membership status</h5>
                                    <?php
                                        if($_SESSION['approval']=="yes"){
                                            echo " <i class='fa fa-wifi kpi--icons kpi--icons-green'></i>";
                                        }else{
                                            echo "<i class='fa fa-wifi kpi--icons'></i>";
                                        }
                                    ?>
                                </div>
                              </div>
                        </div>

                        
                    </div>

                    <!-- second level kpis -->
                    <div class="row mt-5">
                        <!-- table -->
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-brand--sec">
                                    <h4 class="text-white"> Payments <i class="fa fa-credit-card kpi--icons kpi--icons-light"></i></h4>
                                   
                                  </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-stripped">
                                            <thead>
                                                <th></th>
                                                <th>Payment date</th>
                                                <th>Transaction ref</th>
                                            </thead>
                                            <tbody>
                                            <?php
                
                $sql= " SELECT * FROM membership_renewal WHERE user_id ='$id'";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $n=1;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                $pay_date = $row['renewal_date'];
                                $ref = $row['renewal_ref'];
                            
                                ?>
                                
                                <tr>
                                    <td><?php echo $n;?></td>
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
</body>
</html>
