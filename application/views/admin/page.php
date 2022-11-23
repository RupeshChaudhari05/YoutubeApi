<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include"include/header.php";
include"include/sidebar.php";
?>
<div class="content-wrapper">
<section class="content-header">
	<div class="content-header-left">
		<h1>Page Section</h1>
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
                        <li class="active"><a href="#tab_1" data-toggle="tab">Home</a></li>
                        <li><a href="#tab_2" data-toggle="tab">About</a></li>
                        <li><a href="#tab_4" data-toggle="tab">FAQ</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Service</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Testimonial</a></li>
                        <li><a href="#tab_8" data-toggle="tab">News</a></li>
                        <li><a href="#tab_16" data-toggle="tab">Event</a></li>
                        <li><a href="#tab_9" data-toggle="tab">Contact</a></li>
                        <li><a href="#tab_10" data-toggle="tab">Search</a></li>
                        <li><a href="#tab_11" data-toggle="tab">Terms</a></li>
                        <li><a href="#tab_12" data-toggle="tab">Privacy</a></li>
                        <li><a href="#tab_14" data-toggle="tab">Team</a></li>
                        <li><a href="#tab_15" data-toggle="tab">Portfolio</a></li>

                    </ul>
                    <div class="tab-content">
                        
                        <div class="tab-pane active" id="tab_1">

                            <h3 class="sec_title">Meta Items</h3>
                            <form action="<?php echo base_url(); ?>Page/meta_data" class="form-horizontal" method="post" accept-charset="utf-8">
                                <input type="hidden" name="id" value="<?php  echo $home->id; ?>">
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="title" class="form-control" value="<?php echo set_value('title'); ?><?php  echo $home->title; ?>">
                                         <?php echo form_error('title'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="meta_keyword" style="height:60px;"><?php echo set_value('meta_keyword'); ?><?php  echo $home->meta_keyword; ?></textarea>
                                         <?php echo form_error('meta_keyword'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="meta_description" style="height:60px;"><?php echo set_value('meta_description'); ?><?php  echo $home->meta_description; ?></textarea>
                                         <?php echo form_error('meta_description'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home" value="home">Update</button>
                                    </div>
                                </div>                 
                            </form>
                            <h3 class="sec_title">Welcome Section</h3>
                            <form action="<?php echo base_url(); ?>Page/Welcome_section" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_welcome_title" class="form-control" value="<?php echo set_value('title'); ?><?php  echo $home->w_title; ?>">
                                    </div>
                                     <input type="hidden" name="id" value="<?php  echo $home->id; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_welcome_subtitle" class="form-control" value="<?php echo set_value('title'); ?><?php  echo $home->w_subtitle; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Text </label>
                                    <div class="col-sm-6">
                                        <textarea name="home_welcome_text" class="form-control editor_short" cols="30" rows="10"><?php echo set_value('title'); ?><?php  echo $home->w_text; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Video </label>
                                    <div class="col-sm-6">
                                        <textarea name="home_welcome_video" class="form-control" cols="30" rows="10" style="height:100px;">
                                            <?php echo set_value('title'); ?><?php  echo $home->w_video; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Progress Bar 1 - Text </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="home_welcome_pbar1_text" class="form-control" value="<?php echo set_value('title'); ?><?php  echo $home->w_p1; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Progress Bar 1 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="home_welcome_pbar1_value" class="form-control" value="<?php echo set_value('title'); ?><?php  echo $home->w_p_v1; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Progress Bar 2 - Text </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="home_welcome_pbar2_text" class="form-control" value="<?php echo set_value('title'); ?><?php  echo $home->w_p2; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Progress Bar 2 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="home_welcome_pbar2_value" class="form-control" value="<?php echo set_value('title'); ?><?php  echo $home->w_p_v2; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Progress Bar 3 - Text </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="home_welcome_pbar3_text" class="form-control" value="<?php echo set_value('title'); ?><?php  echo $home->w_p3; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Progress Bar 3 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="home_welcome_pbar3_value" class="form-control" value="<?php echo set_value('title'); ?><?php  echo $home->w_p_v3; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Progress Bar 4 - Text </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="home_welcome_pbar4_text" class="form-control" value="<?php echo set_value('title'); ?><?php  echo $home->w_p4; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Progress Bar 4 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="home_welcome_pbar4_value" class="form-control" value="<?php echo set_value('title'); ?><?php  echo $home->w_p_v4; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Progress Bar 5 - Text </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="home_welcome_pbar5_text" class="form-control" value="<?php echo set_value('title'); ?><?php  echo $home->w_p5; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Progress Bar 5 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="home_welcome_pbar5_value" class="form-control" value="<?php echo set_value('title'); ?><?php  echo $home->w_p_v5; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_welcome_status" class="form-control select2" style="width:auto;">
                                        <option value="Show"  <?php if($home->w_show_home=="Show"){echo"selected";}?>>Show</option>
                                        <option value="Hide"  <?php if($home->w_show_home=="Hide"){echo"selected";}?>>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_welcome"  value="form_home_welcome">Update</button>
                                    </select>
                                    </div>
                                </div>
                            </form>                            
                            <h3 class="sec_title">Welcome Section (Video Background)</h3>
                            <form action="<?php echo base_url(); ?>Page/video_baground" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                   <input type="hidden" name="id" value="<?php  echo $home->id; ?>">
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Existing Video Background</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <img src="<?php  echo $home->video_image; ?>" class="existing-photo" style="height:180px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Video Background </label>
                                    <div class="col-sm-6" style="padding-top:5px;">
                                        <input type="file" name="video_image">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_welcome_video_bg">Update</button>
                                    </select>
                                    </div>
                                </div>
                            </form>

                            <h3 class="sec_title">Why Choose Us Section</h3>
                            <form action="<?php echo base_url(); ?>Page/why_choos_us" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
   <input type="hidden" name="id" value="<?php  echo $home->id; ?>">
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_why_choose_title" class="form-control" value="<?php echo set_value('home_why_choose_title'); ?><?php  echo $home->home_why_choose_title; ?>">
                                         <?php echo form_error('home_why_choose_title'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_why_choose_subtitle" class="form-control" value="<?php echo set_value('home_why_choose_subtitle'); ?><?php  echo $home->home_why_choose_subtitle; ?>">
                                         <?php echo form_error('home_why_choose_subtitle'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_why_choose_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" <?php if($home->home_why_choose_status=="Show"){echo"selected";}?>>Show</option>
                                        <option value="Hide" <?php if($home->home_why_choose_status=="Hide"){echo"selected";}?>>Hide</option>
                                    </select>
                                     <?php echo form_error('home_why_choose_status'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_why_choose" value="form_home_why_choose">Update</button>
                                    </select>
                                    </div>
                                </div>
                            </form>

                            <h3 class="sec_title">Feature Section</h3>
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <input type="hidden" name="id" value="<?php  echo $home->id; ?>">                                                       
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_feature_title" class="form-control" value="SPECIAL FEATURES">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_feature_subtitle" class="form-control" value="We offer some awesome features that will help you">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_feature_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" selected>Show</option>
                                        <option value="Hide" >Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_feature">Update</button>
                                    </select>
                                    </div>
                                </div>
                            </form>

                            <h3 class="sec_title">Service Section</h3>
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">
                               <input type="hidden" name="id" value="<?php  echo $home->id; ?>">                                                                                   
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_service_title" class="form-control" value="OUR SERVICES">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_service_subtitle" class="form-control" value="We are always here to serve you some awesome services">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_service_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" selected>Show</option>
                                        <option value="Hide" >Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_service">Update</button>
                                    </select>
                                    </div>
                                </div>
                            </form>
                            <h3 class="sec_title">Counter Information Section</h3>
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">
   <input type="hidden" name="id" value="<?php  echo $home->id; ?>">
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Item 1 - Title </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_1_title" class="form-control" value="Projects">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 1 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_1_value" class="form-control" value="150">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 1 - Icon </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_1_icon" class="form-control" value="fa fa-user">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Item 2 - Title </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_2_title" class="form-control" value="Reviews">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 2 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_2_value" class="form-control" value="300">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 2 - Icon </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_2_icon" class="form-control" value="fa fa-bar-chart">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Item 3 - Title </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_3_title" class="form-control" value="Clients">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 3 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_3_value" class="form-control" value="250">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 3 - Icon </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_3_icon" class="form-control" value="fa fa-users">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Item 4 - Title </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_4_title" class="form-control" value="Awards">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 4 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_4_value" class="form-control" value="120">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 4 - Icon </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_4_icon" class="form-control" value="fa fa-trophy">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="counter_status" class="form-control select2" style="width:auto;">
                                            <option value="Show" selected>Show</option>
                                            <option value="Hide" >Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_counter_text">Update</button>
                                    </div>
                                </div>
                            </form>
                            <h3 class="sec_title">Counter Photo Section</h3>
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Existing Counter Background</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <img src="http://grbsolution.com/synnex/public/uploads/counter.jpg" class="existing-photo" style="height:180px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">New Counter Background</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <input type="file" name="counter_photo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_counter_photo">Update</button>
                                    </div>
                                </div>
                            </form>

                            <h3 class="sec_title">Portfolio Section</h3>
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">
                                                                                                         
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_portfolio_title" class="form-control" value="WORK PORTFOLIO">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_portfolio_subtitle" class="form-control" value="See what we do for our valuable clients">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_portfolio_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" selected>Show</option>
                                        <option value="Hide" >Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_portfolio">Update</button>
                                    </select>
                                    </div>
                                </div>
                            </form>

                            <h3 class="sec_title">Booking Section</h3>
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Booking Form Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_booking_form_title" class="form-control" value="BOOKING FORM">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Booking FAQ Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_booking_faq_title" class="form-control" value="FREEQUENTLY ASKED QUESTIONS">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_booking_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" >Show</option>
                                        <option value="Hide" selected>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_booking">Update</button>
                                    </select>
                                    </div>
                                </div>
                            </form>

                            <h3 class="sec_title">Booking Photo Section</h3>
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                            
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Existing Booking Background</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <img src="http://grbsolution.com/synnex/public/uploads/home_booking_photo.jpg" class="existing-photo" style="height:180px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">New Booking Background</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <input type="file" name="home_booking_photo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_booking_photo">Update</button>
                                    </div>
                                </div>
                            </form>


                            <h3 class="sec_title">Team Section</h3>
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">
                                                                                                                        7c39b7ba3546d33a62b1225e98e2a641" />
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_team_title" class="form-control" value="OUR TEAM">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_team_subtitle" class="form-control" value="All our skilled team members are listed below">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_team_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" selected>Show</option>
                                        <option value="Hide" >Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_team">Update</button>
                                    </select>
                                    </div>
                                </div>
                            </form>

                            <h3 class="sec_title">Pricing Table Section</h3>
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_ptable_title" class="form-control" value="PRICING TABLE">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_ptable_subtitle" class="form-control" value="Our detailed consulting service prices are listed below">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_ptable_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" >Show</option>
                                        <option value="Hide" selected>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_pricing_table">Update</button>
                                    </select>
                                    </div>
                                </div>
                            </form>

                            <h3 class="sec_title">Testimonial Section</h3>
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_testimonial_title" class="form-control" value="OUR CLIENTS">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_testimonial_subtitle" class="form-control" value="See what our valuable clients tell about us">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_testimonial_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" selected>Show</option>
                                        <option value="Hide" >Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_testimonial">Update</button>
                                    </select>
                                    </div>
                                </div>
                            </form>
                            <h3 class="sec_title">Testimonial Photo Section</h3>
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                       
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <img src="http://grbsolution.com/synnex/public/uploads/home_testimonial_photo.jpg" class="existing-photo" style="height:180px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">New Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <input type="file" name="home_testimonial_photo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_testimonial_photo">Update</button>
                                    </div>
                                </div>
                            </form>

                            <h3 class="sec_title">Blog Section</h3>
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">
                                                                                                                       
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_blog_title" class="form-control" value="LATEST NEWS">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_blog_subtitle" class="form-control" value="All our latest news are listed below">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">How many item to show? </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="home_blog_item" class="form-control" value="10">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_blog_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" selected>Show</option>
                                        <option value="Hide" >Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_blog">Update</button>
                                    </select>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <div class="tab-pane" id="tab_2">
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">About Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="about_heading" class="form-control" value="ABOUT US">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">About Content </label>
                                    <div class="col-sm-9">
                                        <textarea name="about_content" class="form-control editor" cols="30" rows="10"><h3>Our Mission</h3>

<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p>

<p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p>

<p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p>

<p>&nbsp;</p>

<h3>Our Vision</h3>

<p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>

<p>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p>

<p>Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.</p>

<p><a href="http://localhost/z/public/uploads/file-2.pdf">Download this</a></p>
</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_about" class="form-control" value="About Us - Synnex- Software company">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_about" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_about" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_about">Update</button>
                                    </div>
                                </div>                              
                            </form>                        </div>
                        


                        <div class="tab-pane" id="tab_4">
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">
                                                                                                            7c39b7ba3546d33a62b1225e98e2a641" />
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">FAQ Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="faq_heading" class="form-control" value="FAQ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_faq" class="form-control" value="FAQ - Multix - Multipurpose Website CMS with Codeigniter">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_faq" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_faq" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_faq">Update</button>
                                    </div>
                                </div>                              
                            </form>                        </div>



                        <div class="tab-pane" id="tab_5">
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Service Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="service_heading" class="form-control" value="Our Services">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_service" class="form-control" value="Our Services - Multix - Multipurpose Website CMS with Codeigniter">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_service" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_service" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_service">Update</button>
                                    </div>
                                </div>                              
                            </form>                        </div>



                        <div class="tab-pane" id="tab_7">
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">
                                                                                      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Testimonial Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="testimonial_heading" class="form-control" value="TESTIMONIAL">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_testimonial" class="form-control" value="Testimonial - Multix - Multipurpose Website CMS with Codeigniter">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_testimonial" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_testimonial" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_testimonial">Update</button>
                                    </div>
                                </div>                              
                            </form>                        </div>



                        <div class="tab-pane" id="tab_8">
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">
             
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">News Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="news_heading" class="form-control" value="NEWS">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_news" class="form-control" value="News - Multix - Multipurpose Website CMS with Codeigniter">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_news" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_news" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_news">Update</button>
                                    </div>
                                </div>                              
                            </form>                        </div>



                        <div class="tab-pane" id="tab_16">
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Event Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="event_heading" class="form-control" value="EVENTS">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_event" class="form-control" value="Events - Multix - Multipurpose Website CMS with Codeigniter">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_event" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_event" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_event">Update</button>
                                    </div>
                                </div>                              
                            </form>                        </div>


                        <div class="tab-pane" id="tab_9">
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">
                                                                                                                               7c39b7ba3546d33a62b1225e98e2a641" />
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="contact_heading" class="form-control" value="CONTACT">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Address </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="contact_address" style="height:60px;">Pune</textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Email </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="contact_email" style="height:60px;">sales@yourwebsite.com
support@yourwebsite.com</textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Phone </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="contact_phone" style="height:60px;">Office 1: 9096198683
Office 2: 9096198683</textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Map (iframe Code) </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="contact_map" style="height:120px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.3833161665298!2d-118.03745848530627!3d33.85401093559897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2c6c97f8f3ed%3A0x47b1bde165dcc056!2sOak+Dr%2C+La+Palma%2C+CA+90623%2C+USA!5e0!3m2!1sen!2sbd!4v1544238752504" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_contact" class="form-control" value="Contact - Multix - Multipurpose Website CMS with Codeigniter">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_contact" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_contact" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_contact">Update</button>
                                    </div>
                                </div>                              
                            </form>                        </div>


                        <div class="tab-pane" id="tab_10">
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">
                                                                  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Search Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="search_heading" class="form-control" value="SEARCH BY:">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_search" class="form-control" value="Search - Multix - Multipurpose Website CMS with Codeigniter">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_search" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_search" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_search">Update</button>
                                    </div>
                                </div>                              
                            </form>                        </div>
                        



                        <div class="tab-pane" id="tab_11">
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">
                                                                                                            
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Term & Condition Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="term_heading" class="form-control" value="TERMS & CONDITIONS">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Term & Condition Content </label>
                                    <div class="col-sm-9">
                                        <textarea name="term_content" class="form-control editor" cols="30" rows="10"><p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p><p>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p><p>Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.</p><p>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.</p></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_term" class="form-control" value="Terms and Conditions - Multix - Multipurpose Website CMS with Codeigniter">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_term" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_term" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_term">Update</button>
                                    </div>
                                </div>                              
                            </form>                        </div>


                        <div class="tab-pane" id="tab_12">
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Privacy Policy Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="privacy_heading" class="form-control" value="PRIVACY POLICY">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Privacy Policy Content </label>
                                    <div class="col-sm-9">
                                        <textarea name="privacy_content" class="form-control editor" cols="30" rows="10"><p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p><p>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p><p>Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.</p><p>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.</p></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_privacy" class="form-control" value="Privacy Policy - Multix - Multipurpose Website CMS with Codeigniter">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_privacy" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_privacy" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_privacy">Update</button>
                                    </div>
                                </div>                              
                            </form>                        </div>





                        <div class="tab-pane" id="tab_14">
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Team Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="team_heading" class="form-control" value="Our Team">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_team" class="form-control" value="Team - Multix - Multipurpose Website CMS with Codeigniter">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_team" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_team" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_team">Update</button>
                                    </div>
                                </div>                              
                            </form>                        </div>




                        <div class="tab-pane" id="tab_15">
                            <form action="http://grbsolution.com/synnex/admin/page/update" class="form-horizontal" method="post" accept-charset="utf-8">
                             
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Portfolio Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="portfolio_heading" class="form-control" value="PORTFOLIO">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_portfolio" class="form-control" value="Portfolio - Multix - Multipurpose Website CMS with Codeigniter">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_portfolio" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_portfolio" style="height:60px;"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_portfolio">Update</button>
                                    </div>
                                </div>                              
                            </form>                        </div>





                    </div>
                </div>

                
        </div>
    </div>

</section>		</div>

	</div>



<?php include"include/footer.php"; ?>