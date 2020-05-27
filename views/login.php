<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo.png">
    <title>Milk Delivery</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css"/>
  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" width="102" height="27" class="logo-img"><span class="splash-description">Please enter your user information.</span></div>
                  <?php if($this->session->userdata('error') == "1"){ ?>
                  <div role="alert" class="alert alert-danger alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-close-circle-o"></span><strong>Email or Password Invalid</strong>
                  </div>
                  <?php } ?>
              <div class="panel-body">
                <form action="<?php echo base_url(); ?>Admin/login" method="post">
                  <div class="form-group">
                    <input id="username" type="email" placeholder="Email" autocomplete="off" name="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <input id="password" type="password" name="pass" placeholder="Password" class="form-control" required>
                  </div>
                  <div class="form-group row login-tools">
                    <div class="col-xs-6 login-remember">
                      
                    </div>
                    <!-- <div class="col-xs-6 login-forgot-password"><a href="<?php echo base_url('Admin/Forgotpass'); ?>">Forgot Password?</a></div> -->
                  </div>
                  <div class="form-group login-submit">
                    <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Sign me in</button>
                  </div>
                </form>
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
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
      
    </script>
  </body>
</html>