<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
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
    <link href="<?PHP echo base_url(); ?>asset/template/vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="<?PHP echo base_url(); ?>asset/template/css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="<?PHP echo base_url(); ?>asset/template/vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/vendors/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/css/pages/only_dashboard.css" />
    <!--end of page level css-->
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
                        <li class="active">
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
                        <li>
                            <a href="<?PHP echo base_url(); ?>settings">
                                <i class="livicon" data-name="gears" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
                                <span class="title">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?PHP echo base_url(); ?>integration">
                                <i class="livicon" data-name="connect" data-size="18" data-c="#01bc8c" data-hc="#01bc8c" data-loop="true"></i>
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
            <div class="alert alert-success alert-dismissable margin5" style="display: none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Success:</strong> You have successfully logged in.
            </div>
            <!-- Main content -->
            <section class="content-header">
                <h1>Welcome Shopify Manager!</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="14" data-color="#333" data-hovercolor="#333"></i> Dashboard
                        </a>
                    </li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="lightbluebg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 text-right">
                                            <span>Call Requests Today</span>
                                            <div class="number" id="myTargetElement1"></div>
                                        </div>
                                        <i class="livicon  pull-right" data-name="phone" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Yesterday</small>
                                            <h4 id="myTargetElement1.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">This Week</small>
                                            <h4 id="myTargetElement1.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="redbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Today's Missing Calls</span>
                                            <div class="number" id="myTargetElement2"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="eye-close" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Yesterday</small>
                                            <h4 id="myTargetElement2.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">This Week</small>
                                            <h4 id="myTargetElement2.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="goldbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Monthly Requests</span>
                                            <div class="number" id="myTargetElement3"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="arrow-up" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Usage</small>
                                            <h4 id="myTargetElement3.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Left</small>
                                            <h4 id="myTargetElement3.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="palebluecolorbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Widget Status</span>
                                        </div>
                                        <div class="square_box col-xs-7 pull-left">
                                            <h3 style="font-weight: bold;">Active</h3>
                                        </div>
                                        <i class="livicon pull-right" data-name="pin-on" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Updated</small>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <h4 id="">3/20/2018</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--/row-->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="panel panel-success panel-border">
                            <div class="panel-heading  border-light">
                                <h4 class="panel-title">
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Calendar
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div id='external-events'></div>
                                <div id="calendar"></div>
                                <div class="box-footer pad-5" style="display: none;">
                                    <a href="#" class="btn btn-success btn-block createevent_btn" data-toggle="modal" data-target="#myModal">Create event
                                    </a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <i class="fa fa-plus" style="margin-top: 8px;"></i> Create Event
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="input-group">
                                                    <input type="text" id="new-event" class="form-control" placeholder="Event">
                                                    <div class="input-group-btn">
                                                        <button type="button" id="color-chooser-btn" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                            Type
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" id="color-chooser">
                                                            <li>
                                                                <a class="palette-primary" href="#">Primary</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-success" href="#">Success</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-info" href="#">Info</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-warning" href="#">warning</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-danger" href="#">Danger</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-default" href="#">Default</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">
                                                    Close
                                                    <i class="fa fa-times" style="margin-top: 4px;"></i>
                                                </button>
                                                <button type="button" class="btn btn-success pull-left" id="add-new-event" data-dismiss="modal">
                                                    <i class="fa fa-plus" style="margin-top: 5px;"></i> Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- To do list -->
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="panel panel-primary todolist">
                            <div class="panel-heading border-light">
                                <h4 class="panel-title">
                                    <i class="livicon" data-name="medal" data-size="18" data-color="white" data-hc="white" data-l="true"></i> Today's Call Requests
                                </h4>
                            </div>
                            <div class="panel-body nopadmar">
                                <form class="row list_of_items">
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck checkbox-custom">
                                                <input type="checkbox" class="striked large" />
                                            </div>
                                            <div class="todotext todoitem">Meeting with Store Owner, Simon D : 123456789</div>
                                            <span class="label label-default">2018-03-15</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Team Out, Simon D : 123456789</div>
                                            <span class="label label-default">2018-03-15</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Review On Sales, Simon D : 123456789</div>
                                            <span class="label label-default">2018-03-15</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Meeting with Client, Simon D : 123456789</div>
                                            <span class="label label-default">2018-03-15</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Analysis on Views, Simon D : 123456789</div>
                                            <span class="label label-default">2018-03-15</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Seminar on Market, Simon D : 123456789</div>
                                            <span class="label label-default">2018-03-15</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Business Review, Simon D : 123456789</div>
                                            <span class="label label-default">2018-03-15</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Purchase Equipment, Simon D : 123456789</div>
                                            <span class="label label-default">2018-03-15</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Meeting with CEO, Simon D : 123456789</div>
                                            <span class="label label-default">2018-03-15</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Takeover Leads, Simon D : 123456789</div>
                                            <span class="label label-default">2018-03-15</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                <div class="todolist_list adds" style="display: none;">
                                    <form role="form" id="main_input_box" class="form-inline">
                                        <div class="form-group">
                                            <label class="sr-only" for="custom_textbox">Add Task</label>
                                            <input id="custom_textbox" name="Item" type="text" required placeholder="Add list item here" class="form-control" />
                                        </div>
                                        <div class="form-group is-empty date_pick">
                                            <label class="sr-only" for="task_deadline">Datepicker</label>
                                            <input class="form-control datepicker" placeholder='Dead line' id="task_deadline" data-date-format="YYYY/MM/DD" required="required" name="task_deadline" type="text">
                                        </div>
                                        <input type="submit" value="Add Task" class="btn btn-primary add_button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row ">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="panel panel-border">
                            <div class="panel-heading">
                                <h4 class="panel-title pull-left visitor">
                                    <i class="livicon" data-name="map" data-size="16" data-loop="true" data-c="#515763" data-hc="#515763"></i> Visitors Map
                                </h4>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="livicon" data-name="settings" data-size="16" data-loop="true" data-c="#515763" data-hc="#515763"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a class="panel-collapse collapses" href="#">
                                                <i class="fa fa-angle-up"></i>
                                                <span>Collapse</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="panel-refresh" href="#">
                                                <i class="fa fa-refresh"></i>
                                                <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="panel-config" href="#panel-config" data-toggle="modal">
                                                <i class="fa fa-wrench"></i>
                                                <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="panel-expand" href="#">
                                                <i class="fa fa-expand"></i>
                                                <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body nopadmar">
                                <div id="world-map-markers" style="width:100%; height:300px;"></div>
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
        <!-- EASY PIE CHART JS -->
        <script src="<?PHP echo base_url(); ?>asset/template/vendors/jquery.easy-pie-chart/js/easypiechart.min.js"></script>
        <script src="<?PHP echo base_url(); ?>asset/template/vendors/jquery.easy-pie-chart/js/jquery.easypiechart.min.js"></script>
        <script src="<?PHP echo base_url(); ?>asset/template/js/jquery.easingpie.js"></script>
        <!--end easy pie chart -->
        <!--for calendar-->
        <script src="<?PHP echo base_url(); ?>asset/template/vendors/moment/js/moment.min.js" type="text/javascript"></script>
        <script src="<?PHP echo base_url(); ?>asset/template/vendors/fullcalendar/js/fullcalendar.min.js" type="text/javascript"></script>
        <!--   Realtime Server Load  -->
        <script src="<?PHP echo base_url(); ?>asset/template/vendors/flotchart/js/jquery.flot.js" type="text/javascript"></script>
        <script src="<?PHP echo base_url(); ?>asset/template/vendors/flotchart/js/jquery.flot.resize.js" type="text/javascript"></script>
        <!--Sparkline Chart-->
        <script src="<?PHP echo base_url(); ?>asset/template/vendors/sparklinecharts/jquery.sparkline.js"></script>
        <!-- Back to Top-->
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/countUp.js/js/countUp.js"></script>
        <!--   maps -->
        <script src="<?PHP echo base_url(); ?>asset/template/vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?PHP echo base_url(); ?>asset/template/vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
        <script src="<?PHP echo base_url(); ?>asset/template/vendors/chartjs/Chart.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        <!--  todolist-->
        <script src="<?PHP echo base_url(); ?>asset/template/js/pages/todolist.js"></script>
        <script src="<?PHP echo base_url(); ?>asset/template/js/pages/dashboard.js" type="text/javascript"></script>
        <!-- end of page level js -->
    </body>

</html>
