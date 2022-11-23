<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include"include/header.php";
include"include/sidebar.php";
?>
      <div class="content-wrapper">
<section class="content-header">
  <div class="content-header-left">
    <h1>Menu</h1>
  </div>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">

            <form action="<?php echo base_url(); ?>admin/add_menu" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <?php  
                function get_menu($id)
                {
                   $ci =& get_instance();
                   $a = $ci->db->query("SELECT * FROM  `homepage` where name='$id'");
                   $res = $a->row();
                   return $res->status;
                }
                ?>                                                                                   
          <div class="box-body">
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Home </label>
                <div class="col-sm-2">
                  <select name="menu_status_home" class="form-control select2">
                    <option value="Show"  <?php  if(get_menu("Home")=="Show"){ echo $a="selected"; } ?>  >Show</option>
                    <option value="Hide"  <?php  if(get_menu("Home")=="Hide"){ echo $a="selected"; } ?>  >Hide</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">About </label>
                <div class="col-sm-2">
                  <select name="menu_status_about" class="form-control select2">
                    <option value="Show"  <?php  if(get_menu("About")=="Show"){ echo $a="selected"; } ?>  >Show</option>
                    <option value="Hide"  <?php  if(get_menu("About")=="Hide"){ echo $a="selected"; } ?>  >Hide</option>
                  </select>
                </div>
              </div>
                         
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Team </label>
                <div class="col-sm-2">
                  <select name="menu_status_team" class="form-control select2">
                    <option value="Show"  <?php  if(get_menu("Team")=="Show"){ echo $a="selected"; } ?>  >Show</option>
                    <option value="Hide"  <?php  if(get_menu("Team")=="Hide"){ echo $a="selected"; } ?>  >Hide</option>
                  </select>
                </div>
              </div>
                         
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Event </label>
                <div class="col-sm-2">
                  <select name="menu_status_event" class="form-control select2">
                     <option value="Show"  <?php  if(get_menu("Event")=="Show"){ echo $a="selected"; } ?>  >Show</option>
                    <option value="Hide"  <?php  if(get_menu("Event")=="Hide"){ echo $a="selected"; } ?>  >Hide</option>
                  </select>
                </div>
              </div>
                         
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Photo Gallery </label>
                <div class="col-sm-2">
                  <select name="menu_status_photo" class="form-control select2">
                      <option value="Show"  <?php  if(get_menu("Photo Gallery")=="Show"){ echo $a="selected"; } ?>  >Show</option>
                    <option value="Hide"  <?php  if(get_menu("Photo Gallery")=="Hide"){ echo $a="selected"; } ?>  >Hide</option>
                  </select>
                </div>
              </div>
                         
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Testimonial </label>
                <div class="col-sm-2">
                  <select name="menu_status_testo" class="form-control select2">
                      <option value="Show"  <?php  if(get_menu("Testimonial")=="Show"){ echo $a="selected"; } ?>  >Show</option>
                    <option value="Hide"  <?php  if(get_menu("Testimonial")=="Hide"){ echo $a="selected"; } ?>  >Hide</option>
                  </select>
                </div>
              </div>
                         
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">FAQ </label>
                <div class="col-sm-2">
                  <select name="menu_status_faq" class="form-control select2">
                     <option value="Show"  <?php  if(get_menu("FAQ")=="Show"){ echo $a="selected"; } ?>  >Show</option>
                    <option value="Hide"  <?php  if(get_menu("FAQ")=="Hide"){ echo $a="selected"; } ?>  >Hide</option>
                  </select>
                </div>
              </div>
                         
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Pricing Table </label>
                <div class="col-sm-2">
                  <select name="menu_status_price" class="form-control select2">
                     <option value="Show"  <?php  if(get_menu("Pricing Table")=="Show"){ echo $a="selected"; } ?>  >Show</option>
                    <option value="Hide"  <?php  if(get_menu("Pricing Table")=="Hide"){ echo $a="selected"; } ?>  >Hide</option>
                  </select>
                </div>
              </div>
                         
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Service </label>
                <div class="col-sm-2">
                  <select name="menu_status_" class="form-control select2">
                      <option value="Show"  <?php  if(get_menu("Service")=="Show"){ echo $a="selected"; } ?>  >Show</option>
                    <option value="Hide"  <?php  if(get_menu("Service")=="Hide"){ echo $a="selected"; } ?>  >Hide</option>
                  </select>
                </div>
              </div>
                         
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Portfolio </label>
                <div class="col-sm-2">
                  <select name="menu_status_portfolio" class="form-control select2">
                      <option value="Show"  <?php  if(get_menu("Portfolio")=="Show"){ echo $a="selected"; } ?>  >Show</option>
                    <option value="Hide"  <?php  if(get_menu("Portfolio")=="Hide"){ echo $a="selected"; } ?>  >Hide</option>
                  </select>
                </div>
              </div>
                         
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">News </label>
                <div class="col-sm-2">
                  <select name="menu_status_news" class="form-control select2">
                      <option value="Show"  <?php  if(get_menu("News")=="Show"){ echo $a="selected"; } ?>  >Show</option>
                    <option value="Hide"  <?php  if(get_menu("News")=="Hide"){ echo $a="selected"; } ?>  >Hide</option>
                  </select>
                </div>
              </div>
                         
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Contact </label>
                <div class="col-sm-2">
                  <select name="menu_status_contact" class="form-control select2">
                      <option value="Show"  <?php  if(get_menu("Contact")=="Show"){ echo $a="selected"; } ?>  >Show</option>
                    <option value="Hide"  <?php  if(get_menu("Contact")=="Hide"){ echo $a="selected"; } ?>  >Hide</option>
                  </select>
                </div>
              </div>
                          <div class="form-group">
              <label for="" class="col-sm-2 control-label"></label>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
              </div>
            </div>
          </div>
        </div>
      </form>   </div>
  </div>

</section>    </div>

  </div>

<?php include"include/footer.php"; ?>
