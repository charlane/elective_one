   <div class= "container-fluid">
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

                        <li class="">
                            <a href="<?php echo base_url('home/index');?>">
                                Home<span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="activated">
                            <a href="#">
                                About Us
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#">Contact Us<span class="sr-only">(current)</span></a>
                        </li>

<!-- 
                                <li>
                                    <div class="top-big-link">
                                        <a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-login">Login</a>
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
                                                            <p class="text-left">
                                                                <a href="#" class="btn btn-primary btn-block btn-sm">Profile</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="divider navbar-login-session-bg"></li>
                                            <li><a href="#">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">User stats <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                                        </ul>
                                    </li>
                                </ul>



                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container -->
                </div><!--/.navbar -->
                <!-- nav end -->

                <div class= "clearfix"></div>

                <br>
                
                <div class="aboutbody">

                    <div class="row">
                        <div class="col-lg-12">
                            <br/>
                            <h2 class="page-header effect-underline">About <b>Internhub</b>
                                <small>It's Nice to Meet You!</small>
                            </h2>
                            <h3>Internhub is an online student internship finder which aims to make internship searching more efficient to the students
                                who are seeking for internship programs, specifically in Cagayan de Oro City. We designed our site for students who are looking for the best of
                                the best companies and firms, and for students who are looking for their dream job.

                            </h3>
                        </div>
                    </div>

                    <br/>

                    <!-- Team Members Row -->
                    <div class="row">

                        <div class="col-lg-4 trio"><center>
                            <img class="about" src="<?php echo base_url('resources/images/hands.png');?>"/>
                            <h2 class="page-header effect-underline">Our  <b>Mission</b></h2>
                            <h3>
                                We Venture to make internship hunting more efficient and convenient.  
                            </h3></center>
                        </div>

                        <div class="col-lg-4 trio"><center>
                            <img class="about" src="<?php echo base_url('resources/images/people.png');?>"/>
                            <h2 class="page-header effect-underline">Our <b>Vision</b></h2>
                            <h3>
                                To provide student internship finders an access to bigger and better opportunities for their desired careers.
                            </h3></center>
                        </div>

                        <div class="col-lg-4 trio"><center>
                            <img class="about" src="<?php echo base_url('resources/images/news.png');?>"/>
                            <h2 class="page-header effect-underline">Our <b>Motto</b></h2>
                            <h3>
                                Making things easier.
                            </h3></center>
                        </div>

                        <div class="col-lg-12">
                            <h2 class="page-header effect-underline">Our Official <b>Logo</b></h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-6">
                            <h3>
                                <a href = "<?php echo base_url('home/index');?>">
                                    <img alt="logo" class="about" style="max-width:500px; margin-top: -40px;" src="<?php echo base_url('resources/images/logo.png');?>">
                                </a>
                            </h3>
                        </div>
                        <div class="outer">
                            <div class="middle">
                                <div class="inner">
                                    <div class="col-lg-6 fixed-bottom">
                                        <hr/>
                                        <h2 class="text-center effect-underline"><b>FIND YOUR OPPORTUNITY!</b></h2>
                                        <hr/>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>