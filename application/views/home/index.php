    <div class= "container-fluid">
        <div class= "container-fluid outer">
            <img src="<?php echo base_url('resources/images/banner.jpg');?>" alt="employer pics"/>
        </div>
        
        <div class= "container">



            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Login to Your Account</h1><br>
                    <form>
                        <input type="text" name="user" placeholder="Username">
                        <input type="password" name="pass" placeholder="Password">
                        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                    </form>
                    
                    <div class="login-help">
                        <a href="#">Register</a> - <a href="#">Forgot Password</a>
                    </div>
                </div>
            </div>
        </div>

        <div class= "col-md-12">
            <!-- NAV START -->
            <div class="col-md-9">


                <!-- Fly-in navbar -->
                <div class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="80" id="nav">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="col-md-3">
                                <a class="navbar-brand" rel="home" href="#">
                                    <img style="max-width:200px; margin-top: -40px;"
                                    src="<?php echo base_url('resources/images/logo.png');?>">
                                </a>

                            </div>
                        </div>
                        <div class=""></div>
                        <!--            SEARCH BOX-->
                        <div class="col-md-3 searchstretch">         
                            <div class="input-group search-bar">
                                <input type="text" class="form-control sharp" placeholder="Search for...">

                                <span class="input-group-btn">
                                    <button class="btn btn-default sharp" type="button">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>

                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav borderbot right">

                                <li class="activated">
                                    <a href="#">
                                        Home<span class="sr-only">(current)</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="<?php echo base_url('home/about');?>">
                                        About Us
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#">Contact Us<span class="sr-only">(current)</span></a>
                                </li>


                                <!-- <li>
                                    <div class="top-big-link">
                                        <a class="btn btn-link-1 launch-modal" href="#" data-target= data-modal-id="modal-login">Login</a>
                                    </div>
                                </li>

                                <li>
                                    <div class="top-big-link">
                                        <a class="btn btn-link-1 launch-modal register" href="#" data-modal-id="modal-register">Register</a>
                                    </div>
                                </li> -->
                                

                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="glyphicon glyphicon-user"></span>
                                            <strong>&nbsp;Kyle&nbsp;</strong>
                                            <span class="glyphicon glyphicon-chevron-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-login">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <p class="text-center">
                                                                <span class="glyphicon glyphicon-user icon-size"></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <p class="text-left">Hi!&nbsp;<strong>Kyle</strong></p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="divider navbar-login-session-bg"></li>
                                            <li><a href="#">My Profile <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">User stats <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                                            <li class="divider"></li>
                                        </ul>
                                    </li>
                                </ul>
                                


                            </ul>



                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container -->
                </div><!--/.navbar -->
                <!-- nav end -->


            </div>



            <div class= "clearfix"></div>

            <br>
            <hr>

            <div class="col-sm-3 col-md-3 box1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Location</h2>
                        <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                    </div>
                    <div class="panel-body">
                        <div class="sidecontent">
                          <ul>
                            <li><a href="location.php">Anywhere</a> <span> - 643 </span></li>

                            <li><a href="location.php">Butuan</a> <span> - 45 </span></li>

                            <li><a href="location.php">Cagayan de Oro City</a> <span> - 31 </span></li>

                            <li><a href="location.php">Dapitan</a> <span> - 1002 </span></li>

                            <li><a href="location.php">Davao</a> <span> - 359 </span></li>

                            <li><a href="location.php">General Santos</a> <span>- 86 </span></li>

                            <li><a href="location.php">Gingoog</a> <span>- 56 </span></li>

                            <li><a href="location.php">Iligan</a> <span>- 1516 </span></li>

                            <li><a href="location.php">Malaybalay</a> <span>- 33 </span></li>

                            <li><a href="location.php">Marawi</a> <span>- 89 </span></li>

                            <li><a href="location.php">Ozamis</a> <span>- 23 </span></li>

                            <li><a href="location.php">Pagadian</a> <span>- 155 </span></li>

                            <li><a href="location.php">Zamboanga</a> <span>- 19 </span></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Category</h2>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">
                    <div class="sidecontent">
                        <ul>
                            <li><a href="category.php">Accounting/Finance</a> <span> - 643 </span></li>

                            <li><a href="category.php">Computer/IT</a> <span> - 124 </span></li>

                            <li><a href="category.php">Call Center/BPO</a> <span>- 4444 </span></li>

                            <li><a href="category.php">Management</a> <span> -20 </span></li>

                            <li><a href="category.php">Admin/HR/Secretarial</a> <span>- 124 </span></li>

                            <li> <a href="category.php">Engineering</a> <span>- 19 </span></li>

                            <li><a href="category.php">Sales/Marketing</a> <span> - 2 </span></li>

                            <li> <a href="category.php">Building/Construction</a> <span> - 88 </span></li>

                            <li><a href="category.php">Services</a> <span> - 99 </span></li>

                            <li><a href="category.php">Hotel/Restaurant</a> <span> - 77 </span></li>

                            <li><a href="category.php">Tourism</a> <span> - 27 </span></li>

                            <li> <a href="category.php">Education/Training</a> <span> - 1002 </span></li>

                            <li><a href="category.php">Healthcare</a> <span> - 31 </span></li>

                            <li><a href="category.php">Other</a> <span> - 45 </span></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class= "col-sm-9 col-md-9 box2">

            <h1>Latest Opportunities</h1>

            <div class="clearfix"></div>

            <hr/>

            <div>


                <ul class="media-list">
                    <li class="media">
                        <div class="media-body">
                            <a href="main.php" ><h4 class="media-heading sliding-u-l-r-l">Accounts Receivable Analyst</h4>
                                <!-- <p>
                                    <span class="label label-default">FREELANCE</span>
                                </p> -->
                                <p class="media-heading">
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                    Cagayan de Oro City &nbsp;&nbsp;&nbsp;
                                    <span class="glyphicon glyphicon-calendar"></span>
                                    11/11/16
                                </p>
                            </a>

                            <input type="checkbox" class="read-more-state" id="post-2" />

                            <p class="text read-more-wrap">
                                ORO GRANDE DISTRIBUTORS, INC. (OGDI) is the exclusive distributor of Procter and Gamble Philippines, Inc., 
                                one of the world's brand-building leader companies of consumer household products. 
                                OGDI was established in 2002 and operates its business in Northern Mindanao and CARAGA region.
                                OGDI is a subsidiary of TAO CORPORATION, a holding company focused on supply chain and services and listed in the Philippines' top 500 corporations in its industry, 
                                making us one of the 

                                <span class="read-more-target">
                                    country's largest companies with its core businesses: Health & Wellness, Distribution and Marketing, Resources and Financial 
                                    Lorem Ipsum Dolor Churva Ek Ek Lorem Ipsum Dolor Churva... 
                                </span>
                            </p>

                            <label for="post-2" class="read-more-trigger"></label>

                        </div>
                    </li>
                </ul>
            </div>

            <hr/>

            <div>
                <ul class="media-list">
                    <li class="media">
                        <div class="media-body">
                            <a href="main.php" ><h4 class="media-heading sliding-u-l-r-l">Accounts Receivable Analyst</h4>
                                <!-- <p>
                                    <span class="label label-default">FREELANCE</span>
                                </p> -->
                                <p class="media-heading">
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                    Cagayan de Oro City &nbsp;&nbsp;&nbsp;
                                    <span class="glyphicon glyphicon-calendar"></span>
                                    11/11/16
                                </p>
                            </a>

                            <input type="checkbox" class="read-more-state" id="post-2" />

                            <p class="text read-more-wrap">
                                ORO GRANDE DISTRIBUTORS, INC. (OGDI) is the exclusive distributor of Procter and Gamble Philippines, Inc., 
                                one of the world's brand-building leader companies of consumer household products. 
                                OGDI was established in 2002 and operates its business in Northern Mindanao and CARAGA region.
                                OGDI is a subsidiary of TAO CORPORATION, a holding company focused on supply chain and services and listed in the Philippines' top 500 corporations in its industry, 
                                making us one of the 

                                <span class="read-more-target">
                                    country's largest companies with its core businesses: Health & Wellness, Distribution and Marketing, Resources and Financial 
                                    Lorem Ipsum Dolor Churva Ek Ek Lorem Ipsum Dolor Churva... 
                                </span>
                            </p>

                            <label for="post-2" class="read-more-trigger"></label>

                        </div>
                    </li>
                </ul>
            </div>
            <hr/>

            <div>
                <ul class="media-list">
                    <li class="media">
                        <div class="media-body">
                            <a href="main.php" ><h4 class="media-heading sliding-u-l-r-l">Accounts Receivable Analyst</h4>
                                <!-- <p>
                                    <span class="label label-default">FREELANCE</span>
                                </p> -->
                                <p class="media-heading">
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                    Cagayan de Oro City &nbsp;&nbsp;&nbsp;
                                    <span class="glyphicon glyphicon-calendar"></span>
                                    11/11/16
                                </p>
                            </a>

                            <input type="checkbox" class="read-more-state" id="post-2" />

                            <p class="text read-more-wrap">
                                ORO GRANDE DISTRIBUTORS, INC. (OGDI) is the exclusive distributor of Procter and Gamble Philippines, Inc., 
                                one of the world's brand-building leader companies of consumer household products. 
                                OGDI was established in 2002 and operates its business in Northern Mindanao and CARAGA region.
                                OGDI is a subsidiary of TAO CORPORATION, a holding company focused on supply chain and services and listed in the Philippines' top 500 corporations in its industry, 
                                making us one of the 

                                <span class="read-more-target">
                                    country's largest companies with its core businesses: Health & Wellness, Distribution and Marketing, Resources and Financial 
                                    Lorem Ipsum Dolor Churva Ek Ek Lorem Ipsum Dolor Churva... 
                                </span>
                            </p>

                            <label for="post-2" class="read-more-trigger"></label>

                        </div>
                    </li>
                </ul>
            </div>
            <br/><br/>


            <div class="row">
                <div class="col-md-9">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a aria-label="Previous" href="#"><span aria-hidden="true">&laquo;</span></a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#">6</a>
                            </li>
                            <li>
                                <a href="#">7</a>
                            </li>
                            <li>
                                <a href="#">8</a>
                            </li>
                            <li>
                                <a href="#">9</a>
                            </li>
                            <li>
                                <a aria-label="Next" href="#">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

    

</div>
</div>
</div>

<div class="clearfix"></div>

