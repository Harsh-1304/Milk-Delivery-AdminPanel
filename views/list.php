<style type="text/css">
  .dt-buttons.btn-group {
    margin-left: 20px;
}
div#table1_filter {
    float: right;
    margin-right: 20px;
}
</style>
<div class="be-content">
    <div class="main-content container-fluid">
    	<div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">Export Functions
                 <!--  <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div> -->
                </div>
                <div class="panel-body">
                  <table id="table1" class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Weight</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($list as  $list) { ?>
                      <tr class="odd gradeX">
                        <td><img src="<?= $list['image']; ?>" width="50px" alt="Avatar"></td>
                        <td><?php echo $list['name']; ?></td>
                        <td><?php echo $list['price']; ?></td>
                        <td><?php echo $list['catagory']; ?></td>
                        <td><?php echo $list['weight']; ?></td>
                        <td>
                          <a href="<?php echo base_url(); ?>Admin/update/<?php echo $list['id']; ?>"><button class="btn btn-space btn-primary md-trigger">
                            <i class="mdi mdi-edit"></i>
                          </button>
                          </a>
                          <button data-modal="mod-danger" onclick="delid('<?php echo $list['id']; ?>')" class="btn btn-space btn-danger md-trigger">
                            <i class="mdi mdi-close"></i>
                          </button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/app-tables-datatables.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery.niftymodals/dist/jquery.niftymodals.js" type="text/javascript"></script>

    
    <script type="text/javascript">
      $.fn.niftyModal('setDefaults',{
      	overlaySelector: '.modal-overlay',
      	closeSelector: '.modal-close',
      	classAddAfterOpen: 'modal-show',
      });
      function getid(id)
      {$('#oid').val(id);}
      function delid(id)
      {$('#did').val(id);}
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dataTables();
      });
    </script>

    <div id="mod-danger" class="modal-container custom-width modal-effect-9">
      
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url(); ?>Admin/delete" method="post">
              <div class="text-center">
                <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
                <h3>Delete!</h3>
                <input type="hidden" id="did" name="did" value="">
                <p>Are you sure to delete Order.</p>
                <div class="xs-mt-50">
                  <button type="button" data-dismiss="modal" class="btn btn-default modal-close">No</button>
                  <button type="submit" class="btn btn-space btn-danger">Yes</button>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer"></div>
        </div>
      
    </div>