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
                    
                    <div class="row mt-2">
                        <div class="col-md-2 mb-1">
                            <a class="btn btn-primary" type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Set Dues</a>
                        </div>
                    </div>
                       <!-- Modal -->
                       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Set New Dues</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="../process/processsetdues.php" method="post">
                                                        <div class="form-group">
                                                            <label for="">Due Amount</label>
                                                            <input type="number" name="dueprice" class="form-control">
                                                            <br>
                                                            <input type="submit" name="setdues" value="Set" class="btn btn-primary">
                                                        </div>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                            </div>    



    
                     <!-- table -->
                    <div class="row mt-2">
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-brand--sec">
                                    <h4 class="text-white">Active membership <i class="fa fa-credit-card kpi--icons kpi--icons-light"></i></h4>
                                  </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-stripped">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Paydate</th>
                                                <th>End date</th>
                                                <th>Ref code</th>
                                            </thead>
                                            <tbody>
        <?php

                date_default_timezone_set('Africa/Lagos');
                $date=date('Y-m-d');

                $sql= " SELECT membership_renewal.renewal_date,membership_renewal.renewal_end,membership_renewal.renewal_ref,users.user_fullname FROM membership_renewal JOIN users ON  users.user_id = membership_renewal.user_id WHERE DATEDIFF(renewal_end,'$date')>=1 ";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $n=1;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                $name=$row['user_fullname'];
                                $pay_date = $row['renewal_date'];
                                $end_date = $row['renewal_end'];
                                $ref = $row['renewal_ref'];
                            
                                ?>
                                
                                <tr>
                                    <td><?php echo $n;?></td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $pay_date;?></td>
                                    <td><?php echo $end_date;?></td>
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