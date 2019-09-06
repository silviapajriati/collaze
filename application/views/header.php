<?php
$login = $this->session->has_userdata('user','pass','name');

?>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Extra - About Us</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url() ?>assets/admin/pages/css/about-us.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url() ?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url() ?>assets/admin/layout2/css/themes/grey.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>

<!-- BEGIN HEADER INNER -->
<div class="page-header-inner container" style="width: 100%;" >
  <!-- BEGIN LOGO -->
  <div class="page-logo">
    <a href="<?php echo site_url(); ?>">
    <br>
    <span  class="logo-default" alt="logo" style="font-size: 25px; color: #ffffff;"> COLLAZE</span>
    </a>
    <div class="menu-toggler sidebar-toggler">
    </div>
  </div>
  <!-- END LOGO -->
  <!-- BEGIN RESPONSIVE MENU TOGGLER -->
  <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
  </a>
  <!-- END RESPONSIVE MENU TOGGLER -->
  <!-- BEGIN PAGE TOP -->
  <div class="page-top">
    <!-- BEGIN HEADER SEARCH BOX -->
    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
    <form class="search-form search-form-expanded" action="extra_search.html" method="GET">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..." name="query">
        <span class="input-group-btn">
        <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
        </span>
      </div>
    </form>
    <!-- END HEADER SEARCH BOX -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
      <ul class="nav navbar-nav pull-right">
        <!-- BEGIN USER LOGIN DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-user">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
          <!-- <span class="username username-hide-on-mobile"> -->
            <?php  if (!$login){ ?>
              <li>
              <li><a href="<?php echo base_url() ?>login"> <i class="icon-user"></i> Login</a></li>
              <?php }else{ ?>
              <li>
              <li data-toggle="modal" ><a href="<?php echo site_url('login/logout'); ?>"> <i class="icon-key"></i> Log Out (<?php echo $this->session->userdata('user'); ?>)</a></li>
            <?php } ?> 
          <!-- </span> -->
          </ul>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
      </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END PAGE TOP -->
</div>
<!-- END HEADER INNER -->









