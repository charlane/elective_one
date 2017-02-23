<div class= "container-fluid">
  <div class="outer"></div>
    <div class= "container">
      <div id="addJob" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="col-md-12">
            <div class="form">
              <div>
                <div id="login">   
                  <form action="" method="">
                    <div class="field-wrap">
                      <input type="text" placeholder="Position Title"/>
                    </div>
                    <div class="field-wrap">
                      <input type="text" placeholder="Category"/>
                    </div>
                    <div class="field-wrap">
                      <input type="email" placeholder="Location"/>
                    </div>
                    <button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> &nbsp; Add Job</button>
                  </form>
                </div>
              </div><!-- tab-content -->
            </div> <!-- /form -->
          </div>
        </div>
      </div>
      <div class= "col-md-12 margtopcontainer">
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
                <div class="input-group  search-bar">
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
                    <a href=""<?php echo base_url('employer/employer');?>">
                      Job Posted<span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="">
                    <a href="<?php echo base_url('employer/employerInbox');?>">
                      Application Inbox &nbsp; <span class="badge">5</span>
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
                                <h4 style="
                                text-align: center;
                                ">Hi!&nbsp;<strong>Kyle</strong></h4> 
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="divider navbar-login-session-bg"></li>
                        <li><a href="<?php echo base_url('employer/employerProfile');?>">My Profile <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
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
      <div class="content">
        <div class="container-fluid">
          <div class="col-md-12">
            <div class="card" >
              <div class="header ">
               <div class="row field-wrap">
                <div class="col col-md-4" id="filter">
                  <form method="POST">
                    <select name="select" id="fetch" class="drop selectectpicker" onchange="location = this.value;">
                      <option>Filter by..</option>
                      <optgroup label="Jobs by Location">
                        <option value="Anywhere">Anywhere</option>
                        <option value="Butuan">Butuan</option>
                        <option value="Cagayan de Oro City">Cagayan de Oro City</option>
                        <option value="Dapitan">Dapitan</option>
                        <option value="Davao">Davao</option>
                        <option value="General Santos">General Santos</option>
                        <option value="Gingoog">Gingoog</option>
                        <option value="Iligan">Iligan</option>
                        <option value="Malaybalay">Malaybalay</option>
                        <option value="Marawi">Marawi</option>
                        <option value="Ozamis">Ozamis</option>
                        <option value="Pagadian">Pagadian</option>
                        <option value="Zamboanga">Zamboanga</option>
                      </optgroup>
                      <optgroup label="Others">
                        <option value="#" >Date Posted</option>
                        <option value="#" >School</option>
                      </optgroup>
                    </select>
                  </form>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4 addbutton">
                 <button class="btn btn-primary" type="button" href="#addJob" data-toggle="modal" data-target="#addJob">
                   <i class="glyphicon glyphicon-plus"></i>
                   &nbsp;ADD JOB
                 </button>
               </div>
             </div>
             <table>
              <thead>
                <tr>
                  <th>Position Title</th>
                  <th>Category</th>
                  <th>Location</th>
                  <th>Date Added</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Web Developer</td>
                  <td>Information Technology</td>
                  <td>Cagayan de Oro City</td>
                  <td>2017-02-02 17:31:22</td>
                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-off="Taken"  data-on="Available">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Stewardess</td>
                  <td>Tourism</td>
                  <td>Davao</td>
                  <td>2017-02-02 17:31:22</td>
                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-off="Taken"  data-on="Available">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Accountant</td>
                  <td>Accounting</td>
                  <td>Butuan</td>
                  <td>2017-02-02 17:31:22</td>
                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-off="Taken"  data-on="Available">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Manager</td>
                  <td>Management</td>
                  <td>Dapitan</td>
                  <td>2017-02-02 17:31:22</td>
                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-off="Taken"  data-on="Available">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Clerk</td>
                  <td>HRM</td>
                  <td>Zamboanga</td>
                  <td>2017-02-02 17:31:22</td>
                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-off="Taken"  data-on="Available">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="container-fluid">
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
  </div>
  <div class= "col-sm-9 col-md-12 ">
    <div class="clearfix"></div>
    <div class="clearfix"></div>
        <hr>
       </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>

