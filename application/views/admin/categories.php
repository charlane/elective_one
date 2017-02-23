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


          <li  class="active">
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
                    <input type="text" placeholder="Category Name"/>
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
            <a class="navbar-brand" href="#">Categories</a>
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
                 <h2>Category List</h2>
               </div>
               <div class="col-md-8 addbutton">

                <button class="btn btn-primary" type="button" href="#" data-toggle="modal" data-target="#myModal">
                 <i class="glyphicon glyphicon-plus"></i>
                  &nbsp;ADD A NEW CATEGORY
                </button>  
              </div>
             </div>

             <table>

              <thead>
                <tr>
                  <th>#</th>
                  <th>Category Name</th>
            
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Accounting/Finance</td>
            
                </tr>
                <tr>
                  <td>2</td>
                  <td>Computer/IT</td>
           
                </tr>
                <tr>
                  <td>3</td>
                  <td>Call Center/BPO</td>

                </tr>
                <tr>
                  <td>4</td>
                  <td>Management</td>

   
                </tr>
                <tr>
                  <td>5</td>
                  <td>Admin/HR/Secretarial</td>

   
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

