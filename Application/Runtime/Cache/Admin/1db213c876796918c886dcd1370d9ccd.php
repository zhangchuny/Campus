<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>AbsoluteAdmin - A Responsive Boostrap 3 Admin Dashboard</title>
  <meta name="keywords" content="Bootstrap 3 Admin Dashboard Template Theme" />
  <meta name="description" content="AdminDesigns - Bootstrap 3 Admin Dashboard Theme">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
  <!-- <link rel='stylesheet' type='text/css' href='http://fonts.useso.com/css?family=Open+Sans:300,400,600,700'> -->

  <!-- Plugin CSS --> 
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/vendor/plugins/magnific/magnific-popup.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/skin/default_skin/css/theme.css">


  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/admin-tools/admin-forms/css/admin-forms.css">

  
  <!-- Glyphicons Pro CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/glyphicons-pro/glyphicons-pro.css">

  <!-- Icomoon CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/icomoon/icomoon.css">

  <!-- Iconsweets CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/iconsweets/iconsweets.css">

  <!-- Octicons CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/octicons/octicons.css">

  <!-- Stateface CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/stateface/stateface.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/Campus/Public/Admin/assets/img/favicon.ico">

 <style type="text/css">

/* 分页样式*/
.prev{
     border: 1px solid #ddd;
      padding: 10px 20px;
      border-top-left-radius: 6px;
      border-bottom-left-radius: 6px;

}

.next{
     border: 1px solid #ddd;
      padding: 10px 20px;
      border-top-right-radius: 6px;
      border-bottom-right-radius: 6px;

}

.num{
    border: 1px solid #ddd;
    padding: 10px 20px;
    margin-left: 0px
}

.current{
    border: 1px solid #ddd;
    padding: 10px 20px;
    margin-right: 10px;
    margin-left: 10px;
  
}

.paging a{
     font-size: 18px;

}

.paging{
    margin-left:250px; 
}

 </style>
  <!-- Summernote CSS  -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/vendor/plugins/summernote/summernote.css">

</head>

<body class="messages-page">

 

  <!-- Start: Main -->
  <div id="main"> 

    <!-- Start: Header -->
       <header class="navbar navbar-fixed-top navbar-shadow">
      <div class="navbar-branding">
        <a class="navbar-brand" href="dashboard.html">
          <b>Absolute</b>Admin
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown menu-merge hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
            <span class="caret caret-tp"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="hidden-xs">
          <a class="request-fullscreen toggle-active" href="#">
            <span class="ad ad-screen-full fs18"></span>
          </a>
        </li>
      </ul>
      <form class="navbar-form navbar-left navbar-search alt" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search..." value="Search...">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
				<li>
					<div class="navbar-btn btn-group">
	          <a href="#" class="topbar-menu-toggle btn btn-sm" data-toggle="button">
		          <span class="ad ad-wand"></span>
	          </a>
	        </div>
				</li>
        <li class="dropdown menu-merge">
          <div class="navbar-btn btn-group">
            <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
              <span class="fa fa-bell-o fs14 va-m"></span>
              <span class="badge badge-danger">9</span>
            </button>
            <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">  
              <div class="panel mbn">
                  <div class="panel-menu">
                     <span class="panel-icon"><i class="fa fa-clock-o"></i></span>
                     <span class="panel-title fw600"> Recent Activity</span>
                     <button class="btn btn-default light btn-xs pull-right" type="button"><i class="fa fa-refresh"></i></button>
                  </div>
                  <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">
                      <ol class="timeline-list">
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Michael</b> Added to his store:
                            <a href="#">Ipod</a>
                          </div>
                          <div class="timeline-date">1:25am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Sara</b> Added his store:
                            <a href="#">Notebook</a>
                          </div>
                          <div class="timeline-date">3:05am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                          </div>
                          <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Apple</a>
                          </div>
                          <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                          </div>
                          <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Apple</a>
                          </div>
                          <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Michael</b> Added his store:
                            <a href="#">Ipod</a>
                          </div>
                          <div class="timeline-date">8:25am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-system">
                            <span class="fa fa-fire"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                          </div>
                          <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Sara</b> Added to his store:
                            <a href="#">Notebook</a>
                          </div>
                          <div class="timeline-date">3:05am</div>
                        </li>
                      </ol>
       
                  </div>
                  <div class="panel-footer text-center p7">
                    <a href="#" class="link-unstyled"> View All </a>
                  </div>
              </div>
            </div>
          </div>
        </li>
        <li class="dropdown menu-merge">
          <div class="navbar-btn btn-group">
            <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
              <span class="ad ad-radio-tower fs14 va-m"></span>
              <span class="badge">5</span>
            </button>
            <div class="dropdown-menu dropdown-persist w375 animated animated-shorter fadeIn" role="menu">  
              <div class="panel mbn">
                  <div class="panel-menu">
                    <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                      <a href="#nav-tab1" data-toggle="tab" class="btn btn-default btn-sm active">Notifications</a>
                      <a href="#nav-tab2" data-toggle="tab" class="btn btn-default btn-sm br-l-n br-r-n">Messages</a>
                      <a href="#nav-tab3" data-toggle="tab" class="btn btn-default btn-sm">Activity</a>
                    </div>
                  </div>
                  <div class="panel-body panel-scroller scroller-navbar pn">
                    <div class="tab-content br-n pn">
                      <div id="nav-tab1" class="tab-pane alerts-widget active" role="tabpanel">
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-user text-info"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Registration
                              <small class="text-muted"></small>
                            </h5> Tyler Durden - 16 hours ago
                            
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Approve?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-remove"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-shopping-cart text-success"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Order
                              <small class="text-muted"></small>
                            </h5> <a href="#">Apple Ipod</a> - 4 hours ago
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Confirm?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-print"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-comment text-system"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Comment
                              <small class="text-muted"></small>
                            </h5> Mike - I loved your article!                            
                          </div>
                          <div class="media-right">
                            <div class="media-response text-right"> Moderate?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-pencil"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-star text-warning"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Review
                              <small class="text-muted"></small>
                            </h5> Sammy Hilton - 4 hours ago
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Approve?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-remove"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-user text-info"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Registration
                              <small class="text-muted"></small>
                            </h5> Michael Sober - 7 hours ago
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Approve?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-remove"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-usd text-alert"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Invoice
                              <small class="text-muted"></small>
                            </h5> <a href="#">Apple Ipod</a> - 4 hours ago
                            
                          </div>
                          <div class="media-right">
                            <div class="media-response single">#518358</div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-shopping-cart text-success"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Order
                              <small class="text-muted"></small>
                            </h5> <a href="#">Apple Ipod</a> - 4 hours ago
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Confirm?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-print"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="nav-tab2" class="tab-pane chat-widget" role="tabpanel">
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/3.jpg">
                            </a>
                          </div>
                          <div class="media-body">
                            <span class="media-status online"></span>
                            <h5 class="media-heading">Courtney Faught
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-body">
                            <span class="media-status offline"></span>
                            <h5 class="media-heading">Joe Gibbons
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                          </div>
                          <div class="media-right">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/1.jpg">
                            </a>
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/2.jpg">
                            </a>
                          </div>
                          <div class="media-body">
                            <span class="media-status online"></span>
                            <h5 class="media-heading">Courtney Faught
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metuscommodo.
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-body">
                            <span class="media-status offline"></span>
                            <h5 class="media-heading">Joe Gibbons
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in Nulla vel metus scelerisque antecommodo.
                          </div>
                          <div class="media-right">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/1.jpg">
                            </a>
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/2.jpg">
                            </a>
                          </div>
                          <div class="media-body">
                            <span class="media-status online"></span>
                            <h5 class="media-heading">Courtney Faught
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque soltudino.
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-body">
                            <span class="media-status offline"></span>
                            <h5 class="media-heading">Joe Gibbons
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                          </div>
                          <div class="media-right">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/1.jpg">
                            </a>
                          </div>
                        </div>
                      </div>
                      <div id="nav-tab3" class="tab-pane scroller-nm" role="tabpanel">
                        <ul class="media-list" role="menu">
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading mv5">Article
                                <small> - 08/16/22</small>
                              </h5>
                              Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/4.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading mv5">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading mv5">Article
                                <small> - 08/16/22</small>
                              </h5>
                              Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                        </ul>
                        <table class="table table-striped hidden">
                        <thead>
                          <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Sussy</td>
                            <td>Watcher</td>
                            <td>@thehawk</td>
                          </tr>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Sussy</td>
                            <td>Watcher</td>
                            <td>@thehawk</td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Sussy</td>
                            <td>Watcher</td>
                            <td>@thehawk</td>
                          </tr>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer text-center p7">
                    <a href="#" class="link-unstyled"> View All </a>
                  </div>
              </div>
            </div>
          </div>
        </li>
				<li class="dropdown menu-merge">
					<div class="navbar-btn btn-group">
	          <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
		          <span class="flag-xs flag-us"></span>
		          <!-- <span class="caret"></span> -->
	          </button>
	          <ul class="dropdown-menu pv5 animated animated-short flipInX" role="menu">
	            <li>
	              <a href="javascript:void(0);">
	                <span class="flag-xs flag-in mr10"></span> Hindu </a>
	            </li>
	            <li>
	              <a href="javascript:void(0);">
	                <span class="flag-xs flag-tr mr10"></span> Turkish </a>
	            </li>
	            <li>
	              <a href="javascript:void(0);">
	                <span class="flag-xs flag-es mr10"></span> Spanish </a>
	            </li>
	          </ul>
	        </div>
				</li>
        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle"></i>
        </li>
        <li class="dropdown menu-merge">
          <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
          	<img src="/Campus/Public/Home/adminphoto/<?php echo (session('apic')); ?>" alt="avatar" class="mw30 br64">
          	<span class="hidden-xs pl15"><?php echo (session('adminname')); ?></span>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w100 " role="menu">
          <!--w250  -->
            <!-- <li class="dropdown-header clearfix">
              <div class="pull-left ml10">
                <select id="user-status">
                  <optgroup label="Current Status:">
                    <option value="1-1">Away</option>
                    <option value="1-2">Offline</option>
                    <option value="1-3" selected="selected">Online</option>
                  </optgroup>
                </select>
              </div>

              <div class="pull-right mr10">
                <select id="user-role">
                  <optgroup label="Logged in As:">
                    <option value="1-1">Client</option>
                    <option value="1-2">Editor</option>
                    <option value="1-3" selected="selected">Admin</option>
                  </optgroup>
                </select>
              </div>
            </li> -->
            <!-- <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-envelope"></span> Messages
                <span class="label label-warning">2</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-user"></span> Friends
                <span class="label label-warning">6</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-bell"></span> Notifications </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-gear"></span> Settings </a>
            </li> -->
            <li class="dropdown-footer">
              <a href="<?php echo ('/Campus/Admin/Index/logout');?>" class="">
              <span class="fa fa-power-off pr5"></span>退出登录</a>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Menu -->
        <ul class="nav sidebar-menu">
          <li class="sidebar-label pt20">首页图片管理</li>
          <li>
            <a href="<?php echo U('Admin/Index/index_gallery');?>">
              <span class="glyphicon glyphicon-picture"></span>
              <span class="sidebar-title">轮播图片管理</span>
              <span class="sidebar-title-tray">
                <!-- <span class="label label-xs bg-primary">New</span> -->
              </span>
            </a>
          </li>
          <!-- <li>
            <a href="../README/index.html">
              <span class=" icon-youtube4"></span>
              <span class="sidebar-title">Documentation</span>
            </a>
          </li>
          <li class="active">
            <a href="dashboard.html">
              <span class="glyphicon glyphicon-home"></span>
              <span class="sidebar-title">Dashboard</span>
            </a>
          </li> -->

          <li class="sidebar-label pt15">后台数据管理</li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="imoon imoon-wand"></span>
              <span class="sidebar-title">主题推荐数据管理</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <!-- <li>
                <a href="admin_plugins-panels.html">
                  <span class="glyphicon glyphicon-book"></span>主题推荐类型</a>
              </li> -->
              <li>
                <a href="<?php echo U('Admin/Recommend/user_recmd');?>">
                  <span class="glyphicons glyphicons-group"></span>用户推荐</a>
              </li>
              <li>
                <a href="<?php echo U('Admin/Recommend/admin_recmd');?>">
                  <span class="glyphicon glyphicon-user"></span>管理员推荐</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicons glyphicons-cars"></span>
              <span class="sidebar-title">结伴同游数据管理</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <!-- <li>
                <a href="admin_plugins-panels.html">
                  <span class="glyphicon glyphicon-book"></span>主题推荐类型</a>
              </li> -->
              <li>
                <a href="<?php echo U('Admin/User/travel');?>">
                  <span class="glyphicons glyphicons-car"></span>结伴同游</a>
              </li>
             
            </ul>
          </li>

          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicons glyphicons-group"></span>
              <span class="sidebar-title">用户管理</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="<?php echo U('Admin/User/user_info');?>">
                  <span class="glyphicon glyphicon-edit"></span> 用户资料 </a>
              </li>
              <li>
                <a href="<?php echo U('Admin/User/recmd_collect');?>">
                  <span class="fa fa-star-o"></span>用户收藏（主题推荐）</a>
              </li>
              <li>
                <a href="<?php echo U('Admin/User/travel_collect');?>">
                  <span class="fa fa-star"></span>用户收藏（结伴同游） </a>
              </li>
              <!-- <li>
                <a href="<?php echo U('Admin/User/p_letter');?>">
                  <span class="fa fa-desktop"></span>私信</a>
              </li> -->
             <!--  <li>
                <a href="admin_forms-wizard.html">
                  <span class="fa fa-clipboard"></span> Admin Wizard </a>
              </li> -->
            </ul>
          </li>

        </ul>
        <!-- End: Sidebar Menu -->

	      <!-- Start: Sidebar Collapse Button -->
	      <div class="sidebar-toggle-mini">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
	      <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

     
      <!-- Start: Topbar -->
      <header id="topbar" class="alt">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="#"><strong>主题推荐数据管理</strong></a>
            </li>
            <li class="crumb-icon">
                <span class="fa fa-list-alt"></span>
            </li>
           
            <li class="crumb-trail">编辑推荐信息</li>
          </ol>
        </div>
        
      </header>
      <!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">



        <!-- begin: .tray-center -->
        <div class="tray tray-center ">

          <div class="panel"  style="width:700px;margin:0px auto">

            <!-- message toolbar header -->
            <div class="panel-menu br-n br-b">
                  <div class="row">
                    <div class="hidden-xs hidden-sm col-md-3">
                      <div class="btn-group">
                      <a href="<?php echo U('admin_recmd');?>" title="返回" >
                        <button type="button" class="btn btn-default light">
                          <i class="glyphicons glyphicons-unshare"></i>
                        </button></a>

                      </div>
                    </div>
                    <div class="col-xs-12 col-md-9 text-right">
                      <button type="button" class="btn btn-danger light visible-xs-inline-block mr10">Compose</button>
                      
                      <div class="btn-group mr10">
                        <!-- <button type="button" class="btn btn-default light hidden-xs">
                          <i class="fa fa-star"></i>
                        </button>
                        <button type="button" class="btn btn-default light hidden-xs">
                          <i class="fa fa-calendar"></i>
                        </button>
                        <button type="button" class="btn btn-default light">
                          <i class="fa fa-trash"></i>
                        </button> -->
                      </div>
                      <div class="btn-group mr10">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default light dropdown-toggle ph8" data-toggle="dropdown">
                            <span class="fa fa-tags"></span>
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                              <a href="#">Work</a>
                            </li>
                            <li>
                              <a href="#">Important</a>
                            </li>
                            <li>
                              <a href="#">Favorites</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">
                                <span class="fa fa-plus pr5"></span> Create New</a>
                            </li>
                          </ul>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default light dropdown-toggle ph8 br-tp-left" data-toggle="dropdown">
                            <span class="fa fa-folder"></span>
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                              <a href="#">Work</a>
                            </li>
                            <li>
                              <a href="#">Important</a>
                            </li>
                            <li>
                              <a href="#">Favorites</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">
                                <span class="fa fa-plus pr5"></span> Create New</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-default light">
                          <i class="fa fa-chevron-left"></i>
                        </button>
                        <button type="button" class="btn btn-default light">
                          <i class="fa fa-chevron-right"></i>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>

            <!-- message view -->
            <div class="message-view">

              <!-- message meta info -->
              <div class="message-meta">
                <span class="pull-right text-muted"><?php echo ($recmd["creatime"]); ?></span>

    <form action="<?php echo U('Admin/Recommend/editTuijian');?>" method="post" id="editForm" enctype="multipart/form-data">
                <h3 class="subject">
                <input type="hidden" name="id" id="inputStandard" class="form-control" required value="<?php echo ($recmd["id"]); ?>"  />
                <input type="hidden" name="pic" id="inputStandard" class="form-control" required value="<?php echo ($recmd["pic"]); ?>"  />
                 <input type="text" name="name" id="inputStandard" class="form-control"  placeholder="推荐标题" required value="<?php echo ($recmd["name"]); ?>"  /></h3>

                <hr class="mt20 mb15">
              </div>

              <!-- message header -->
              <div class="message-header">
                <img src="/Campus/Public/Home/adminphoto/<?php echo ($recmd["apic"]); ?>" class="img-responsive mw40 pull-left mr20">
                <div class="pull-right mt5 clearfix">
                <!-- <?php if($recmd["ischeck"] == '0'): ?><span class="label bg-warning mr10">未审核</span>
                        <?php else: ?>
                        <span class="label bg-success">已审核</span><?php endif; ?> -->
                </div>
                <h4 class="mt15 mb5">From:<?php echo ($recmd["adminname"]); ?></h4>
                
              </div>

              <hr class="mb15 mt15">

              <!-- message body -->
              <div class="message-body" style="margin-top: 20px">
              <strong><h4>推荐类型：</h4></strong>
               <select name="rtype_rid" class="form-control">
                    <option value="<?php echo ($recmd["rtype_rid"]); ?>"><?php echo ($recmd["rname"]); ?></option>
                    <option value="1">美食</option>
                    <option value="2">人文</option>
                    <option value="3">购物</option>  
                    <!-- <option value="4">游园观光</option> -->
                    <option value="5">娱乐休闲</option>
                    <option value="6">沙滩海岛</option>
                        </select>
                <p><strong><h4>所在地：</h4></strong><input type="text" name="place" id="inputStandard" class="form-control"  placeholder="所在地" required value="<?php echo ($recmd["place"]); ?>"/></p>
                <p><strong><h4>简介：</h4></strong><textarea name="cause" class="form-control"><?php echo ($recmd["cause"]); ?></textarea></p>
               
              </div>

              <hr class="mb15 mt15">

              <!-- message footer -->
              <div class="message-footer">
                <h4 class="mb25">
                  <span class="glyphicon glyphicon-paperclip mr10"></span>附带图片                 
                </h4>
                <input type="file" name="pic" class="form-control" style="width: 200px;" title="主题图片" style="margin-top: 30px;margin-bottom: 30px" />

                <div class="attachments " style="margin-top: 30px">
                  <img src="/Campus/Public/Home/uploads/recmdphoto/<?php echo ($recmd["pic"]); ?>" class="mw140 mr15">
                   <input type="submit" value="修改" class="btn btn-success light" style="float: right; margin-top: 65px; margin-right: 10px;" />
                </div>
               </form>


              </div>


            </div>

           
          </div>

        </div>
        <!-- end: .tray-center-->

      </section>
      <!-- End: Content -->

    </section>

   

  </div>
  <!-- End: Main -->

 

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="/Campus/Public/Admin/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="/Campus/Public/Admin/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- Summernote Plugin -->
  <script src="/Campus/Public/Admin/vendor/plugins/summernote/summernote.min.js"></script>

  <!-- Theme Javascript -->
  <script src="/Campus/Public/Admin/assets/js/utility/utility.js"></script>
  <script src="/Campus/Public/Admin/assets/js/demo/demo.js"></script>
  <script src="/Campus/Public/Admin/assets/js/main.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS    
    Demo.init();

    // Init Summernote
    $('.summernote').summernote({
      height: 290, //set editable area's height
      focus: false, //set focus editable area after Initialize summernote
      oninit: function() {},
      onChange: function(contents, $editable) {},
    });

  });
  </script>
  <!-- END: PAGE SCRIPTS -->

</body>

</html>