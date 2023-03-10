<?php session_start();
if(!isset($_SESSION['adminlogged'])){
    header("Location:login.php");
}
?>
<?php 
include"../includes/head.php";
include"../includes/alerts.php";
include"../includes/count.php";
?>
<title> Admin| Dashboard </title>
</head>
<body>
    <section>
        <div class="container-fluid">
               <!-- mobile nav -->
               <?php include"../includes/adminmobile.php";?>
            <div class="row area">
                <!-- side nav -->
                <?php include"../includes/adminside.php";?>
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
                    <!-- dashboard area -->
                    <div class="row mt-2">
                        <!-- top kpis -->
                        <div class="col-md-3 mb-1">
                            <a class="btn btn-primary" href="createmessage.php">Create message</a>
                        </div>
                        <div class="col-md-3 mb-1">
                            <div class="card  kpi">
                                <div class="card-body">
                                  <h5 class="card-title">Messages</h5>
                                  <span><?php countMessages();?></span>
                                  <i class="fa fa-envelope kpi--icons"></i>
                                </div>
                              </div>
                        </div>

                        <div class="col-md-3 mb-1">
                            <div class="card  kpi">
                                <div class="card-body">
                                    <a href="published.php" style="color:#212121;text-decoration:none;">
                                        <h5 class="card-title">Published</h5>
                                    </a>
                                    <span class="card-text"><?php countPublished();?></span>
                                    <i class="fa fa-paper-plane kpi--icons"></i>
                                </div>
                              </div>
                        </div>

                        <div class="col-md-3 mb-1">
                            <div class="card  kpi">
                                <div class="card-body">
                                    <a href="drafts.php" style="color:#212121;text-decoration:none;">
                                        <h5 class="card-title">Draft</h5>
                                    </a>
                                    <span class="card-text"><?php countDrafts();?></span>
                                    <i class="fa fa-floppy-o kpi--icons"></i>
                                    </div>
                              </div>
                        </div>
                        
                    </div>
                    

                    <div class="row mt-5">
                        <!-- table -->
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-brand--sec">
                                    <h4 class="text-white">Messages<i class="fa fa-envelope kpi--icons kpi--icons-light"></i></h4>
                                   
                                  </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-stripped">
                                            <thead>
                                                <th></th>
                                                <th>Title</th>
                                                <th>Body</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th></th>
                                                <th></th>
                                            </thead>
                                            <tbody>

                                            <?php
                
                $sql= " SELECT * FROM message ";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $n=1;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                $msg_id = $row['message_id'];
                                $msg_title = $row['message_title'];
                                $msg_status = $row['message_status'];
                                $msg_date = $row['message_date'];
                                $msg_body = $row['message_body'];
                            
                                ?>
                                
                                <tr>
                                    <td><?php echo $n;?></td>
                                    <td><?php echo $msg_title;?></td>
                                    <td><?php echo $msg_body;?></td>
                                    <td><?php echo $msg_status;?></td>
                                    <td><?php echo $msg_date;?></td>
                                    <td>
                                        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $msg_id; ?>"> view</button> 
                                        <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?php echo $msg_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?php echo $msg_id; ?>" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel<?php echo $msg_id; ?>"><?php echo $msg_title;?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <?php echo $msg_body;?>
                                                </div>
                                                </div>
                                            </div>
                                            </div>    

                                            <!-- form for deleting -->
                                        <form action="../process/processmessage.php" method='post' style="display: inline;">
                                            <input type='hidden'  name='msgid' value="<?php echo $msg_id; ?>" />
                                            <input type='submit' name='deletemsg' class="btn  btn-danger " value="Delete" />
                                        </form>
                                    </td>              
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