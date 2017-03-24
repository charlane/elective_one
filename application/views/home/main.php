<div class= "container-fluid">
  <div class="outer"></div>
  <div class= "container">
    <div class= "col-md-12 margtopcontainer">
      <!-- NAV START -->
      <div class="col-md-9">
        <!-- MODAL START!! C'MOOON-->
            <div class="modal fade margtopcontainer" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title"><strong>Log In</strong></h2>
                  </div><div class="container"></div>
                  <div class="modal-body">
                    <div id="login">   
                      <form id="log-user">

                        <div class="field-wrap">
                          <input type="username" placeholder="Username" id="username" name="username" v-model="username"/>
                        </div>
                        <div class="field-wrap">
                          <input type="password" placeholder="Password" id="password" name="password" v-model="password"/>
                        </div>

                        <hr>

                        <div id="signup">
                          <p class="donthave"><a data-toggle="modal" href="#myModal2">Don't have an account? <strong><u>Register</u></strong></a></p>
                        </div>

                        <p class="forgot"><a href="#">Forgot Password?</a></p>

                        <button type="button" class="button button-block" v-on:click = "log" />Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="myModal2" data-backdrop="static">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title"><strong>Register</strong></h2>
                  </div><div class="container"></div>
                  <div class="modal-body">
                    <div id="signup">
                      <form  id="register-form">
                        <div class="field-wrap">
                          <input type="text" id="companyName" placeholder="Company Name" name="companyName" v-model="companyName" />
                        </div>

                        <div class="field-wrap">
                          <input type="text" id="username" placeholder="Username" name="username" v-model="username"/>
                        </div>

                        <div class="field-wrap">
                          <input type="text" id="email" placeholder="Email Address" name="email" v-model="email" />
                        </div>

                        <div class="field-wrap">
                          <input type="password" id="password" placeholder="Password" name="password" v-model="password"/>
                        </div>

                        <div class="field-wrap">
                          <input type="password" id="confirm_pass" placeholder="Confirm Password *" name="confirm_pass" v-model="confirm_pass"></input>
                        </div>

                        <div class="field-wrap">
                          <span class="help-block" id="error"></span> 
                          <textarea class="" id="companyDesc" placeholder="Company Description*" rows="3" name="confirm_pass" v-model="companyDesc"></textarea>
                        </div>

                        <hr>
                        <p class="donthave "  data-dismiss="modal"><a href="#myModal">Already have an Account? <strong><u>Log In</u></strong></a></p>

                        <button type="button" class="button button-block"  v-on:click = "save">Submit</button>

                      </form>
                    </div>
                  </div>

                </div>
              </div>
            </div>
<!-- MODAL END!! YAAYY -->
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
                  <a href="<?php echo base_url('home');?>">
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
                  <a href="<?php echo base_url('home/contact');?>">Contact Us<span class="sr-only">(current)</span></a>
                </li>
                <li>
                  <div class="top-big-link butt">
                    <button class="btn btn-default btn-md" type="button"  href="#" data-toggle="modal" data-target="#myModal">Login</button> 
                  </div>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container -->
        </div><!--/.navbar -->
      </div>
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

           <?php foreach($location as $loc): ?>
            <ul>
             
                <li>
                  <a href="<?php echo base_url('home/location?job='.$loc->locationName);?>"><?php echo $loc->locationName ;?> </a> <span>- <?php echo $loc->total_loc ;?> </span>
                </li>
              </ul>
            <?php endforeach ; ?>
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
              <?php foreach($category as $cat): ?>
                <li>
                  <a href="<?php echo base_url('home/category?job='.$cat->categoryName);?>"><?php echo $cat->categoryName ;?> </a> <span>- <?php  echo $cat->total_cat ;?> </span>
                </li>
              <?php endforeach ; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php if($this->db->affected_rows()) {?>
    <?php foreach($results as $job): ?>
      <div class= "col-sm-9 col-md-9 box2">
        <div class="col-md-12 mainbody">
          <a>
            <h1 class="sliding-u-l-r-l h1-size"><?php echo $job->companyName ;?></h1>
          </a>
          <a>
            <ul class="media-list">
              <li>
                <p class="media-heading">
                  <span class="glyphicon glyphicon-map-marker"></span>
                  <?php echo $job->locationName ;?> &nbsp;&nbsp;&nbsp;
                  <span class="glyphicon glyphicon-calendar"></span>
                  <?php echo $job->dateAdded ;?>
                </p>
              </a>
              <div class="clearfix"> </div>
              <br>
              <div class="media-body">
                <p class="">
                  <?php echo $job->companyDesc ;?>
                </p>
              </div>
            </li>
          </ul>
        <?php endforeach ; 
      } else {
        echo "<h3>Nothig here...</h3>";
      }
      ?> 
      <br/><hr><br/>
      <div class="col-md-12 right well">
        <div class="text-center">
          <p id="notify"></p>
          <h3>
            <strong>APPLY ONLINE</strong>
          </h3>
          <?php echo @$message ;?>
        </div>
        <p id="notify" style="text-align: center;"></p>
        
        <ditv class="middle">
          <form method="POST" enctype="multipart/form-data" class="form-horizontal" id="resume_form"  action="<?php echo base_url('home/submitResume') ;?>">
            <div class="form-group">   
              <div class="col-sm-1">
              </div>
             
            </div>
            <div class="form-group">   
              <div class="col-sm-1">
              </div>
              <div class="col-sm-10">
                <label class="label-left">
                  First Name: <span class="req">*</span>
                </label>
                <input type="text" class="form-control" name="fname" id="fname" value="<?php echo set_value('fname') ;?>"/>
                <span class="help-block" id="error" style="color: red;"><?php echo form_error('fname'); ?></span> 
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-1">
              </div>
              <div class="col-sm-10">
                <label class="label-left">
                  Last Name: <span class="req">*</span>
                </label>
                <input type="text" class="form-control" name="lname" id="lname" value="<?php echo set_value('lname') ;?>" />
                <span class="help-block" id="error" style="color: red;"><?php echo form_error('lname'); ?></span> 
              </div>
            </div>
            <div class="form-group">  
              <div class="col-sm-1">
              </div>
              <div class="col-sm-10">
                <label class="label-left">
                  Choose Course: *
                </label>
                <select class="filtermain form-control selectectpicker" onchange="" name="course" id="course" value="<?php echo set_value('course'); ?>">
            <?php foreach ($courses as $course): ?>
                  <option value="<?php echo $course->courseName ;?>"
                    ><?php echo $course->courseName ;?>
                  </option>
                <?php endforeach ;?>
               
                </select>
                  <span class="help-block" id="error" style="color: red;"><?php echo form_error('course'); ?></span> 
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-1">
              </div>
              <div class="col-sm-10">
                <label class="label-left">
                  Year level: <span class="req">*</span> <small>Ex. 3rd Year</small>
                </label>
                <input type="text" class="form-control" name="year" id="year" value="<?php echo set_value('year') ;?>"/>
                <span class="help-block" id="error" style="color: red;"><?php echo form_error('year'); ?></span> 
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-1">
              </div>
              <div class="col-sm-10">
                <label class="label-left">
                  Email Address: <span class="req">*</span>
                </label>
                <input type="text" class="form-control" name="email" id="email" value="<?php echo set_value('email') ;?>"/>
                <span class="help-block" id="error" style="color: red;"><?php echo form_error('email'); ?></span> 
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-1">
              </div>
              <div class="col-sm-10">
                <label class="label-left">
                  Phone #: <span class="req">*</span>
                </label>
                <input type="text" class="form-control" name="phone_no" id="phone_no" value="<?php echo set_value('phone_no') ;?>"/>
                <span class="help-block" id="error" style="color: red;"><?php echo form_error('phone_no'); ?></span> 
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
                <textarea class="form-control placeholderdaw" rows="16" name="coverLetter" id="coverLetter" value="<?php echo set_value('coverLetter') ;?>">
                  Dear ___________,   

                  This is in response to your job posting of __________ posted in INTERNHUB on ___________.

                  I am very interested in the position advertised.

                  ...

                  Thank you.

                  Sincerely,
                  [Your name]
                </textarea>
                <span class="help-block" id="error" style="color: red;"><?php echo form_error('coverLetter'); ?></span> 
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="apply">
                  <div class="col-md-12 left">
                    <h5>Upload your Resume: (optional) <small>(Max. 3 MB. File Type: DOC/PDF)</small></h5>
                    <span class=""><input class="" type="file" name="resume" id="resume"></span>
                  </div>
                  <?php echo @$errors; ?>
                  <div class="clearfix"></div>
                  <hr/>   

                  <div class="col-md-12 left">
                    <label class="note">By sending this application, you are agreeing to comply with <br> and be bound by the <a href = "#">terms of use.</a></label>
                    <button class="button button-block" type="submit" name="submit_resume" id="submit_resume" value="Send Application" style="color: white;">Send Application</button>
                  </div>
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
<div class="clearfix"></div>
<footer class="footerr">
  <div class= "container">        
    <div class="footer-top">
      <p>Stay connected!</p> 
      <a href="#">
        <img alt= "fb" src="<?php echo base_url('resources/images/fb.png'); ?>" class="contacticon">
      </a>
      <a href="www.facebook.php">
        <img alt="google" src="<?php echo base_url('resources/images/gmail.png');?>" class="contacticon">
      </a> 
      <br/>
      <p> We'll contact you shortly! </p>
    </div>
    <div class = "footer-bot">
      <strong> All rights reserved GoTeam &copy; 2017.</strong></div>
    </div>
  </footer>
  <!-- Footer End -->
 
