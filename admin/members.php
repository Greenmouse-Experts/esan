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


            
                    
                    <div class="row mt-3">
                        <div class="col-md-2 mb-1">
                            <a class="btn btn-primary" href="createmember.php">Create member</a>
                        </div>
                        
                         <!-- search form -->
                        <div class="col-md-10 mb-1">
                          <form action="search.php" method="post">
                            <div class="row">
                              <div class="col-9">
                                <input type="text" name="query" class="form-control" placeholder=" Search for member ">
                              </div>
                              <div class="col-3">
                                <input type="submit" value="Search" name="search" class="btn btn-primary">
                              </div>
                            </div>
                          </form>
                        </div> 
                    </div>


                    <!-- table -->
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
                                                <th>Delete</th>
                                                <th>Edit</th>
                                                <th>Disapprove</th>
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
                                                        <td>
                                                          <form action="../process/processdelete.php" method='get' style="display: inline;">
                                                              <input type='hidden'  name='userid' value="<?php echo $user_id; ?>" />
                                                              <input type='hidden'  name='email' value="<?php echo $user_email; ?>" />
                                                              <input type='submit' name='delete' class="btn btn-primary" value="Delete"/>
                                                          </form>
                                                        </td>
                                                        <td>
                                                          <a href="editmember.php?user_id=<?php echo $user_id; ?>">
                                                            <input type='submit' name='edit' class="btn btn-primary" value="Edit"/>
                                                          </a>
                                                        </td>    
                                                        <td>
                                                        <form action="../process/processdisapprove.php" method='get' style="display: inline;">
                                                                <input type='hidden'  name='userid' value="<?php echo $user_id; ?>" />
                                                                <input type='hidden'  name='email' value="<?php echo $user_email; ?>" />
                                                                <input type='submit' name='disapprove' class="btn btn-primary" value="Disapprove"/>
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

    <!-- popup modal for create member -->
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../process/processmembers.php" method="post">
              <div class="form-group">
                  <input type="text" name="fname" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="text" name="uname" class="form-control" placeholder="User name">
              </div>
              <div class="form-group">
                <input type="email" name="email"  class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" name="password"  class="form-control" placeholder="User Password">
              </div>
          
        </div>
        <div class="modal-footer">
            <div class="form-group">
                <input type="submit" name="create" value="Create" class="btn btn-primary">
            </div>
        </div>
    </form>
      </div>
    </div>
  </div>

  <?php include "../includes/footer.php";?>
</body>
</html>