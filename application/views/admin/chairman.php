 <div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url('resources/images/sidebar-5.jpg');?>">

      <div class="sidebar-wrapper">
        <div class="logo logoadmin">
          <a class="admin-brand" rel="home" href="#">
            <img src="<?php echo base_url('resources/images/logo.png');?>">
          </a>
        </div>

        <ul class="nav">
          <li>
            <a href="<?php echo base_url('admin/dashboard');?>">
              <i class="fa fa-tachometer"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url('admin/employer');?>">
              <i class="pe-7s-note2"></i>
              <p>Employer</p>
            </a>
          </li>

          <li class="active">
            <a href="<?php echo base_url('admin/chairman');?>">
              <i class="pe-7s-note2"></i>
              <p>Chairman</p>
            </a>
          </li>


          <li>
            <a href="<?php echo base_url('admin/categories');?>">
              <i class="pe-7s-note2"></i>
              <p>Categories</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/location');?>">
              <i class="pe-7s-note2"></i>
              <p>Locations</p>
            </a>
          </li>
        </ul>
      </div>
    </div>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        
        <div class="col-md-12">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="form">
            <div>
              <div id="login">   
                <form action="" method="">



                  <div class="field-wrap">
                    <input type="text" placeholder="Chairman Name"/>
                  </div>
                  <div class="field-wrap">
                    <input type="text" placeholder="School Name"/>
                  </div>
                  <div class="field-wrap">
                    <input type="email" placeholder="Email"/>
                  </div>
                  <div class="field-wrap">
                    <input type="text" placeholder="Contact number &nbsp;&nbsp;&nbsp;&nbsp; ex.+63935588xxxx"/>
                  </div>
                  <label>Location</label>
                  <div class="field-wrap">
                    <select class="selectpicker addlocation" title="Location">
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
                      <option value="Others">Others</option>
                    </select>
                  </div>


                  <button class="button button-block"/>Submit</button>
                </form>
              </div>

            </div><!-- tab-content -->
          </div> <!-- /form -->
        </div>
        

      </div>
    </div>


    <div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Chairman</a>
          </div>
          <div class="collapse navbar-collapse">
              
                  <ul class="nav navbar-nav navbar-right">
                    
                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <p>
                        Admin
                        <b class="caret"></b>
                      </p>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Log Out</a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card" >
              <div class="header">
               
                <div class="col col-md-4" id="filter">

                  <form method="POST">
                    <select name="select" id="fetch" class="drop selectectpicker" onchange="location = this.value;">
                      <option>Filter by..</option>
                      
                      
                      <optgroup label="By Location">
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
                 <h2>Chairman List</h2>
               </div>



               <div class="col-md-4 addbutton">

                 <button class="btn btn-primary" type="button" href="#" data-toggle="modal" data-target="#myModal">
                 <i class="glyphicon glyphicon-plus"></i>
                  &nbsp;ADD A NEW CHAIRMAN
                </button>  
              </div>
            </div>

            <table>

              <thead>
                <tr>
                  <th>ID #</th>
                  <th>Chairman Name</th>
                  <th>School Name</th>
                  <th>Email Address</th>
                   <th>Date Added</th>
                  <th>Action & Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Jiel Gaid</td>
                  <td>USTSP</td>
                  <td>Jiel@email.com</td>
                  <td>2017-02-02 17:31:22</td>
                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-off="Disabled"  data-on="Enabled">
                    </div>
          
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Charlane Vallar</td>
                  <td>MUST</td>
                  <td>Lorem@email.com</td>
                  <td>2017-02-02 17:31:22</td>
                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled">
                    </div>
           
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Kyle Mugot</td>
                  <td>DMMMPSC</td>
                  <td>Lorem@email.com</td>
                  <td>2017-02-02 17:31:22</td>
                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled">
                    </div>
                    
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Grace Sibug</td>
                  <td>MOSCAT</td>
                  <td>Lorem@email.com</td>
                  <td>2017-02-02 17:31:22</td>
                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled">
                    </div>
                    
                  </td>
                </tr>

                <tr>
                  <td>5</td>
                  <td>Jissa Dablio</td>
                  <td>USTP</td>
                  <td>Lorem@email.com</td>
                  <td>2017-02-02 17:31:22</td>
                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled">
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

