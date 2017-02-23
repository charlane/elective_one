

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
          <li  class="active">
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
                    <input type="text" placeholder="Location Name"/>
                  </div>
                  
                  <button class="button button-block"/>Submit</button>
                </form>
              </div>

            </div><!-- tab-content -->
          </div> <!-- /form -->
        </div>
        

      </div> <!-- Modal -->
    </div> <!-- Modal -->


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
            <a class="navbar-brand" href="#">Location</a>
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
               <div class="col-md-4">
                 <h2>Location List</h2>
               </div>
               <div class="col-md-8 addbutton">
                  <button class="btn btn-primary" type="button" href="#" data-toggle="modal" data-target="#myModal">
                 <i class="glyphicon glyphicon-plus"></i>
                  &nbsp;ADD A NEW LOCATION
                </button>  

              </div>
             </div>

             <table>

              <thead>
                <tr>
                  <th>#</th>
                  <th>Location Name</th>
            
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                   <td>Butuan</td>
                  
            
                </tr>
                <tr>
                  <td>2</td>
                 <td>Cagayan de Oro City</td>
           
                </tr>
                <tr>
                  <td>3</td>
                  <td>Dapitan</td>

                </tr>
                <tr>
                  <td>4</td>
                  <td>Davao</td>

   
                </tr>
                <tr>
                  <td>5</td>
                  <td>General Santos</td>

   
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