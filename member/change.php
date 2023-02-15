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
                        <span><?php success_alert();?></span>
                            <span>Welcome <?php echo $_SESSION['userfullname'];?></span>
                        </div>
                    </header>

                    
                    <div class="row mt-6">
        <div class="col-md-4 offset-md-4 mt-4">
            <div class="card card-body access">
                <form action="../process/memberchange.php" class="access-form" method="post">

                    <div class="row">
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
                        <input type="submit" value="Change"  class="btn btn-primary" style="float:right;">
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
</body>
</html>
