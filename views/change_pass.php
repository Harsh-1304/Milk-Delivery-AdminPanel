<div class="be-content">
    <div class="main-content container-fluid">
    	<div class="row">
        <?php if($msg == "fail"){ ?>
        <div role="alert" class="alert alert-danger  alert-dismissible">
              <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><strong>Alert!</strong> Current Password Not Match
        </div>
        <?php }if($msg == "success"){ ?>
          <div role="alert" class="alert alert-success alert-dismissible">
              <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><strong>Good!</strong> Password Change Successfully
        </div>
        <?php } ?>
    		<div class="col-sm-6">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Cahnge Password<span class="panel-subtitle">Please enter your user information.</span></div>
                <div class="panel-body">
                  <form method="post" data-parsley-validate="" novalidate="" class="form-horizontal">
                    
                    <div class="form-group">
                      <div class="col-sm-12">
                        <input id="inputPassword3" type="password" name="current" required="" placeholder="Current Password" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-12">
                        <input id="inputPassword3" type="password" name="new" required="" placeholder="New Password" class="form-control">
                      </div>
                    </div>
         
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <p class="text-right">
                          <button type="submit" class="btn btn-space btn-primary">Change Password</button>
                        </p>
                      </div>
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
    <script src="<?php echo base_url(); ?>assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/app-dashboard.js" type="text/javascript"></script>