   <div class= "container-fluid">
    <div class= "container">

      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            
            <div class="col-md-12">

              <div class="form">

                <ul class="tab-group">
                  <li class="tab active"><a href="#login">Log In</a></li>
                  <li class="tab"><a href="#signup">Register</a></li>
              </ul>

              <div class="tab-content">


                  <div id="login">   
                    <form action="/" method="post">
                      <div class="field-wrap">
                        <input type="username" placeholder="Username/Email Address"/>
                    </div>
                    <div class="field-wrap">
                        <input type="password" placeholder="Password"/>
                    </div>

                    <p class="forgot"><a href="#">Forgot Password?</a></p>

                    <button class="button button-block"/>Log In</button>
                </form>
            </div>

            <div id="signup">
                <form action="/" method="post">
                  
                  <div class="field-wrap">
                    <input type="text" placeholder="Company Name"/>
                </div>

                <div class="field-wrap">
                    <input type="text" placeholder="Username"/>
                </div>

                              <!-- <div class="field-wrap">
                                <div class="col-md-12 genderbox">
                                  <div class="col-md-4 genderlabel"><p>Gender:</p></div>
                                  <div class="genderr"> 

                                    <form action="">
                                      <div class="col-md-4"><input type="radio" name="gender" value="male"> Male </div>
                                      <div class="col-md-4"><input type="radio" name="gender" value="female"> Female </div>
                                    </form>
                                  </div> 
                                </div>
                            </div> -->
                            <div class="field-wrap">
                                <span class="help-block" id="error"></span> 
                                <textarea class="" name="companyDesc" id="description" placeholder="Company Description*" rows="3"></textarea>
                            </div> 
                            <div class="field-wrap">
                                <input type="email" placeholder="Email Address"/>
                            </div>

                            <div class="field-wrap">
                                <input type="text" placeholder="Contact number &nbsp;&nbsp;&nbsp;&nbsp; ex.+63935588xxxx"/>
                            </div>

                            <div class="field-wrap">
                                <input type="password" placeholder="Set password"/>
                            </div>

                            <div class="field-wrap">
                                <input type="password" placeholder="Confirm Password *"></input>
                            </div>

                            <button type="submit" class="button button-block"/>Register</button>

                        </form>
                    </div>
                </div><!-- tab-content -->
            </div> <!-- /form -->
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



                                <li>
                                    <div class="top-big-link butt">
                                      <button class="btn btn-default btn-md" type="button"  href="#" data-toggle="modal" data-target="#myModal">Login</button> 
                                  </div>
                              </li>

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
