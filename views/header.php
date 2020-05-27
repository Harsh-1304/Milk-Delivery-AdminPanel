
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Beagle</title>
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
                      <div class="user-name">Túpac Amaru</div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  <li><a href="#"><span class="icon mdi mdi-face"></span> Account</a></li>
                  <li><a href="#"><span class="icon mdi mdi-settings"></span> Change Password</a></li>
                  <li><a href="#"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>Dashboard</span></div>

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
                  <li <?php if($title == "Dashboard"){ ?> class="active" <?php }?>><a href="index.html"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <li <?php if($title == "Add Order"){ ?> class="active" <?php }?>><a href="index.html"><i class="icon mdi mdi-home"></i><span>Add Order</span></a>
                  </li>
                  <li <?php if($title == "List Order"){ ?> class="active" <?php }?>><a href="index.html"><i class="icon mdi mdi-home"></i><span>List Order</span></a>
                  </li>
                  <!--<li <?php if($title == "Delivery"){ ?> class="active" <?php }?>><a href="index.html"><i class="icon mdi mdi-home"></i><span>Delivery</span></a>
                  </li>
-->
                  
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
    <script src="<?php echo base_url(); ?>assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
  </body>
</html>