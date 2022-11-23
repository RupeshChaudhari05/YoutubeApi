<div class="content-wrapper">
<section class="content-header">
  <div class="content-header-left">
    <h1><?php if(isset($edit_category)){ echo"Edit ";}else{ echo "Add"; }?> Sub Category</h1>
  </div>
  <div class="content-header-right">
    <a href="<?php echo base_url(); ?>admin/category" class="btn btn-primary btn-sm">View All</a>
  </div>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-12">
      <?php //echo $error;  //print_r($edit_category);?> 
      <form action="<?php echo base_url();?>admin/add_subcategory" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        <div class="box box-info">
          <div class="box-body">
            <input type="hidden" name="id" value="<?php if(isset($edit_category)){ echo $edit_category->id;}  ?>">
              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Category</label>
              <div class="col-sm-6">
                <select name="cat" class="form-control select2" style="width:auto;">
                          <?php 
                          $d= $this->db->query("SELECT * FROM category WHERE `status`='Active'");
                          $res=$d->result_array();
                          foreach ($res as $key => $value) {
                          //$v = $value[id]==$value[id]) echo"selected";
                            echo   '<option value="'.$value[id].'">'.$value[title].'</option>';
                          }
                          ?>
                </select>
                  <?php echo form_error('cat'); ?>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Title (enter most searches query) </label>
              <div class="col-sm-6">
                <input type="text" autocomplete="off" class="form-control" name="title" value="<?php echo set_value('title'); ?><?php if(isset($edit_category)){echo $edit_category->title;} ?>">
                  <?php echo form_error('title'); ?>
              </div>
            </div>
           
            <div class="form-group">
              <label for="" class="col-sm-2 control-label"></label>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </form>   </div>
  </div>

</section>    </div>

  </div>
