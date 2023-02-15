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
                    
                    <?php
                        $sql= "SELECT * FROM users WHERE user_id='{$_GET['user_id']}'";
                        if($result = mysqli_query($conn,$sql)){ 
                            if (mysqli_num_rows($result)>0){
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $user_id= $row['user_id'];
                                $user_fullname = $row['user_fullname'];
                                $username = $row['username'];
                                $user_email = $row['user_email'];
                                $user_phone = $row['user_phone'];
                                $user_gender = $row['user_gender'];
                                $user_state = $row['user_state'];
                                $user_lga = $row['user_lga'];
                                $user_streetaddress = $row['user_streetaddress'];
                                $user_status = $row['user_status'];
                                $user_birthday = $row['user_birthday'];
                                $reg_fee = $row['reg_fee'];
                                $reg_date = $row['reg_date'];
                                $user_approval = $row['user_approval'];

                            }
                        }
                                        
                                    
                    ?>
                    <div class="row mt-2">
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-brand--sec">
                                  <h4 class="text-white">Update Pending Member  <i class="fa fa-users kpi--icons kpi--icons-light"></i></h4>
                                </div>
                                <div class="card-body">
                                    <form action="../process/processpendingmemberupdate.php" method="post">
                                        <div class="form-group">
                                            <input type="text" name="user_id" class="form-control" value="<?php echo  $user_id;?>" placeholder="user_id" hidden>
                                            <input type="text" name="user_fullname" class="form-control" 
                                            value="<?php echo  $user_fullname;?>" placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control" value="<?php echo  $username;?>" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="user_email"  class="form-control" value="<?php echo  $user_email;?>" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="user_phone" class="form-control" value="<?php echo  $user_phone;?>" placeholder="User Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="user_gender" class="form-control" value="<?php echo  $user_gender;?>" placeholder="User Gender">
                                        </div>
                                        <div class="form-group">
                                            <select name="user_state"  class="form-control"> 
                                                <option value="<?php echo  $user_state;?>"><?php echo  $user_state;?></option>
                                                <option value="Abia">Abia</option>
                                                <option value="Adamawa">Adamawa</option>
                                                <option value="Akwa ibom">Akwa Ibom</option>
                                                <option value="Bauchi">Bauchi</option>
                                                <option value="Bayelsa">Bayelsa</option>
                                                <option value="Benue">Benue</option>
                                                <option value="Crossriver">Cross River</option>
                                                <option value="Delta">Delta</option>
                                                <option value="Ebonyi">Ebonyi</option>
                                                <option value="Edo">Edo</option>
                                                <option value="Ekiti">Ekiti</option>
                                                <option value="Enugu">Enugu</option>
                                                <option value="FCT">FCT</option>
                                                <option value="Gombe">Gombe</option>
                                                <option value="Imo">Imo</option>
                                                <option value="Jigawa">Jigawa</option>
                                                <option value="Kaduna">Kaduna</option>
                                                <option value="Kano">Kano</option>
                                                <option value="Katsina">Katsina</option>
                                                <option value="Kebbi">Kebbi</option>
                                                <option value="Kano">Kano</option>
                                                <option value="Kogi">Kogi</option>
                                                <option value="Kwara">Kwara</option>
                                                <option value="Lagos">Lagos</option>
                                                <option value="Nassawara">Nassawara</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Ogun">Ogun</option>
                                                <option value="Ondo">ondo</option>
                                                <option value="Osun">osun</option>
                                                <option value="Oyo">oyo</option>
                                                <option value="Plateau">plateau</option> 
                                                <option value="Rivers">rivers</option>
                                                <option value="Sokoto">sokoto</option>
                                                <option value="Taraba">Taraba</option>
                                                <option value="Yobe">Yobe</option>
                                                <option value="Zamfara">Zamfara</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="user_lga"  class="form-control" value="<?php echo  $user_lga;?>" placeholder="User LGA">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="user_streetaddress" class="form-control" value="<?php echo  $user_streetaddress;?>" placeholder="User StreetAddress">
                                        </div>
                                        <div class="form-group">
                                            <select name="user_status"  class="form-control"> 
                                                <option value="<?php echo  $user_status;?>"><?php echo  $user_status;?></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="user_birthday"  class="form-control" value="<?php echo  $user_birthday;?>" placeholder="User Birthday">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="reg_fee"  class="form-control" value="<?php echo  $reg_fee;?>" placeholder="Reg Fee">
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="reg_date" class="form-control" value="<?php echo  $reg_date;?>" placeholder="Reg Date">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="user_approval" class="form-control" value="<?php echo  $user_approval;?>" placeholder="User Approval" readonly>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="update" value="Update" class="btn btn-primary">
                                        </div>
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