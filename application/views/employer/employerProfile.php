<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/vendors/bootstrap/css/light-bootstrap-dashboard.css') ;?>"/>
<div class= "container-fluid"><!-- Fly-in navbar -->
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
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav borderbot right">
                    <li class="">
                        <a href="<?php echo base_url('employer');?>">
                            Job Posted
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url('employer/employerInbox');?>">
                            Application Inbox  &nbsp;<span class="badge"> 5
                        </span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
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
                                            <h4 style="text-align: center;">
                                                Hi!&nbsp;<strong>Kyle</strong>
                                            </h4> 
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider navbar-login-session-bg"></li>
                            <li>
                                <a href="<?php echo base_url('employer/employerProfile');?>">
                                    My Profile
                                    <span class="glyphicon glyphicon-cog pull-right"></span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Sign Out
                                    <span class="glyphicon glyphicon-log-out pull-right"></span>
                                </a>
                            </li>
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
<div class="clearfix"></div>
<!-- Modal content-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="clearfix"></div>
        <center>
            <h3 class="profCol2">Edit Profile</h3>
        </center>
        <div class="col-md-12 well">
            <form id="register-form" >
                <div class="field-wrap">
                    <input
                    type="text"
                    id="companyName"
                    placeholder="Company Name" 
                    name="companyName" 
                    v-model="companyName"/>
                </div>
                <div class="field-wrap">
                    <input type="text" 
                    id="username" 
                    placeholder="Username" 
                    name="username" 
                    v-model="username"/>
                </div>
                <div class="field-wrap">
                    <input 
                    type="text"
                    id="email" 
                    placeholder="Email Address"  
                    value="<?php echo set_value('email') ;?>" 
                    name="email" 
                    v-model="email"/>
                </div>
                <span class="help-block" 
                id="error"
                style="color: red;"><?php echo form_error('email'); ?>
            </span>
            <div class="field-wrap">
                <span class="help-block" id="error"></span> 
                <textarea
                id="companyDesc"
                placeholder="Company Description*"
                rows="3" 
                name="companyDesc" 
                v-model="companyDesc"
                ></textarea>
            </div> 
            <div class="field-wrap">
                <div class="col-md-3"> 
                    <button 
                    type="button" 
                    class="btn btn-primary"
                    v-on:click = "save">
                    Edit Password
                </button>
            </div>
            <div class="col-md-9"> 
                <div class="field-wrap">
                    <input type="password"
                    id="password" 
                    placeholder="Password" 
                    name="password" 
                    v-model="password"/>
                </div>
                <div class="field-wrap">
                    <input
                    type="password" 
                    id="confirm_pass" 
                    placeholder="Confirm Password *"
                    name="confirm_pass"
                    v-model="confirm_pass"/>
                </div>
            </div></div>
            <div class="field-wrap">
                <div class="col-md-6">
                    <button 
                    type="button" 
                    style="width: 100%"
                    class="button button-primary"
                    v-on:click = "save">Save Changes</button>
                </div>
                <div class="col-md-6"> 
                    <button 
                    type="button"
                    style="width: 100%" 
                    class="button button-primary buttonwidth" 
                    v-on:clic ="cancel">
                    Cancel
                </button>
            </div> 
        </div>
    </form>
</div><!-- tab-content -->
</div> <!-- /form -->
</div>
</div>
</div><!-- end of modal -->
<div class="clearfix"></div>
<div class="outer"></div>
<br />
<div class= "container">
    <center><h3 class="margtopcontainer profCol">MY PROFILE</h3></center>
    <div class= "col-md-12 well">
        <div class="col-md-3"><center>
            <img width="100%" src="<?php echo base_url('resources/images/user.png');?>">
            <hr><h3>GJ Flowershop</h3></center>
            <hr>
            <h4><a><span class="glyphicon glyphicon-user"></span></a> &nbsp; gjsibugxvi</h4>
            <h4><a><span class="glyphicon glyphicon-envelope"></span></a> &nbsp; gjsibug@gmail.com</h4>
            <h4><a><span class="glyphicon glyphicon-phone"></span></a> &nbsp; 09260021116</h4>
            <br><br>
            <div class="row">
            </div><hr>
        </div>
        <div class="col-md-9">
            <div class="profDes">
                <h2>Company Description</h2>
                <p>NexusBond Asia Inc is a digital marketing company that provides a wide range of online solutions such as web development, graphic design, SEO, and more. We are currently looking for skillful applicants to become part of our CDO team. <br><br>We are in need of MOBILE APP DEVELOPERS (for both Android and IOS) with the following qualifications:
                    Able to read documentation
                    Has full understanding of the basics of databases and relational data as well as the basics of JSON
                    For IOS, applicants must: <br><br>
                    Have an experience in Objective C or Swift<br>
                    Be excellent in UI integration<br>
                    Have a relevant experience in objective oriented programming<br>
                    Have at least 2 years of experience in iPhone/iPad development<br>
                    Be knowledgeable in iPhone 6.0+SDK, Cocoa-Touch, XCode IDE orientation<br>
                    Possess ample knowledge in various web services such as XML and JSON<br>
                    Have strong user interface design skills<br><br></p>
                    <br><br>
                </div>
                <button class="btn btn-primary media-top-right" type="button"  href="#editprofile" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit"></span> &nbsp;Edit Profile</button>
            </div>
        </div>
    </div>
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

    <script>
        $(function() {
            $('#toggle-two').bootstrapToggle({
                on: 'Enabled',
                off: 'Disabled'
            });
        })
    </script>
