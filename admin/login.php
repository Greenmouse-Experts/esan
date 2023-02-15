<?php session_start();?>
<?php include "../includes/head.php";?>
<?php include "../includes/alerts.php";?>

<title> Admin | Dashboard </title>
</head>
<body class="bg-brand">
<div class="container-fluid">

    <div class="row mt-5">
        <div class="col-md-4 offset-md-4">
            <div class="card card-body access">
                <form action="../process/processlogin.php" class="access-form" method="post">
                     <h2 class="text-center text-primary">Admin</h2>
                    <div class="row">
                        <div class="col-md-6 offset-md-3 mb-2">
                            <img src="../images/logo.png" alt="" class="img-fluid center">
                        </div>
                        <div class="col-md-8 offset-md-2 mb-1">
                            <div class="flash"><?php error_alert();?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="username"  class="form-control" Placeholder="User name">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password"  class="form-control" Placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login"  class="btn btn-primary" style="float:right;">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <?php include "../includes/footer.php";?>
</div>    
</body>
</html>