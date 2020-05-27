
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo.png">
    <title>Globalshyp</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><a href="index.html" class="navbar-brand"></a></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="<?php echo base_url(); ?>assets/img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name"><?php echo $this->session->userdata('name');  ?></div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  <li><a href="<?php echo base_url(); ?>Admin/change_pass"><span class="icon mdi mdi-settings"></span>Change Password</a></li>
                  <li><a href="<?php echo base_url(); ?>Admin/logout"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span><?php echo $title; ?></span></div>

          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle"><?php echo $title; ?></a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li <?php if($title == "Dashboard"){ ?> class="active" <?php }?>><a href="<?php echo base_url(); ?>Admin/Dashboard"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <li <?php if($title == "Add Product"){ ?> class="active" <?php }?>><a href="<?php echo base_url(); ?>Admin/add"><i class="icon mdi mdi-plus"></i><span>Add Product</span></a>
                  </li>
                  <li <?php if($title == "Order List"){ ?> class="active" <?php }?>><a href="<?php echo base_url(); ?>Admin/list"><i class="icon mdi mdi-view-list-alt"></i><span>Product List</span></a>
                  </li>
                  <li <?php if($title == "List User"){ ?> class="active" <?php }?>><a href="<?php echo base_url(); ?>Admin/userlist"><i class="icon mdi mdi-accounts-list"></i><span>User List</span></a>
                  </li>
                  <li> <?php if($title == "List User"){ ?> class="active" <?php }?>><a href="<?php echo base_url(); ?>Admin/userlist"><i class="icon mdi mdi-accounts-list"></i><span>Delivery  </span></a>
                  </li>
                  
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php echo $contents ?>
      
    </div>
    
  </body>
</html>