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

      <div class= "clearfix"></div>

      <br>
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

  <div class="col-md-12 mainbody">
    <a>
        <h1 class="sliding-u-l-r-l">Contactics</h1>
    </a>

    <a>
        <ul class="media-list">
            <li>

               <p class="media-heading">
                <span class="glyphicon glyphicon-map-marker"></span>
                Cagayan de Oro City &nbsp;&nbsp;&nbsp;
                <span class="glyphicon glyphicon-calendar"></span>
                11/11/16
            </p>
        </a>


        <div class="clearfix"> </div>
        <br>
        <div class="media-body">
            <p class="">
              NexusBond Asia Inc is a digital marketing company that provides a wide range of online solutions such as web development, graphic design, SEO, and more. We are currently looking for skillful applicants to become part of our CDO team. <br><br>

              We are in need of MOBILE APP DEVELOPERS (for both Android and IOS) with the following qualifications:

              Able to read documentation
              Has full understanding of the basics of databases and relational data as well as the basics of JSON
              For IOS, applicants must: <br><br>

              Have an experience in Objective C or Swift<br>
              Be excellent in UI integration<br>
              Have a relevant experience in objective oriented programming<br>
              Have at least 2 years of experience in iPhone/iPad development<br>
              Be knowledgeable in iPhone 6.0+SDK, Cocoa-Touch, XCode IDE orientation<br>
              Possess ample knowledge in various web services such as XML and JSON<br>
              Have strong user interface design skills<br><br>
              For Android, applicants must:<br><br>

              Possess strong programming skills in Java and deep knowledge in development for Android<br>
              Be highly knowledgeable in Android SDK as well as in different versions of Android<br>
              Also know how to deal with varying screen sizes<br>
              Have a relevant experience in Android, Android Studio, and XML<br>
              Have a relevant experience in Material Design<br>
              Have excellent development experience using web-based RESTful APIs, SQL server and more<br>
              Have full understanding of Google’s Android Design principles and interface guidelines<br>
              For both IOS and Android Mobile App Applicants, knowledge in Firebase is a plus!<br><br>
              How to Apply:
              Interested applicants can send their resume to jobs@nexusbond.com.

              For more information about the company, please visit their website at http://nexusbond.com/
          </p>
      </div>
  </li>
</ul>
<br/><hr><br/>
<div class="col-md-12 right well">
    <div class="text-center">
        <p id="notify"></p>
        <h3>
            <strong>APPLY ONLINE</strong>
        </h3>
    </div>
    <div class="middle">
        <form class="form-horizontal" id="resume_form" >
            <div class="form-group">   
                <div class="col-sm-1">
                </div>
                <div class="col-sm-10">
                    <label class="label-left">
                        Full Name: <span class="req">*</span>
                    </label>
                    <input type="text" class="form-control" name="name" id="name" />
                    <span class="help-block" id="error"></span> 
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-10">
                    <label class="label-left">
                        Email Address: <span class="req">*</span>
                    </label>
                    <input type="text" class="form-control" name="email" id="email" >
                    <span class="help-block" id="error"></span> 
                </div>
            </div>

            <input type="hidden" name="statuss" id="statuss" value="pending"/>
            <div class="form-group">                 
                <div class="col-sm-1">
                </div>
                <div class="col-sm-10">
                    <label class="label-left">
                        Cover Letter: <span class="req">*</span>
                    </label>
                    <textarea class="form-control placeholderdaw" rows="16" name="coverLetter" id="letter">
Dear ___________,   

This is in response to your job posting of __________ posted in INTERNHUB on ___________.

I am very interested in the position advertised.

...

Thank you.

Sincerely,
[Your name]
                    </textarea>
                    <span class="help-block" id="error"></span> 
                </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">

                <div class="apply">

                    <div class="col-md-12 left">
                        <h5>Upload your Resume: (optional) <small>(Max. 3 MB. File Type: DOC/PDF)</small></h5>

                        <span class=""><input class="" type="file" name="uploaded_file" id="resume"></span>
						<div class="col-md-8">
						<div class="progress" style="margin: 15px 0px 0px -15px">
								<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
								aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:50%">
								100% File Successfully Uploaded!</div>
						</div>
						</div>

                    </div>
					

                    <div class="clearfix"></div>
                    <hr/>

                    <div class="col-md-12 left">
                        <label class="note">By sending this application, you are agreeing to comply with <br> and be bound by the <a href = "#">terms of use.</a></label>
                        <button class="button button-block" type="submit" name="submit_resume" id="submit" value="Upload file">Send Application</button>
                    </div>

                </div>

            </div>
        </form>

    </div>

</div>

</div>
</div>
<div class="clearfix"></div>

</div>
</div>

</div>
</div>

</div>
<div class="clearfix"></div>

