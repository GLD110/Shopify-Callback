<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Settings</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="<?PHP echo base_url(); ?>asset/template/css/app.css" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" media="all" href="<?PHP echo base_url(); ?>asset/template/vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/css/pages/ion.css" />
    <link href="<?PHP echo base_url(); ?>asset/template/vendors/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
    <!--end of page level css-->
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/css/mytimer.css" />
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/css/pages/tab.css" />
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/vendors/Buttons/css/buttons.css" />
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/css/pages/advbuttons.css" />
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/iCheck/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/iCheck/css/line/line.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/bootstrap-switch/css/bootstrap-switch.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/switchery/css/switchery.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/awesome-bootstrap-checkbox/css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/css/pages/radio_checkbox.css">
    <style>
      .button-pill.active { background-color: #01a379; }
      .buttongroup li { margin: 40px 0; text-align: center;}

      #site-content { background: url("<?php echo base_url(); ?>asset/template/img/bg1.jpg");
      height: 500px;
      background-size: cover;}
      #call-button {
        position: absolute;
        bottom: 45px;
        right: 50px;
      }
      #call-button.left { left: 40px; }
      #call-button.center { text-align: center; }

      #call-widget.left { left: 40px; }
      #call-widget.center { margin: auto; }
    </style>
    <!--end of widget css -->
</head>

<body class="skin-josh">
    <header class="header">
      <a href="<?PHP echo base_url(); ?>" class="logo">
          <img src="<?PHP echo base_url(); ?>asset/template/img/logo.png" alt="Logo">
      </a>
      <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <div>
              <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                  <div class="responsive_nav"></div>
              </a>
          </div>
          <div class="navbar-right">
              <ul class="nav navbar-nav">
                  <!--<li class="dropdown messages-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>
                          <span class="label label-success">4</span>
                      </a>
                      <ul class="dropdown-menu dropdown-messages pull-right">
                          <li class="dropdown-title">4 New Messages</li>
                          <li class="unread message">
                              <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                  <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar.jpg" class="img-responsive message-image" alt="icon" />
                                  <div class="message-body">
                                      <strong>Riot Zeast</strong>
                                      <br>Hello, You there?
                                      <br>
                                      <small>8 minutes ago</small>
                                  </div>
                              </a>
                          </li>
                          <li class="unread message">
                              <a href="javascript:;" class="message">
                                  <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                  <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar1.jpg" class="img-responsive message-image" alt="icon" />
                                  <div class="message-body">
                                      <strong>John Kerry</strong>
                                      <br>Can we Meet ?
                                      <br>
                                      <small>45 minutes ago</small>
                                  </div>
                              </a>
                          </li>
                          <li class="unread message">
                              <a href="javascript:;" class="message">
                                  <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                      <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                  </i>
                                  <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar5.jpg" class="img-responsive message-image" alt="icon" />
                                  <div class="message-body">
                                      <strong>Jenny Kerry</strong>
                                      <br>Dont forgot to call...
                                      <br>
                                      <small>An hour ago</small>
                                  </div>
                              </a>
                          </li>
                          <li class="unread message">
                              <a href="javascript:;" class="message">
                                  <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                      <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                  </i>
                                  <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar4.jpg" class="img-responsive message-image" alt="icon" />
                                  <div class="message-body">
                                      <strong>Ronny</strong>
                                      <br>Hey! sup Dude?
                                      <br>
                                      <small>3 Hours ago</small>
                                  </div>
                              </a>
                          </li>
                          <li class="footer">
                              <a href="#">View all</a>
                          </li>
                      </ul>
                  </li>-->
                  <li class="dropdown notifications-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                          <span class="label label-warning"><?php echo count($todayList->result()); ?></span>
                      </a>
                      <ul class=" notifications dropdown-menu">
                          <li class="dropdown-title">You have <?php echo count($todayList->result()); ?> notifications</li>
                          <li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu">
                                <?php $livicons = array("pending"=>"warning", "blocked"=>"danger", "suspended"=>"bg-aqua", "completed"=>"success"); ?>
                                <?php $data_ns = array("general"=>"timer", "corporate"=>"image", "sales"=>"dashboard", "order"=>"shopping-cart-in", "complaint"=>"hand-right", "other"=>"thumbs-up"); ?>
                                <?php foreach($todayList->result() as $not) { ?>
                                  <li>
                                      <i class="livicon <?php echo $livicons[$not->status]; ?>" data-n="<?php echo $data_ns[$not->call_type]; ?>" data-s="20" data-c="white" data-hc="white"></i>
                                      <a href="<?php echo base_url() . 'callrequest/#' . $not->id; ?>"><?php echo $not->note; ?></a>
                                      <small class="pull-right">
                                          <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                          <?php echo $not->time; ?>
                                      </small>
                                  </li>
                                <?php } ?>
                              </ul>
                          </li>
                          <li class="footer">
                              <a href="<?php echo base_url() . 'callrequest/'; ?>">View all</a>
                          </li>
                      </ul>
                  </li>
                  <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <img src="<?PHP echo base_url(); ?>asset/template/img/authors/admin.png" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                          <div class="riot">
                              <div>
                                  Admin
                                  <span>
                                      <i class="caret"></i>
                                  </span>
                              </div>
                          </div>
                      </a>
                      <ul class="dropdown-menu">
                          <!-- User image -->
                          <li class="user-header bg-light-blue">
                              <img src="<?PHP echo base_url(); ?>asset/template/img/authors/admin.png" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
                              <p class="topprofiletext">Administrator</p>
                          </li>
                          <!-- Menu Body -->
                          <li style="display: none;">
                              <a href="view_user.html">
                                  <i class="livicon" data-name="user" data-s="18"></i> My Profile
                              </a>
                          </li>
                          <li role="presentation" style="display: none;"></li>
                          <li style="display: none;">
                              <a href="adduser.html">
                                  <i class="livicon" data-name="gears" data-s="18"></i> Account Settings
                              </a>
                          </li>
                          <!-- Menu Footer-->
                          <li class="user-footer">
                              <div class="pull-left">
                                  <a href="<?PHP echo base_url(); ?>upgrade">
                                      <i class="livicon" data-name="lock" data-s="18"></i> Upgrade
                                  </a>
                              </div>
                              <div class="pull-right" style="display: none;">
                                  <a href="login.html">
                                      <i class="livicon" data-name="sign-out" data-s="18"></i> Logout
                                  </a>
                              </div>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>
      </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        <ul class="sidebar_threeicons">
                            <li>
                                <a href="<?PHP echo base_url(); ?>home">
                                    <i class="livicon" data-name="home" title="Dashboard" data-c="#418BCA" data-hc="#418BCA" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?PHP echo base_url(); ?>callrequest">
                                    <i class="livicon" data-c="#EF6F6C" title="Requests" data-hc="#EF6F6C" data-name="list-ul" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?PHP echo base_url(); ?>settings">
                                    <i class="livicon" data-name="gears" title="Settings" data-c="#F89A14" data-hc="#F89A14" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?PHP echo base_url(); ?>integration">
                                    <i class="livicon" data-name="connect" title="Integration" data-size="25" data-c="#01bc8c" data-hc="#01bc8c" data-loop="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">
                        <li class="">
                            <a href="<?PHP echo base_url(); ?>home">
                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?PHP echo base_url(); ?>callrequest">
                                <i class="livicon" data-name="list-ul" data-size="18" data-c="#EF6F6C" data-hc="#EF6F6C" data-loop="true"></i>
                                <span class="title">Call Requests</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?PHP echo base_url(); ?>settings">
                                <i class="livicon" data-name="gears" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
                                <span class="title">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?PHP echo base_url(); ?>integration">
                                <i class="livicon" data-name="connect" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Integration</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Settings</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?PHP echo base_url(); ?>home">
                            <i class="livicon" data-name="home" data-size="14" data-color="#333" data-hovercolor="#333"></i> Dashboard
                        </a>
                    </li>
                    <li class="active">Settings</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                  <div class="col-md-6">
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                              <h3 class="panel-title">
                                  <i class="livicon" data-name="wrench" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                  Theme Settings
                              </h3>
                              <span class="pull-right clickable">
                                  <i class="glyphicon glyphicon-chevron-up"></i>
                              </span>
                          </div>
                          <div class="panel-body" id="panel-bg">
                              <div class="bs-example">
                                  <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                      <li class="active">
                                          <a href="#button" class="setting-btn" data-toggle="tab">Button</a>
                                      </li>
                                      <li>
                                          <a href="#widget" class="setting-wgt" data-toggle="tab">Widget</a>
                                      </li>
                                  </ul>
                                  <div id="myTabContent" class="tab-content">
                                      <div class="tab-pane fade active in" id="button">
                                          <div class="row">
                                              <div class="col-md-12" style="margin-top:5%;">
                                                  <div class="panel panel-success">
                                                      <div class="panel-body" id="slim2">
                                                          <!--slider-->
                                                          <div class="row">
                                                              <form role="form" id="btn-form" action="<?PHP echo base_url(); ?>settings/updateValue" method="POST" class="form-horizontal form-bordered">
                                                                  <div class="form-body">
                                                                      <div class="buttongroup">
                                                                          <li>
                                                                              <div class="button-group">
                                                                                  <button type="button" class="button button-pill button-success <?php echo ($query->result()[0]->value_btn_position == 'left')? 'active' : '';?>" id="btn-left" value="left">Left</button>
                                                                                  <button type="button" class="button button-pill button-success <?php echo ($query->result()[0]->value_btn_position == 'center')? 'active' : '';?>" id="btn-center" value="center">Center</button>
                                                                                  <button type="button" class="button button-pill button-success <?php echo ($query->result()[0]->value_btn_position == 'right')? 'active' : '';?>" id="btn-right" value="right">Right</button>
                                                                              </div>
                                                                              <input id="btn_position" name="btn_position" value="<?php echo $query->result()[0]->value_btn_position; ?>" class="hidden">
                                                                          </li>
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <label  class="col-md-offset-1 col-md-3 control-label">Button Width:</label>
                                                                          <div class="col-md-6">
                                                                              <input id="button_size_w" name="button_size_w" class="form-control" placeholder="158.25px" value="<?php echo $query->result()[0]->value_btn_width; ?>">
                                                                          </div>
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <label  class="col-md-offset-1 col-md-3 control-label">Button Text:</label>
                                                                          <div class="col-md-6">
                                                                              <input id="button_text" name="button_text" class="form-control" placeholder="Call Me Back" value="<?php echo $query->result()[0]->btn_text; ?>">
                                                                          </div>
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <label class="col-md-offset-1 col-md-3 control-label">Font Color:</label>
                                                                          <div class="col-md-6">
                                                                              <input type="text" data-format="hex" class="form-control demo colorpicker-element" id="picker4" value="<?php echo $query->result()[0]->value_btn_fontColor; ?>" name="font_color">
                                                                          </div>
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <label class="col-md-offset-1 col-md-3 control-label">Background Color:</label>
                                                                          <div class="col-md-6">
                                                                              <input type="text" data-format="hex" class="form-control demo colorpicker-element" id="picker41" value="<?php echo $query->result()[0]->value_btn_bgColor; ?>" name="bg_color">
                                                                          </div>
                                                                      </div>
                                                                      <div class="form-group" id="wrapper_visible_btn">
                                                                          <label  class="col-md-offset-1 col-md-3 control-label">Show Button:</label>
                                                                          <div class="col-md-6">
                                                                            <input id="button-visible" type="checkbox" value="<?php if($query->result()[0]->value_btn_status == 0) echo 'off'; else $query->result()[0]->value_btn_status; ?>" name="my-checkbox" <?php if($query->result()[0]->value_btn_status=='on') echo 'checked="checked"';?> data-on-color="info" data-off-color="primary" data-animate>
                                                                          </div>
                                                                      </div>
                                                                      <div class="buttongroup">
                                                                          <li>
                                                                              <div class="button-group">
                                                                                  <a href="#" id="button_save" class="button button-rounded button-primary button-small">Save</a>
                                                                              </div>
                                                                          </li>
                                                                      </div>
                                                                  </div>
                                                              </form>
                                                          </div>
                                                          <!--slider ends-->
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="tab-pane fade" id="widget">
                                        <div class="row">
                                            <div class="col-md-12" style="margin-top:5%;">
                                                <div class="panel panel-success">
                                                    <div class="panel-body" id="slim2">
                                                        <!--slider-->
                                                        <div class="row">
                                                            <form role="form" id="wgt-form" action="<?PHP echo base_url(); ?>settings/updateValue" method="POST" class="form-horizontal form-bordered">
                                                                <div class="form-body">
                                                                    <div class="buttongroup">
                                                                        <li>
                                                                            <div class="button-group">
                                                                                <button type="button" id="wgt-left" class="button button-pill button-success <?php echo ($query->result()[0]->value_wgt_position == 'left')? 'active' : '';?>">Left</button>
                                                                                <button type="button" id="wgt-center" class="button button-pill button-success <?php echo ($query->result()[0]->value_wgt_position == 'center')? 'active' : '';?>">Center</button>
                                                                                <button type="button" id="wgt-right" class="button button-pill button-success <?php echo ($query->result()[0]->value_wgt_position == 'right')? 'active' : '';?>">Right</button>
                                                                            </div>
                                                                            <input id="wgt_position" class="hidden" name="wgt_position" value="<?php echo $query->result()[0]->value_wgt_position; ?>">
                                                                        </li>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label  class="col-md-offset-1 col-md-3 control-label">Title Text:</label>
                                                                        <div class="col-md-6">
                                                                            <input id="wgt_text" name="wgt_text" class="form-control" placeholder="Please fill up the form below" value="<?php echo $query->result()[0]->widget_text; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-offset-1 col-md-3 control-label">Font Color:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" data-format="hex" class="form-control demo colorpicker-element" id="picker5" value="<?php echo $query->result()[0]->value_wgt_fontColor; ?>" name="font_color">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-offset-1 col-md-3 control-label">Background Color:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" data-format="hex" class="form-control demo colorpicker-element" id="picker51" value="<?php echo $query->result()[0]->value_wgt_bgColor; ?>" name="bg_color">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-offset-1 col-md-3 control-label">Timezone:</label>
                                                                        <div class="col-md-6" style="padding-top: 5px;">
                                                                          <label>
                                                                              <input type="radio" name="timezone" value="global" class="square" <?php if($query->result()[0]->value_wgt_timezone=='global') echo 'checked';?>/> Global &nbsp;&nbsp;&nbsp;
                                                                          </label>
                                                                          <label>
                                                                              <input type="radio" name="timezone" value="us-only" class="square" <?php if($query->result()[0]->value_wgt_timezone=='us-only') echo 'checked';?>/> US Only &nbsp;&nbsp;&nbsp;
                                                                          </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="buttongroup">
                                                                        <li>
                                                                            <div class="button-group">
                                                                                <a href="#" id="wgt_save" class="button button-rounded button-primary button-small">Save</a>
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!--slider ends-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                              <h3 class="panel-title">
                                  <i class="livicon" data-name="presentation" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                  Previews
                              </h3>
                              <div class=" kal pull-right" style="display: none;">
                                  <!-- Tabs -->
                                  <ul class="nav panel-tabs">
                                      <li class="active">
                                          <a href="#tab1" class="tab-btn" data-toggle="tab">Button</a>
                                      </li>
                                      <li>
                                          <a href="#tab2" class="tab-wgt" data-toggle="tab">Widget</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="panel-body">
                              <div class="tab-content" id="slim1">
                                  <div class="tab-pane text-justify active" id="tab1">
                                      <div id="site-content">
                                        <div id="call-button" class="<?php echo $query->result()[0]->value_btn_position; ?> <?php if($query->result()[0]->value_btn_position == 'center') echo 'left'; ?>">
                                          <a href="#" class="button button-pill" style="width:<?php echo $query->result()[0]->value_btn_width; ?>px; color:<?php echo $query->result()[0]->value_btn_fontColor; ?>; background-color:<?php echo $query->result()[0]->value_btn_bgColor; ?>; <?php if($query->result()[0]->value_btn_status != 'on') echo 'display:none'; ?> "><?php echo $query->result()[0]->btn_text; ?></a>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="tab-pane text-justify" id="tab2">
                                      <div id="site-content">
                                        <div id="call-widget" style="position: absolute; bottom: 45px; right: 50px; max-width: 300px; max-height: 465px;" class="<?php if($query->result()[0]->value_wgt_position == 'center') echo $query->result()[0]->value_wgt_position . ' ' . 'left'; else echo $query->result()[0]->value_wgt_position ;?>">
                                          <style>
                                            #call-widget label,textarea,input {
                                              width: 100%;
                                            }
                                          </style>
                                          <form border="0" name="contact" method="POST" style="padding: 10px; border-radius: 5px; color:<?php echo $query->result()[0]->value_wgt_fontColor; ?>; background-color:<?php echo $query->result()[0]->value_wgt_bgColor; ?>;" action="" onsubmit="return(validate());">
                                    			  	<div style="margin:7px 0 7px 0;" class="above-text">
                                                <b><?php echo $query->result()[0]->widget_text; ?></b>
                                              </div>
                                    					<!--Full name-->
                                    						<label>Full Name *</label>
                                    						<input type="text" class="input" maxlength="35" name="name" value="">
                                    					<!--Email address-->
                                    						<label>Email Address *</label>
                                    						<input type="text" class="input" maxlength="45" name="email" value="">
                                    					<!--Phone number-->
                                    						<label>Your phone number *</label>
                                    						<input type="text" name="phone" class="input" value="" maxlength="30">
                                              <!--Type of call-->
                                                <label style="width: 48%; margin: 5px 0;">Call Type *</label>
                                                <select style="width: 48%; margin: 5px 0; float: right; clear: both;" id="call_type" name="call_type">
                                                  <option value="general<?php /*if(!empty($emails)) echo $emails->generalEmail;*/ ?>" style="<?php if(!empty($emails)) if($emails[0]->generalEmail == '') echo 'display: none;'; ?>">General</option>
                                                  <option value="corporate<?php /*if(!empty($emails)) echo $emails->coporateEmail;*/ ?>" style="<?php if(!empty($emails)) if($emails[0]->coporateEmail == '') echo 'display: none;'; ?>">Corporate Quotes</option>
                                                  <option value="sales<?php /*if(!empty($emails)) echo $emails->salesEmail;*/ ?>" style="<?php if(!empty($emails)) if($emails[0]->salesEmail == '') echo 'display: none;'; ?>">Sales</option>
                                                  <option value="order<?php /*if(!empty($emails)) echo $emails->orderEmail;*/ ?>" style="<?php if(!empty($emails)) if($emails[0]->orderEmail == '') echo 'display: none;'; ?>">Existing Order</option>
                                                  <option value="complaint<?php /*if(!empty($emails)) echo $emails->complaintEmail;*/ ?>" style="<?php if(!empty($emails)) if($emails[0]->complaintEmail == '') echo 'display: none;'; ?>">Complaint</option>
                                                  <option value="other<?php /*if(!empty($emails)) echo $emails->otherEmail;*/ ?>" style="<?php if(!empty($emails)) if($emails[0]->otherEmail == '') echo 'display: none;'; ?>">Other</option>
                                                </select>
                                    					<!--Best to call-->
                                    						<label>Best time to call</label>
                                                <select style="width: 48%; margin-bottom: 5px;" id="time_month" name="time_month">
                                    							<option value="1">1</option>
                                    							<option value="2">2</option>
                                    							<option value="3">3</option>
                                    							<option value="4">4</option>
                                    							<option value="5">5</option>
                                    							<option value="6">6</option>
                                    							<option value="7">7</option>
                                    							<option value="8">8</option>
                                    							<option value="9">9</option>
                                    							<option value="10">10</option>
                                    							<option value="11">11</option>
                                    							<option value="12">12</option>
                                    						</select>
                                                <select style="width: 48%; margin-bottom: 5px;" id="time_day" name="time_day">
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                  <option value="6">6</option>
                                                  <option value="7">7</option>
                                                  <option value="8">8</option>
                                                  <option value="9">9</option>
                                                  <option value="10">10</option>
                                                  <option value="11">11</option>
                                                  <option value="12">12</option>
                                                  <option value="13">13</option>
                                                  <option value="14">14</option>
                                                  <option value="15">15</option>
                                                  <option value="16">16</option>
                                                  <option value="17">17</option>
                                                  <option value="18">18</option>
                                                  <option value="19">19</option>
                                                  <option value="20">20</option>
                                                  <option value="21">21</option>
                                                  <option value="22">22</option>
                                                  <option value="23">23</option>
                                                  <option value="24">24</option>
                                                  <option value="25">25</option>
                                                  <option value="26">26</option>
                                                  <option value="27">27</option>
                                                  <option value="28">28</option>
                                                  <option value="29">29</option>
                                                  <option value="30">30</option>
                                                  <option value="31">31</option>
                                                </select>
                                    						<select style="width: 48%; margin-bottom: 5px;" id="time_hour" name="time_hour">
                                    							<option value="00:00 (Midnight)">12:00 A.M.</option>
                                    							<option value="00:30 (12:30 A.M.)">12:30 A.M.</option>
                                    							<option value="01:00 (1:00 A.M.)">1:00 A.M.</option>
                                    							<option value="01:30 (1:30 A.M.)">1:30 A.M.</option>
                                    							<option value="02:00 (2:00 A.M.)">2:00 A.M.</option>
                                    							<option value="02:30 (2:30 A.M.)">2:30 A.M.</option>
                                    							<option value="03:00 (3:00 A.M.)">3:00 A.M.</option>
                                    							<option value="03:30 (3:30 A.M.)">3:30 A.M.</option>
                                    							<option value="04:00 (4:00 A.M.)">4:00 A.M.</option>
                                    							<option value="04:30 (4:30 A.M.)">4:30 A.M.</option>
                                    							<option value="05:00 (5:00 A.M.)">5:00 A.M.</option>
                                    							<option value="05:30 (5:30 A.M.)">5:30 A.M.</option>
                                    							<option value="06:00 (6:00 A.M.)">6:00 A.M.</option>
                                    							<option value="06:30 (6:30 A.M.)">6:30 A.M.</option>
                                    							<option value="07:00 (7:00 A.M.)">7:00 A.M.</option>
                                    							<option value="07:30 (7:30 A.M.)">7:30 A.M.</option>
                                    							<option value="08:00 (8:00 A.M.)">8:00 A.M.</option>
                                    							<option value="08:30 (8:30 A.M.)">8:30 A.M.</option>
                                    							<option value="09:00 (9:00 A.M.)">9:00 A.M.</option>
                                    							<option value="09:30 (9:30 A.M.)">9:30 A.M.</option>
                                    							<option value="10:00 (10:00 A.M.)">10:00 A.M.</option>
                                    							<option value="10:30 (10:30 A.M.)">10:30 A.M.</option>
                                    							<option value="11:00 (11:00 A.M.)">11:00 A.M.</option>
                                    							<option value="11:30 (11:30 A.M.)">11:30 A.M.</option>
                                    							<option value="12:00 (12:00 (Noon)" selected="">12:00 P.M.</option>
                                    							<option value="12:30 (12:30 P.M.)">12:30 P.M.</option>
                                    							<option value="13:00 (1:00 P.M.)">1:00 P.M.</option>
                                    							<option value="13:30 (1:30 P.M.)">1:30 P.M.</option>
                                    							<option value="14:00 (2:00 P.M.)">2:00 P.M.</option>
                                    							<option value="14:30 (2:30 P.M.)">2:30 P.M.</option>
                                    							<option value="15:00 (3:00 P.M.)">3:00 P.M.</option>
                                    							<option value="15:30 (3:30 P.M.)">3:30 P.M.</option>
                                    							<option value="16:00 (4:00 P.M.)">4:00 P.M.</option>
                                    							<option value="16:30 (4:30 P.M.)">4:30 P.M.</option>
                                    							<option value="17:00 (5:00 P.M.)">5:00 P.M.</option>
                                    							<option value="17:30 (5:30 P.M.)">5:30 P.M.</option>
                                    							<option value="18:00 (6:00 P.M.)">6:00 P.M.</option>
                                    							<option value="18:30 (6:30 P.M.)">6:30 P.M.</option>
                                    							<option value="19:00 (7:00 P.M.)">7:00 P.M.</option>
                                    							<option value="19:30 (7:30 P.M.)">7:30 P.M.</option>
                                    							<option value="20:00 (8:00 P.M.)">8:00 P.M.</option>
                                    							<option value="20:30 (8:30 P.M.)">8:30 P.M.</option>
                                    							<option value="21:00 (9:00 P.M.)">9:00 P.M.</option>
                                    							<option value="21:30 (9:30 P.M.)">9:30 P.M.</option>
                                    							<option value="22:00 (10:00 P.M.)">10:00 P.M.</option>
                                    							<option value="22:30 (10:30 P.M.)">10:30 P.M.</option>
                                    							<option value="23:00 (11:00 P.M.)">11:00 P.M.</option>
                                    							<option value="23:30 (11:30 P.M.)">11:30 P.M.</option>
                                    						</select>
                                    						<select style="width: 48%; margin-bottom: 5px;" id="time_gmt" name="time_gmt" class="<?php if($query->result()[0]->value_wgt_timezone != 'global') echo 'hidden'; ?>">
                                    							<option value="GMT-0100">GMT-1</option>
                                    							<option value="GMT-0200">GMT-2</option>
                                    							<option value="GMT-0300">GMT-3</option>
                                    							<option value="GMT-0400">GMT-4</option>
                                    							<option value="GMT-0500">GMT-5</option>
                                    							<option value="GMT-0600">GMT-6</option>
                                    							<option value="GMT-0700">GMT-7</option>
                                    							<option value="GMT-0800">GMT-8</option>
                                    							<option value="GMT-0900">GMT-9</option>
                                    							<option value="GMT-1000">GMT-10</option>
                                    							<option value="GMT-1100">GMT-11</option>
                                    							<option value="GMT-1200">GMT-12</option>
                                    							<option value="GMT+0000" selected="">GMT</option>
                                    							<option value="GMT+0100">GMT+1</option>
                                    							<option value="GMT+0200">GMT+2</option>
                                    							<option value="GMT+0300">GMT+3</option>
                                    							<option value="GMT+0400">GMT+4</option>
                                    							<option value="GMT+0500">GMT+5</option>
                                    							<option value="GMT+0600">GMT+6</option>
                                    							<option value="GMT+0700">GMT+7</option>
                                    							<option value="GMT+0800">GMT+8</option>
                                    							<option value="GMT+0900">GMT+9</option>
                                    							<option value="GMT+1000">GMT+10</option>
                                    							<option value="GMT+1100">GMT+11</option>
                                    							<option value="GMT+1200">GMT+12</option>
                                    						</select>
                                                <select style="width: 48%; margin-bottom: 5px;" id="time_ust" name="time_gmt" class="<?php if($query->result()[0]->value_wgt_timezone != 'us-only') echo 'hidden'; ?>">
                                    							<option value="GMT-0800" selected="">PST (UTC−08:00)</option>
                                    							<option value="GMT-0700">MST (UTC−07:00)</option>
                                    							<option value="GMT-0600">CST (UTC−06:00)</option>
                                    							<option value="GMT-0500">EST (UTC−05:00)</option>
                                    							<option value="GMT-1000">HST (UTC−10:00)</option>
                                    							<option value="GMT-0900">AKST (UTC−09:00)</option>
                                    						</select>
                                                <select style="width: 48%; margin-bottom: 5px;" id="time_udt" name="time_gmt" class="<?php if($query->result()[0]->value_wgt_timezone != 'us-only') echo 'hidden'; ?>">
                                    							<option value="GMT-0700" selected="">PDT (UTC−07:00)</option>
                                    							<option value="GMT-0600">MST (UTC−06:00)</option>
                                    							<option value="GMT-0500">CST (UTC−05:00)</option>
                                    							<option value="GMT-0400">EST (UTC−04:00)</option>
                                    							<option value="GMT-0900">HST (UTC−09:00)</option>
                                    							<option value="GMT-0800">AKST (UTC−08:00)</option>
                                    						</select>
                                    						<!--Notes-->
                                    						<label>Notes</label>
                                    						<textarea name="message" style="height: 40px;"></textarea>
                                    						<!--SUBMIT--><br>
                                    						<input type="submit"  disabled="disabled" id="send_request" style="margin-top: 5px; max-width: 120px; padding: 4px 12px;" class="btn btn-primary" name="submitc" value="Send request">
                                                <label style="text-align: right;">Powered by <a href="https://call-back.io"><b>call-back.io</b></a></label>
                                    			</form>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </section>
        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="<?PHP echo base_url(); ?>asset/template/js/app.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!--color picker slider-->
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/colorpicker/js/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <script src="<?PHP echo base_url(); ?>asset/template/js/pages/color-picker.js" type="text/javascript"></script>

    <script src="<?PHP echo base_url(); ?>asset/template/js/pages/tabs_accordions.js" type="text/javascript"></script>
    <script>
    //Position Button Action
      $('.button-pill').click(function(){
        var active_b = $( this ).parent().find('.active');
        active_b.removeClass('active');
        $( this ).addClass('active');
      });
    //Setting for Button
      $('#btn-left').click(function(){
        $('#btn_position').val('left');
        $('#call-button').addClass('left');
        if($('#call-button').hasClass('center'))
          $('#call-button').removeClass('center');
      });
      $('#btn-center').click(function(){
        $('#btn_position').val('center');
        $('#call-button').addClass('left');
        $('#call-button').addClass('center');
      });
      $('#btn-right').click(function(){
        $('#btn_position').val('right');
        if($('#call-button').hasClass('center'))
          $('#call-button').removeClass('center');
        if($('#call-button').hasClass('left'))
          $('#call-button').removeClass('left');
      });
      //button width
      $('#button_size_w').change(function(){
        $('#call-button a').css('width', $( this ).val());
      });
      //button text
      $('#button_text').keydown(function(){
        $('#call-button a').html($(this).val());
      });
      //button fontColor
      $('.colorpicker').on('click',function(){
        $('#call-button a').css('color', $( '#picker4' ).val());
        $('#call-button a').css('background-color', $( '#picker41' ).val());
      });
      $(window).load(function(){

        $('.bootstrap-switch-container span').click(function(){
          var temp = $('#button-visible').val();
          if( temp == 'on' ){
            $('#call-button a').hide();
            $('#button-visible').val('off');
          }
          else if(temp == 'off'){
            $('#call-button a').show();
            $('#button-visible').val('on');
          }
        });
      });

      $('#button_save').click(function(){
        var url = $('#btn-form').attr('action');
             $.ajax({
             url: url,
             data: $("#btn-form").serialize(),
             type: $("#btn-form").attr('method')
           }).done(function(data) {
             location.reload();
           });
      });

      $('.setting-btn').click(function(){
        $('.tab-btn').click();
      });
      $('.setting-wgt').click(function(){
        $('.tab-wgt').click();
      });

    //Setting for Widget
      $('#wgt-left').click(function(){
        $('#wgt_position').val('left');
        $('#call-widget').addClass('left');
        if($('#call-widget').hasClass('center'))
          $('#call-widget').removeClass('center');
      });
      $('#wgt-center').click(function(){
        $('#wgt_position').val('center');
        $('#call-widget').addClass('left');
        $('#call-widget').addClass('center');
      });
      $('#wgt-right').click(function(){
        $('#wgt_position').val('right');
        if($('#call-widget').hasClass('center'))
          $('#call-widget').removeClass('center');
        if($('#call-widget').hasClass('left'))
          $('#call-widget').removeClass('left');
      });

      $('#wgt_text').keydown(function(){
        $('#call-widget form .above-text').html($(this).val());
      });

      $('.colorpicker').on('click',function(){
        $('#call-widget form').css('color', $( '#picker5' ).val());
        $('#call-widget form').css('background-color', $( '#picker51' ).val());
      });

      $('#wgt_save').click(function(){
        var url = $('#wgt-form').attr('action');
             $.ajax({
             url: url,
             data: $("#wgt-form").serialize(),
             type: $("#wgt-form").attr('method')
           }).done(function(data) {
             location.reload();
           });
      });

      $(document).ready(function(){

        var dateObj = new Date();
        var month = dateObj.getUTCMonth() + 1;
        var day = dateObj.getUTCDate();
        var year = dateObj.getUTCFullYear();
        $('#time_month').val(month);
        $('#time_day').val(day);
        $('#time_gmt').val(dateObj.toString().match(/([A-Z]+[\+-][0-9]+)/)[1]);
        if($('#time_udt').hasClass('hidden'))
          $('#time_ust').val(dateObj.toString().match(/([A-Z]+[\+-][0-9]+)/)[1]);
        if($('#time_ust').hasClass('hidden'))
          $('#time_udt').val(dateObj.toString().match(/([A-Z]+[\+-][0-9]+)/)[1]);
        if(month > 2 && month < 12){
          $('#time_ust').hide();
        }
        else {
          $('#time_udt').hide();
        }

      });
    </script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/iCheck/js/icheck.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/bootstrap-switch/js/bootstrap-switch.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/card/lib/js/jquery.card.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/js/pages/radio_checkbox.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/callback/callback-admin.js"></script>
    <!-- end of page level js -->
</body>

</html>
