
<div class="container-fluid loginsignup">
  <div class="container">
    <div class="col-md-12">
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


  <li>
    <div class="top-big-link butt">
      <button class="btn btn-default btn-md" type="button"  href="#" data-toggle="modal" data-target="#myModal">Login</button> 
    </div>
  </li>

</ul>

</ul>
</div><!--/.nav-collapse -->
</div><!--/.container -->
</div><!--/.navbar -->
<!-- nav end -->

</div>

<div class="clearfix"></div>
<br><br>
      <div class="col-md-7">

        <div class="welcomemessage">
          <h1><strong>  Welcome to 
            <img style="max-width: 45%; margin-top: -6px; "
            src="<?php echo base_url('resources/images/logo.png');?>"></strong></h1>


            <h3>
              Join us, it's FREE!<br><br>
            </h3>
            <h4>
             Internhub is an online student internship site which aims to make searching for firms and companies who offer internship programs more efficient to the students, specifically in Cagayan de Oro City. <br><br>
             Keep in touch with the company you are longing for,
             and stay updated with the other professional and ideal companies you might want to get into. 
             <br><br><br><br><br>
             <h4>
             Get in-the-moment updates on the things that interest you. <br>
             And watch events unfold, 
             in real time, from every angle.
             </h4>
           </h4>
         </div>  

       </div>

       <div class="col-md-5">

        <div class="form">

                    <ul class="tab-group">
                      <li class="tab active"><a href="#contactus">Contact Us</a></li>
                      <li class="tab"><a href="#addressinfo">Address & Info</a></li>
                    </ul>

                    <div class="tab-content">


                      <div id="contactus">   
                        <form action="/" method="post">
                          <div class="field-wrap">
                            <input type="fullname" placeholder="Full Name"/>
                          </div>
                          <div class="field-wrap">
                            <input type="emailadd" placeholder="Email Address"/>
                          </div>
              <div class="field-wrap">
                            <input type="contactnum" placeholder="Contact Number"/>
                          </div>
              <div class="field-wrap">
              <textarea class="" id="description" placeholder="Write your message/comments here." rows="5"></textarea>
            </div>
                          <button class="button button-block"/>SEND</button>
                        </form>
                      </div>

                      <div id="addressinfo">
        <p>
            <strong>INTERNHUB</strong>
            <br/><br/>

            <span class="glyphicon glyphicon-map-marker"></span> 143 Claro M. Recto Avenue,
            Lapasan,
            Cagayan de Oro City,
            Philippines
            <br/>
            <br/>

            <span class="glyphicon glyphicon-phone-alt"></span>&nbsp; 02112016 <br/><br/>

            <span class="glyphicon glyphicon-envelope"></span>&nbsp; kylermugs@gmail.com <br/><br/>
          </p>

          <center>
            <p>
              <a href="www.facebook.php"><img alt= "fb" src="<?php echo base_url('resources/images/fb.png');?>" class="contacticon"></a>
              <a href="www.facebook.php"><img alt="google" src="<?php echo base_url('resources/images/gmail.png');?>" class="contacticon"></a> 
              <b> We'll contact you shortly! </b>
            </p>
          </center>
                          </div>
                        </div><!-- tab-content -->
                      </div> <!-- /form -->
                   

      </div>



    </div>
  </div>
</div>



<div class="clearfix"></div>
