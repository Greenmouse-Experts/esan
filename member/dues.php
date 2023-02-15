<?php session_start();
$id = $_SESSION['logged'];

if(!isset($_SESSION['logged'])){
    header("Location:../login.php");
}

?>
<?php include "../includes/head.php";?>
<?php include "../includes/alerts.php";?>
<?php include "../includes/dbconnection.php";?>
<?php
                
$sql= " SELECT * FROM due WHERE due_id ='1' ";
if($result = mysqli_query($conn,$sql)){ 
        if (mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $due_amount = $row['due_amount'];
            }
        }
    }
?>
<title> Membership Dues | Dashboard </title>
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
                         <?php success_alert();error_alert();?>
                        </div>
                    </header>

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <a class="btn btn-primary" href="pay.php">Pay Dues</a>
                        </div>
                        <div class="col-md-6">
                            <span><b>Current Due price:</b> <?php echo $due_amount ?></span>
                        </div>
                    </div>

    
                     <!-- table -->
                    <div class="row mt-3">
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-brand--sec">
                                    <h4 class="text-white">Transactions <i class="fa fa-credit-card kpi--icons kpi--icons-light"></i></h4>
                                   
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
                
                $sql= " SELECT * FROM membership_renewal WHERE user_id ='$id' ORDER BY renewal_date DESC";
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