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
      .buttongroup .button-small { text }
      #site-content { background: url("<?php echo base_url(); ?>asset/template/img/bg1");
      height: 500px;
      background-size: cover;}
      #call-button {
        position: absolute;
        bottom: 45px;
        right: 50px;
      }
      #call-button.left { left: 40px; }
      #call-button.center { text-align: center; }

      #call-widget {
        position: absolute;
        bottom: 45px;
        right: 50px;
        max-width: 225px;
      }
      #call-widget form {
        padding: 10px;
      }
      #call-widget.left { left: 40px; }
      #call-widget.center { margin: auto; }
    </style>
    <!--end of mytimer css -->
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
                          <span class="label label-warning">7</span>
                      </a>
                      <ul class=" notifications dropdown-menu">
                          <li class="dropdown-title">You have 7 notifications</li>
                          <li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu">
                                  <li>
                                      <i class="livicon danger" data-n="timer" data-s="20" data-c="white" data-hc="white"></i>
                                      <a href="#">after a long time</a>
                                      <small class="pull-right">
                                          <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                          Just Now
                                      </small>
                                  </li>
                                  <li>
                                      <i class="livicon success" data-n="gift" data-s="20" data-c="white" data-hc="white"></i>
                                      <a href="#">Jef's Birthday today</a>
                                      <small class="pull-right">
                                          <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                          Few seconds ago
                                      </small>
                                  </li>
                                  <li>
                                      <i class="livicon warning" data-n="dashboard" data-s="20" data-c="white" data-hc="white"></i>
                                      <a href="#">out of space</a>
                                      <small class="pull-right">
                                          <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                          8 minutes ago
                                      </small>
                                  </li>
                                  <li>
                                      <i class="livicon bg-aqua" data-n="hand-right" data-s="20" data-c="white" data-hc="white"></i>
                                      <a href="#">New friend request</a>
                                      <small class="pull-right">
                                          <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                          An hour ago
                                      </small>
                                  </li>
                                  <li>
                                      <i class="livicon danger" data-n="shopping-cart-in" data-s="20" data-c="white" data-hc="white"></i>
                                      <a href="#">On sale 2 products</a>
                                      <small class="pull-right">
                                          <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                          3 Hours ago
                                      </small>
                                  </li>
                                  <li>
                                      <i class="livicon success" data-n="image" data-s="20" data-c="white" data-hc="white"></i>
                                      <a href="#">Lee Shared your photo</a>
                                      <small class="pull-right">
                                          <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                          Yesterday
                                      </small>
                                  </li>
                                  <li>
                                      <i class="livicon warning" data-n="thumbs-up" data-s="20" data-c="white" data-hc="white"></i>
                                      <a href="#">David liked your photo</a>
                                      <small class="pull-right">
                                          <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                          2 July 2014
                                      </small>
                                  </li>
                              </ul>
                          </li>
                          <li class="footer">
                              <a href="#">View all</a>
                          </li>
                      </ul>
                  </li>
                  <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar3.jpg" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                          <div class="riot">
                              <div>
                                  Riot
                                  <span>
                                      <i class="caret"></i>
                                  </span>
                              </div>
                          </div>
                      </a>
                      <ul class="dropdown-menu">
                          <!-- User image -->
                          <li class="user-header bg-light-blue">
                              <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar3.jpg" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
                              <p class="topprofiletext">Riot Zeast</p>
                          </li>
                          <!-- Menu Body -->
                          <li style="display: none;">
                              <a href="view_user.html">
                                  <i class="livicon" data-name="user" data-s="18"></i> My Profile
                              </a>
                          </li>
                          <li role="presentation" style="display: none;"></li>
                          <li>
                              <a href="adduser.html">
                                  <i class="livicon" data-name="gears" data-s="18"></i> Account Settings
                              </a>
                          </li>
                          <!-- Menu Footer-->
                          <li class="user-footer" style="display: none;">
                              <div class="pull-left">
                                  <a href="lockscreen.html">
                                      <i class="livicon" data-name="lock" data-s="18"></i> Lock
                                  </a>
                              </div>
                              <div class="pull-right">
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
                                                              <form role="form" class="form-horizontal form-bordered">
                                                                  <div class="form-body">
                                                                      <div class="buttongroup">
                                                                          <li>
                                                                              <div class="button-group">
                                                                                  <button type="button" class="button button-pill button-success" id="btn-left">Left</button>
                                                                                  <button type="button" class="button button-pill button-success" id="btn-center">Center</button>
                                                                                  <button type="button" class="button button-pill button-success active" id="btn-right">Right</button>
                                                                              </div>
                                                                          </li>
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <label  class="col-md-offset-1 col-md-3 control-label">Button Text</label>
                                                                          <div class="col-md-6">
                                                                              <input id="button_text" name="button_text" class="form-control" placeholder="Call Me Back">
                                                                          </div>
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <label class="col-md-offset-1 col-md-3 control-label">Font Color</label>
                                                                          <div class="col-md-6">
                                                                              <input type="text" data-format="hex" class="form-control demo colorpicker-element" id="picker4" value="success" name="font_color">
                                                                          </div>
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <label class="col-md-offset-1 col-md-3 control-label">Background Color</label>
                                                                          <div class="col-md-6">
                                                                              <input type="text" data-format="hex" class="form-control demo colorpicker-element" id="picker41" value="success" name="bg_color">
                                                                          </div>
                                                                      </div>
                                                                      <div class="form-group" id="wrapper_visible_btn">
                                                                          <label  class="col-md-offset-1 col-md-3 control-label">Show Button</label>
                                                                          <div class="col-md-6">
                                                                            <input id="button-visible" type="checkbox" name="my-checkbox" data-on-color="info" data-off-color="primary" data-animate>
                                                                          </div>
                                                                      </div>
                                                                      <div class="buttongroup">
                                                                          <li>
                                                                              <div class="button-group">
                                                                                  <a href="#" class="button button-rounded button-primary button-small">Save</a>
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
                                                            <form role="form" class="form-horizontal form-bordered">
                                                                <div class="form-body">
                                                                    <div class="buttongroup">
                                                                        <li>
                                                                            <div class="button-group">
                                                                                <button type="button" id="wgt-left" class="button button-pill button-success">Left</button>
                                                                                <button type="button" id="wgt-center" class="button button-pill button-success">Center</button>
                                                                                <button type="button" id="wgt-right" class="button button-pill button-success active">Right</button>
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label  class="col-md-offset-1 col-md-3 control-label">Title Text</label>
                                                                        <div class="col-md-6">
                                                                            <input id="above_text" name="above_text" class="form-control" placeholder="Please fill up the form below">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-offset-1 col-md-3 control-label">Font Color</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" data-format="hex" class="form-control demo colorpicker-element" id="picker5" value="success" name="font_color">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-offset-1 col-md-3 control-label">Background Color</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" data-format="hex" class="form-control demo colorpicker-element" id="picker51" value="success" name="font_color">
                                                                        </div>
                                                                    </div>
                                                                    <div class="buttongroup">
                                                                        <li>
                                                                            <div class="button-group">
                                                                                <a href="#" class="button button-rounded button-primary button-small">Save</a>
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
                                        <div id="call-button">
                                          <a href="#" class="button button-pill">Call Me Back</a>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="tab-pane text-justify" id="tab2">
                                      <div id="site-content">
                                        <div id="call-widget">
                                          <form border="0" name="contact" method="POST" action="" onsubmit="return(validate());">
                                    			  	<div style="margin:7px 0 7px 0;" class="above-text">
                                                Please fill up the form below.
                                              </div>
                                    					<!--Full name-->
                                    						Full Name *<br>
                                    						<input type="text" class="input" maxlength="35" name="name" value="">
                                    					<!--Email address-->
                                    						<br>Email Address *<br>
                                    						<input type="text" class="input" maxlength="45" name="email" value="">
                                    					<!--Phone number-->
                                    						<br>Your phone number *<br>
                                    						<input type="text" name="phone" class="input" value="" maxlength="30">
                                    					<!--Best to call-->
                                    						<br>Best time to call<br>
                                    						<select style="width: 100px;" name="time">
                                    							<option value="00:00 (Midnight)" selected="">12:00 A.M.</option>
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

                                    							<option value="09:00 (9:00 A.M.)" selected="">9:00 A.M.</option>
                                    							<option value="09:30 (9:30 A.M.)">9:30 A.M.</option>
                                    							<option value="10:00 (10:00 A.M.)">10:00 A.M.</option>
                                    							<option value="10:30 (10:30 A.M.)">10:30 A.M.</option>
                                    							<option value="11:00 (11:00 A.M.)">11:00 A.M.</option>
                                    							<option value="11:30 (11:30 A.M.)">11:30 A.M.</option>
                                    							<option value="12:00 (12:00 (Noon)">12:00 P.M.</option>
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
                                    						<select style="width: 100px;" name="time_gmt">
                                    							<option value="GMT-1">GMT-1</option>
                                    							<option value="GMT-2">GMT-2</option>
                                    							<option value="GMT-3">GMT-3</option>
                                    							<option value="GMT-4">GMT-4</option>
                                    							<option value="GMT-5" selected="">GMT-5</option>
                                    							<option value="GMT-6">GMT-6</option>
                                    							<option value="GMT-7">GMT-7</option>
                                    							<option value="GMT-8">GMT-8</option>
                                    							<option value="GMT-9">GMT-9</option>
                                    							<option value="GMT-10">GMT-10</option>
                                    							<option value="GMT-11">GMT-11</option>
                                    							<option value="GMT-12">GMT-12</option>
                                    							<option value="GMT">GMT</option>
                                    							<option value="GMT+1">GMT+1</option>
                                    							<option value="GMT+2">GMT+2</option>
                                    							<option value="GMT+3">GMT+3</option>
                                    							<option value="GMT+4">GMT+4</option>
                                    							<option value="GMT+5">GMT+5</option>
                                    							<option value="GMT+6">GMT+6</option>
                                    							<option value="GMT+7">GMT+7</option>
                                    							<option value="GMT+8">GMT+8</option>
                                    							<option value="GMT+9">GMT+9</option>
                                    							<option value="GMT+10">GMT+10</option>
                                    							<option value="GMT+11">GMT+11</option>
                                    							<option value="GMT+12">GMT+12</option>
                                    						</select>
                                    						<!--Notes-->
                                    						<br>Notes<br>
                                    						<textarea name="message"></textarea>
                                    						<!--SUBMIT--><br>
                                    						<input type="submit" id="send_request" class="btn btn-primary" name="submitc" value="Send request">
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
        $('#call-button').addClass('left');
        if($('#call-button').hasClass('center'))
          $('#call-button').removeClass('center');
      });
      $('#btn-center').click(function(){
        $('#call-button').addClass('left');
        $('#call-button').addClass('center');
      });
      $('#btn-right').click(function(){
        if($('#call-button').hasClass('center'))
          $('#call-button').removeClass('center');
        if($('#call-button').hasClass('left'))
          $('#call-button').removeClass('left');
      });

      $('#button_text').keydown(function(){
        $('#call-button a').html($(this).val());
      });

      $('.colorpicker').on('click',function(){
        $('#call-button a').css('color', $( '#picker4' ).val());
        $('#call-button a').css('background-color', $( '#picker41' ).val());
      });

      $('#wrapper_visible_btn').click(function(){
        var temp = $('#button-visible').val();
        if( temp == 'on' ){
          $('#call-button a').hide();
          $('#button-visible').val('off');
        }
        else if(temp == 'off'){
          $('#call-button a').show();
          $('#button-visible').val('on');
        }
        console.log($('#button-visible').val());
      });

      $('.setting-btn').click(function(){
        $('.tab-btn').click();
      });
      $('.setting-wgt').click(function(){
        $('.tab-wgt').click();
      });

    //Setting for Widget
      $('#wgt-left').click(function(){
        $('#call-widget').addClass('left');
        if($('#call-widget').hasClass('center'))
          $('#call-widget').removeClass('center');
      });
      $('#wgt-center').click(function(){
        $('#call-widget').addClass('left');
        $('#call-widget').addClass('center');
      });
      $('#wgt-right').click(function(){
        if($('#call-widget').hasClass('center'))
          $('#call-widget').removeClass('center');
        if($('#call-widget').hasClass('left'))
          $('#call-widget').removeClass('left');
      });

      $('#above_text').keydown(function(){
        $('#call-widget form .above-text').html($(this).val());
      });

      $('.colorpicker').on('click',function(){
        $('#call-widget form').css('color', $( '#picker5' ).val());
        $('#call-widget form').css('background-color', $( '#picker51' ).val());
        //$('#send_request').css('background-color', $( '#picker5' ).val());
        //$('#send_request').css('color', $( '#picker51' ).val());
      });

      $(document).ready(function(){
        $('#button-visible').val('off');
        console.log($('#button-visible').val());
        $('#call-button a').css('color', $( '#picker4' ).val());
        $('#call-button a').css('background-color', $( '#picker41' ).val());
        $('#call-widget form').css('color', $( '#picker5' ).val());
        $('#call-widget form').css('background-color', $( '#picker51' ).val());
        //$('#send_request').css('background-color', $( '#picker5' ).val());
        //$('#send_request').css('color', $( '#picker51' ).val());
      });
    </script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/iCheck/js/icheck.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/bootstrap-switch/js/bootstrap-switch.js"></script>

    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/card/lib/js/jquery.card.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/js/pages/radio_checkbox.js"></script>
    <!-- end of page level js -->
</body>

</html>