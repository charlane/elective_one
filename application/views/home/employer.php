    <div class= "container-fluid">
        <div class="outer"></div>
        <div class= "container">

            <div class= "col-md-12 margtopcontainer">
                <!-- NAV START -->
                <div class="col-md-9">
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
                                            <img style="max-width: 22px;"
                                            src="<?php echo base_url('resources/images/user.png');?>">

                                            <strong>&nbsp;Kyle&nbsp;</strong>
                                            <span class="glyphicon glyphicon-chevron-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-login">
                                                    <div class="row">
                                                        <div class="">
                                                            <center>
                                                                <img style="max-width:100px;"
                                                                src="<?php echo base_url('resources/images/user.png');?>">
                                                            </center>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <h4 style="
                                                            text-align: center;
                                                            ">Hi!&nbsp;<strong>Kyle</strong></h4> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="divider navbar-login-session-bg"></li>
                                            <li><a href="#">My Profile <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
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

        <div class= "col-sm-9 col-md-9 box2">

            <h1>My Posted Jobs</h1>

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

