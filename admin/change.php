<?php session_start();
if(!isset($_SESSION['adminlogged'])){
    header("Location:login.php");
}
?>
<?php 
include"../includes/head.php";
include"../includes/alerts.php";
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


            
                   
    <div class="row mt-6">
        <div class="col-md-4 offset-md-4">
            <div class="card card-body access bg-brand">
                <form action="../process/processchange.php" class="access-form" method="post">

                    <div class="row">
                        <div class="col-md-4 offset-md-4 mb-4">
                            <img src="../img/logo.png" alt="" class="img-fluid center">
                        </div>
                        <div class="col-md-8 offset-md-2 mb-1">
                            <div class="flash"><?php error_alert();?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password"  class="form-control" Placeholder="Current Passowrd">
                    </div>
                    <div class="form-group">
                        <input type="password" name="npassword"  class="form-control" Placeholder="Enter New password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="rnpassword"  class="form-control" Placeholder="Re-enter New password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Change"  class="btn btn-success btn-primary" style="float:right;">
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
                </div>
            </div>
        </div>
    </section>

    <?php include "../includes/footer.php";?>
</body>
</html>