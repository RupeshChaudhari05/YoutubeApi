<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/datepicker3.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/all.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/jquery.fancybox.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/style.css">
  


  <style>
    .skin-blue .wrapper,
    .skin-blue .main-header .logo,
    .skin-blue .main-header .navbar,
    .skin-blue .main-sidebar,
    .content-header .content-header-right a,
    .content .form-horizontal .btn-success {
      background-color: #000000!important;
    }

    .content-header .content-header-right a,
    .content .form-horizontal .btn-success {
      border-color: #000000!important;
    }
    
    .content-header>h1,
    .content-header .content-header-left h1,
    h3 {
      color: #000000!important;
    }

    .box.box-info {
      border-top-color: #000000!important;
    }

    .nav-tabs-custom>.nav-tabs>li.active {
      border-top-color: #f4f4f4!important;
    }

    .skin-blue .sidebar a {
      color: #fff!important;
    }

    .skin-blue .sidebar-menu>li>.treeview-menu {
      margin: 0!important;
    }
    .skin-blue .sidebar-menu>li>a {
      border-left: 0!important;
    }

    .nav-tabs-custom>.nav-tabs>li {
      border-top-width: 1px!important;
    }

  </style>



</head>

<body class="hold-transition fixed skin-blue sidebar-mini">

  <div class="wrapper">

    <header class="main-header">

      <a href="<?php echo base_url(); ?>admin/dashboard" class="logo">
        <span class="logo-lg">Webobee</span>
      </a>

      <nav class="navbar navbar-static-top">
        
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Admin Panel</span>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li>
              <a href="<?php echo base_url(); ?>" target="_blank">Visit Website</a>
            </li>

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <img src="http://grbsolution.com/synnex/public/uploads/user-.jpg" class="user-image" alt="user photo">
                                
                <span class="hidden-xs"></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-footer">
                  <div>
                    <a href="<?php echo base_url(); ?>admin/profile" class="btn btn-default btn-flat">Edit Profile</a>
                  </div>
                  <div>
                    <a href="<?php echo base_url(); ?>/Start/logout" class="btn btn-default btn-flat">Log out</a>
                  </div>
                </li>
              </ul>
            </li>
            
          </ul>
        </div>

      </nav>
    </header>

    <?php 


   function get_name($table,$column,$value,$column_value)
{
        $ci=& get_instance();
//AND `status`='Active'
$sql="SELECT * from `$table` where `$column`='$value'";

    $sql1=$ci->db->query($sql);

    $data2=$sql1->row();

    return  $data2->$column_value;

}



    ?>