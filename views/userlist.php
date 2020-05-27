<div class="be-content">
    <div class="main-content container-fluid">
    	<div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">Export Functions
                  <!-- <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div> -->
                </div>
                <div class="panel-body">
                  <table id="table3" class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Mobile No.</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Date</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($list as  $list) { ?>
                      <tr class="odd gradeX">
                        <td><?php echo $list['name']; ?></td>
                        <td><?php echo $list['phone']; ?></td>
                        <td><?php echo $list['email']; ?></td>
                        <td><?php echo $list['address']; ?></td>
                        <td><?php echo $list['city']; ?></td>
                        <td><?php echo $list['date']; ?></td>
                        <td>
                          <?php if($list['active'] == 1) { ?>
                              <a href="<?php echo base_url(); ?>Admin/userstatus/<?php echo $list['uid']; ?>">
                                <button class="btn btn-rounded btn-space btn-success">Active</button></a>
                          <?php }else{ ?>
                                <a href="<?php echo base_url(); ?>Admin/userstatus/<?php echo $list['uid']; ?>">
                                <button class="btn btn-rounded btn-space btn-danger">Deactive</button></a>
                          <?php } ?>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
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
    <script src="<?php echo base_url(); ?>assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/app-tables-datatables.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery.niftymodals/dist/jquery.niftymodals.js" type="text/javascript"></script>
    
    <script type="text/javascript">

      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dataTables();
      });
    </script>

  