<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Internhub | Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />


    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="<?php echo base_url('resources/images/sidebar-5.jpg');?>">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="sidebar-wrapper">
        <div class="logo logoadmin">
          <a class="admin-brand" rel="home" href="#">
            <img src="<?php echo base_url('resources/images/logo.png');?>">
          </a>
        </div>

        <ul class="nav">
          <li class="active">
            <a href="<?php echo base_url('home/admin/dashboard');?>">
              <i class="fa fa-tachometer"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url('home/admin/employer');?>">
              <i class="pe-7s-note2"></i>
              <p>Employer</p>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url('home/admin/chairman');?>">
              <i class="pe-7s-note2"></i>
              <p>Chairman</p>
            </a>
          </li>


          <li>
            <a href="<?php echo base_url('home/admin/categories');?>">
              <i class="pe-7s-note2"></i>
              <p>Categories</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('home/admin/location');?>">
              <i class="pe-7s-note2"></i>
              <p>Locations</p>
            </a>
          </li>

          


        </ul>
      </div>
</div>

<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Dashboard</a>
            </div>
            <div class="collapse navbar-collapse">
                    <!-- <ul class="nav navbar-nav navbar-left">
                        <li>
            
                                <p class="hidden-lg hidden-md">Dashboard
                            
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
                                    <p class="hidden-lg hidden-md">
                                        5 Notifications
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>
                -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                     <a href="">
                         <p>Notifications &nbsp; &nbsp;<span class="badge">7</span></p>
                     </a>
                 </li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <p>
                      Dropdown
                      <b class="caret"></b>
                  </p>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <p>Log out</p>
            </a>
        </li>
        <li class="separator hidden-lg hidden-md"></li>
    </ul>
</div>
</div>
</nav>


<div class="content">
    <div class="container-fluid">
        <div class="row">
        

            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Users Behavior</h4>
                        <p class="category">24 Hours performance</p>
                    </div>
                    <div class="content">
                        <div id="chartHours" class="ct-chart"></div>
                        <div class="footer">
                           
                            <hr>
                            <div class="stats">
                                <i class="fa fa-history"></i> Updated 3 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">2014 Sales</h4>
                        <p class="category">All products including Taxes</p>
                    </div>
                    <div class="content">
                        <div id="chartActivity" class="ct-chart"></div>

                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> Tesla Model S
                                <i class="fa fa-circle text-danger"></i> BMW 5 Series
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-check"></i> Data information certified
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Tasks</h4>
                        <p class="category">Backend development</p>
                    </div>
                    <div class="content">
                        <div class="table-full-width">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                            </label>
                                        </td>
                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                            </label>
                                        </td>
                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                            </label>
                                        </td>
                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                            </label>
                                        </td>
                                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                            </label>
                                        </td>
                                        <td>Read "Following makes Medium better"</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                            </label>
                                        </td>
                                        <td>Unfollow 5 enemies from twitter</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="footer">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-history"></i> Updated 3 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


