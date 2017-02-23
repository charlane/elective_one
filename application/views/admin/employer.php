
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

          <li class="active">
            <a href="<?php echo base_url('admin/employer');?>">
              <i class="pe-7s-note2"></i>
              <p>Employer</p>
            </a>
          </li>

          <li>
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
            <a class="navbar-brand" href="#">Employer</a>
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

                <!-- <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
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
                            <div class="col-md-4">
                            <h2>Employer List</h2>
                           </div>

                           <div class="col-md-8" id="filter" >

                            <form method="POST">
                            <select name="select" id="fetch" class="drop selectectpicker" style="float: right;" onchange="location = this.value;">
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
                         </div>

                         <table>

                          <thead>
                            <tr>
                  
                  <th>Company Name</th>
                  <th>Location</th>
                  <th>Username</th>
                  <th>Email Address</th>
                  <th>Date Added</th>
                  <th>Action & Status</th>


                </tr>
              </thead>
              <tbody>
                <tr>
                  
                  <td>JG</td>
                  <td>Butuan</td>
                  <td>jgjg</td>
                  <td>Jiel@email.com</td>
                  <td>2017-02-02 17:31:22</td>
         
                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-off="Disabled"  data-on="Enabled">
                    </div>
          
                  </td>
                </tr>
                <tr>
                  
                  <td>CHV</td>
                  <td>Iligan</td>
                  <td>Cha_Val</td>
                  <td>Lorem@email.com</td>
                  <td>2017-02-22 17:31:22</td>
  
                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled">
                    </div>
           
                  </td>
                </tr>
                <tr>
                  
                  <td>KMugotP</td>
                  <td>Cagayan de Oro</td>
                  <td>Kmugs</td>
                  <td>Lorem@email.com</td>
                  <td>2017-02-02 17:31:22</td>
                
                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled">
                    </div>
                    
                  </td>
                </tr>
                <tr>
                  
                  <td>Grace Sibug Cakes</td>
                  <td>GJxvII</td>
                  <td>Marawi</td>
                  <td>Lorem@email.com</td>
                  <td>2017-02-02 17:31:22</td>

                  <td>
                    <div class="togglebutt">
                      <input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled">
                    </div>
                    
                  </td>
                </tr>

                <tr>
                  
                  <td>Jissa Dablio PC</td>
                  <td>Zamboanga</td>
                  <td>JDabs_19</td>
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
</div>
</div>