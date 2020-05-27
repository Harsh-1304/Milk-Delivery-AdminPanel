<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-body">
                  <form method="post" enctype="multipart/form-data" data-parsley-validate="" novalidate="">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" parsley-trigger="change" value="<?php echo (isset($list)) ? $list->name : ''; ?>" required="" placeholder="Enter Name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Price</label>
                      <input type="text" name="price" parsley-trigger="change" value="<?php echo (isset($list)) ? $list->price : ''; ?>" required="" placeholder="Enter Price" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Weight</label>
                      <input data-parsley-type="number" name="weight" value="<?php echo (isset($list)) ? $list->weight : ''; ?>" type="text" required="" placeholder="Enter Weight" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Select WeightGroup</label>
                      <select class="form-control" name="catagory">
                          <option value="Amul" <?= ((isset($list) && $list->catagory == 'Amul') ? 'selected':'') ?>>Amul</option>
                          <option value="Mahi" <?= ((isset($list) && $list->catagory == 'Mahi') ? 'selected':'') ?>>Mahi</option>
                          <option value="Rajhans" <?= ((isset($list) && $list->catagory == 'Rajhans') ? 'selected':'') ?>>Rajhans</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select WeightGroup</label>
                      <select class="form-control" name="weight_type">
                          <option value="ML" <?= ((isset($list) && $list->weight_type == 'ML') ? 'selected':'') ?>>ML</option>
                          <option value="L" <?= ((isset($list) && $list->weight_type == 'L') ? 'selected':'') ?>>L</option>
                      </select>
                    </div>
                    <?php if($this->uri->segment(3)){}else{ ?>
                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" parsley-trigger="change" required="" autocomplete="off" class="form-control">
                      </div>
                    <?php } ?>
                    
                    <p class="text-left">
                      <button type="submit" class="btn btn-space btn-primary">Submit</button>
                      <!--<button class="btn btn-space btn-default">Cancel</button>-->
                    </p>
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
    <script src="<?php echo base_url(); ?>assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        $('form').parsley();
      });
    </script>