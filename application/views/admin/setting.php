
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include"include/header.php";
include"include/sidebar.php";
?>

<div class="content-wrapper">
<section class="content-header">
  <div class="content-header-left">
    <h1>Settings Section</h1>
  </div>
</section>

<section class="content" style="min-height:auto;margin-bottom: -30px;">
  <div class="row">
    <div class="col-md-12">
      
    </div>
  </div>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-12">
              
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
          
            <li class="active"><a href="#tab_top_bar" data-toggle="tab">Pages</a></li>

                        <li><a href="#tab_color" data-toggle="tab">Color</a></li>
                        <li><a href="#tab_language" data-toggle="tab">Language</a></li>
                        <li><a href="#tab_admin" data-toggle="tab">Other</a></li>
          </ul>

          <div class="tab-content">

                
 <div class="tab-pane active" id="tab_top_bar">
              <form action="<?php echo base_url(); ?>admin/moredata" class="form-horizontal" method="post" accept-charset="utf-8">
              <div class="box box-info">
                <div class="box-body">             
                    <?php //print_r($setting[0]); ?>     
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Privacy Policy</label>
                    <div class="col-sm-9">
                      	<textarea class="form-control editor" name="policy"><?php if(isset($setting[0]->privacy)) {echo $setting[0]->privacy;} ?></textarea>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Teamrs</label>
                    <div class="col-sm-9">
                      	<textarea class="form-control editor" name="terms"><?php if(isset($setting[0]->term)) {echo $setting[0]->term;} ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Contactus </label>
                     <div class="col-sm-9">
                      	<textarea class="form-control editor" name="contact"><?php if(isset($setting[0]->contactus)) {echo $setting[0]->contactus;} ?></textarea>
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="" class="col-sm-3 control-label">DMCA </label>
                     <div class="col-sm-9">
                      	<textarea class="form-control editor" name="dmca"><?php if(isset($setting[0]->dmca)) {echo $setting[0]->dmca;} ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left" name="form_top_bar">Update</button>
                    </div>
                  </div>
                </div>
              </div>
              </form>                 </div>



                        
                        <div class="tab-pane" id="tab_color">
                            <form action="<?php echo base_url(); ?>admin/moredata" class="form-horizontal" method="post" accept-charset="utf-8">
                            
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Color </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="front_end_color" class="form-control jscolor" value="3367C1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_color">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>                        </div>



                        <div class="tab-pane" id="tab_language">
                            <form action="<?php echo base_url(); ?>admin/moredata" class="form-horizontal" method="post" accept-charset="utf-8">
                                   
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Language Option? </label>
                                        <div class="col-sm-3">
                                            <select name="language_status" class="form-control select2">
                                              <option value="Show" >Show</option>
                                              <option value="Hide" selected>Hide</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_language">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>                        </div>





                        <div class="tab-pane" id="tab_admin">
                            <form action="<?php echo base_url(); ?>admin/moredata" class="form-horizontal" method="post" accept-charset="utf-8">                                                                              
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Website Name </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="website_name" class="form-control" value="Synnex">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_other">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>                        </div>
                        










                </div>
        </div>

      
    </div>
  </div>

</section>    </div>

  </div>

<?php include"include/footer.php"; ?>
