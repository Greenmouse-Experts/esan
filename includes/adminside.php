<div class="col-md-2 bg-brand sidenav ">
    <div class="row mb-5">
        <div class="col-md-8 offset-md-2 ">
            <img src="../images/logo.png" alt="" class="rounded img-fluid">
        </div>
    </div>
    <div class="row mt-5">
    <ul class="sidebar-menu">
     
     <li>
       <a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
     </li>
     
     <li>
       <a href="#">
         <i class="fa fa-group"></i>
         <span>Members </span>
         <i class="fa fa-angle-down pull-right"></i>
       </a>
       <ul class="sidebar-submenu">
         <li><a href="createmember.php"><i class="fa fa-circle-o"></i> Create Members </a></li>
         <li><a href="members.php"><i class="fa fa-circle-o"></i>Approved Members</a></li>
         <li><a href="pendingmembers.php"><i class="fa fa-circle-o"></i>Pending Members</a></li>
         <li><a href="registrations.php"><i class="fa fa-circle-o "></i>Registrations</a></li>
         <li><a href="passwordreset.php"><i class="fa fa-circle-o "></i>Password Reset</a></li>
       </ul>
     </li>
     <li>
       <a href="vacancy.php">
         <i class="fa fa-wrench"></i> <span> Vacancy </span>
       </a>
     </li>
     
     <li>
       <a href="reports.php">
         <i class="fa fa-folder"></i> <span>Report</span>
       </a>
     </li>
     <li>
       <a href="duespayment.php">
         <i class="fa fa-credit-card"></i> <span>Dues</span>
       </a>
     </li>
    
     <li>
       <a href="#">
         <i class="fa fa-envelope"></i>
         <span>Message </span>
         <i class="fa fa-angle-down pull-right"></i>
       </a>
       <ul class="sidebar-submenu">
         <li><a href="createmessage.php"><i class="fa fa-envelope"></i> Create Message</a></li>
         <li><a href="message.php"><i class="fa fa-envelope-open"></i> View Messages</a></li>
        
       </ul>
     </li>
     <li>
       <a href="donations.php">
         <i class="fa fa-bitbucket"></i> <span>Donations</span>
       </a>
     </li>
     
     <li>
       <a href="#">
         <i class="fa fa-cog"></i> <span> Settings </span>
         <i class="fa fa-angle-down pull-right"></i>
       </a>
       <ul class="sidebar-submenu">
         <li><a href="change.php"><i class="fa fa-lock"></i>Change Password</a></li>
         <li><a href="logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
       </ul>
     </li>
     
   </ul>
    </div>
    <script>
    $.sidebarMenu($('.sidebar-menu'))
  </script>
</div>

