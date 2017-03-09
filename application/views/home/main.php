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
                    <form id="log-user">
                      <div class="field-wrap">
                        <input type="username" placeholder="Username/Email Address" id="username" name="username" v-model="username"/>
                      </div>
                      <div class="field-wrap">
                        <input type="password" placeholder="Password" id="password" name="password" v-model="password"/>
                      </div>
                      <p class="forgot"><a href="#">Forgot Password?</a></p>
                      <button type="button" class="button button-block" v-on:click = "log" />Log In</button>
                    </form>
                  </div>
                  <div id="signup">
                    <form id="register-form" >
                      <div class="field-wrap">
                        <input type="text" id="companyName" placeholder="Company Name" name="companyName" v-model="companyName"/>
                      </div>
                      <div class="field-wrap">
                        <input type="text" id="username" placeholder="Username" name="username" v-model="username"/>
                      </div>
                      <div class="field-wrap">
                        <input type="text" id="email" placeholder="Email Address"  value="<?php echo set_value('email') ;?>" name="email" v-model="email"/>
                      </div><span class="help-block" id="error" style="color: red;"><?php echo form_error('email'); ?></span>
                      <div class="field-wrap">
                        <input type="password" id="password" placeholder="Password" name="password" v-model="password"/>
                      </div>
                      <div class="field-wrap">
                        <input type="password" id="confirm_pass" placeholder="Confirm Password *" name="confirm_pass" v-model="confirm_pass"></input>
                      </div>
                      <div class="field-wrap">
                        <span class="help-block" id="error"></span> 
                        <textarea class="" id="companyDesc" placeholder="Company Description*" rows="3" name="companyDesc" v-model="companyDesc"></textarea>
                      </div>
                      <button type="button" class="button button-block"  v-on:click = "save">Register</button>
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
            <ul>
              <?php foreach($location as $loc): ?>
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
        <div class="middle">
          <form method="POST" enctype="multipart/form-data" class="form-horizontal" id="resume_form" action="<?php echo  base_url('home/main?job_id=').$_GET['job_id'] ;?>" >
            <div class="form-group">   
              <div class="col-sm-1">
              </div>
              <div class="col-sm-10">
                <label class="label-left">
                  Student ID #: <span class="req">*</span>
                </label>
                <input type="text" class="form-control" name="student_id" id="student_id" value="<?php echo set_value('student_id') ;?>"/>
                <span class="help-block" id="error" style="color: red;"><?php echo form_error('student_id'); ?></span> 
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
                <select name="select" class="filtermain form-control selectectpicker" onchange="" name="course" id="course" value="">
                  <option>Colleges and Courses</option>
                  <optgroup label="College of Science and Mathematics">
                    <option value="BS - Biology">
                      BS - Biology
                    </option>
                    <option value="BS - Physics">
                      BS - Physics
                    </option>
                    <option value="BS - Chemistry">
                      BS - Chemistry
                    </option>
                    <option value="BS - Mathematics">
                      BS - Mathematics
                    </option>
                    <option value="BS - Social Science (SS)">
                      BS - Social Science (SS)
                    </option>
                    <option value="BS - Physical Education (PE)">
                      BS - Physical Education (PE)
                    </option>
                    <option value="BS - Food and Science Technology (FST)">
                      BS - Food and Science Technology (FST)
                    </option>
                    <option value="BS - Environmental Science and Technology (EST)">
                      BS - Environmental Science and Technology (EST)
                    </option>
                    <option value="BS - Communication Art Language and Literature (CALL)">
                      BS - Communication Art Language and Literature (CALL)
                    </option>
                  </optgroup>
                  <optgroup label="College of Science and Technology Education">
                    <option value="BS - Science Education">
                      BS - Science Education
                    </option>
                    <option value="BS - Teaching Languages">
                      BS - Teaching Languages
                    </option>
                    <option value="BS - Mathematics Education">
                      BS - Mathematics Education
                    </option>
                    <option value="BS - Technology Livelihood Education and Technical Teaching Education (TLE & TTE)">
                      BS - Technology Livelihood Education and Technical Teaching Education (TLE & TTE)
                    </option>
                  </optgroup>
                  <optgroup label="College of Technology">
                    <option value="BS - Electro Mechanical Technology (EMT)">
                      BS - Electro Mechanical Technology (EMT)
                    </option>
                    <option value="BS - Electrical Technology Management (ETM)">
                      BS - Electrical Technology Management (ETM)
                    </option>
                    <option value="BS - Automotive and Mechanical Technology (AMT)">
                      BS - Automotive and Mechanical Technology (AMT)
                    </option>
                    <option value="BS - Electronics and Communication Technology (ECT)">
                      BS - Electronics and Communication Technology (ECT)
                    </option>
                  </optgroup>
                  <optgroup label="College of Engineering and Architecture">
                    <option value="BS - Architecture"
                    >BS - Architecture
                  </option>
                  <option value="BS - Civil Engineering (CE)">
                    BS - Civil Engineering (CE)
                  </option>
                  <option value="BS - Electrical Engineering (EE)">
                    BS - Electrical Engineering (EE)
                  </option>
                  <option value="BS - Mechanical Engineering (ME)">
                    BS - Mechanical Engineering (ME)
                  </option>
                  <option value="BS - Electronics Engineering (ESE)">
                    BS - Electronics Engineering (ESE
                    )</option>
                  </optgroup>
                  <optgroup label="College of Information Technology and Computing">
                    <option value="BS - Information Technology (IT)">
                      BS - Information Technology (IT)
                    </option>
                    <option value="BS - Computer Engineering (CoE)">
                      BS - Computer Engineering (CoE)
                    </option>
                    <option value="BS - Business Analytics and Informatics (BAI)">
                      BS - Business Analytics and Informatics (BAI)
                    </option>
                    <option value="BS - Technology Communication Management (TCM)">
                      BS - Technology Communication Management (TCM)
                    </option>
                  </optgroup>
                </select>
                <span class="help-block" id="error" style="color: red;"></span> 
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
                <input type="text" class="form-control" name="phone_no" id="phone" value="<?php echo set_value('phone_no') ;?>"/>
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
                <textarea class="form-control placeholderdaw" rows="16" name="coverLetter" id="letter" value="<?php echo set_value('coverLetter') ;?>">
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
                    <span class=""><input class="" type="file" name="file" id="resume"></span>
                  </div>
                  <?php echo @$errors; ?>
                  <div class="clearfix"></div>
                  <hr/>   

                  <div class="col-md-12 left">
                    <label class="note">By sending this application, you are agreeing to comply with <br> and be bound by the <a href = "#">terms of use.</a></label>
                    <input class="button button-block" type="submit" name="submit_resume" id="submit" value="Send Application" style="color: white;"/>
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
  <script type="text/javascript">$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
    if(!$this.hasClass('panel-collapsed')) {
      $this.parents('.panel').find('.panel-body').slideUp();
      $this.addClass('panel-collapsed');
      $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
    } else {
      $this.parents('.panel').find('.panel-body').slideDown();
      $this.removeClass('panel-collapsed');
      $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
    }
  })</script>
