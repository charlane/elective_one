    <div class= "container-fluid">
        <div class="outer"></div>
        <div class= "container">

            <div class= "col-md-12 margtopcontainer">
                <!-- NAV START -->
                <div class="col-md-10">
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog viewapp clearfix">


                        <!-- Modal content-->

                        <div class="col-md-12 well">
                         <button type="button" class="close closeapp" data-dismiss="modal">&times;</button>

                         <div class="col-md-4"><br>

                          <h4><a><span class="glyphicon glyphicon-user"></span></a> &nbsp; Grace Joy Sibug</h4>
                          <h4><a><span class="glyphicon glyphicon-envelope"></span></a> &nbsp; gjsibug@gmail.com</h4>
                          <h4><a><span class="glyphicon glyphicon-phone"></span></a> &nbsp; 09260021116</h4>

                          <hr><hr><hr><hr>

                          <p>Attachment:</p><br>

                          <a class="btn btn-employer" href="get_data.php?id=1" name="Edit" type="button"><span class="glyphicon2 glyphicon glyphicon-save "></span> &nbsp; CURR VITAE.pdf</a>


                      </div>

                      <div class="col-md-8"><br>
                        <p>Dear Sir/Madam,  I am very interested in the position advertised as Photographer because I am a very enthusiastic person in the field of Photography. Thank you. Sincerely, Grace Joy Sibug Lorem Ipsum</p> <br>

                        <p>Cras et laoreet urna. Duis suscipit nec orci lobortis porta. Sed non interdum lacus. Nullam quis blandit nunc. Donec ac erat in sapien consectetur egestas vitae nec purus. Pellentesque nisl purus, molestie sed porttitor a, facilisis ut risus. Mauris in nisi eros. Fusce non viverra felis. Fusce sit amet purus et leo porttitor rutrum a non mi. Vestibulum vitae eros at nunc lobortis euismod in in felisero ex, placerat vel porttitor at, tristique in est. Nam imperdiet ipsum eu pretium luctus. Pellentesque ultrices nisl malesuada neque ultricies tempus.</p>

                        <hr>

                        <div class="row">
                            <div class="col-md-6"> 
                                <button class="button btn-success button-block"/>Accept</button>
                            </div>
                            <div class="col-md-6"> 
                                <button class="button btn-danger button-block"/>Decline</button>
                            </div>
                        </div>

                        <br>

                    </div>

                </div>

            </div>
        </div>

        <div class= "clearfix"></div>
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
                            <a href="<?php echo base_url('chairman/chairmanhome');?>">
                                Home<span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" >
                                    
                                    <strong>&nbsp;Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span>&nbsp;</strong>
                                </a>
                                
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

<div class= "col-sm-12 col-md-12">

    <div class="card">

        <div class="header">
         <div class="col-md-12">
           <h3>Number of Applicants by Location</h3>
       </div>
       <div class="col-md-8 addbutton">
       </div>
   </div>

   <script>
    var chart;

    var chartData = [
    {
        "country": "Butuan",
        "visits": 4025
    },
    {
        "country": "Cagayan de Oro City",
        "visits": 1882
    },
    {
        "country": "Dapitan",
        "visits": 1809
    },
    {
        "country": "Davao",
        "visits": 1322
    },
    {
        "country": "General Santos",
        "visits": 1122
    },
    {
        "country": "Gingoog",
        "visits": 1114
    },
    {
        "country": "Iligan",
        "visits": 984
    },
    {
        "country": "Malaybalay",
        "visits": 711
    },
    {
        "country": "Marawi",
        "visits": 665
    },
    {
        "country": "Ozamis",
        "visits": 580
    },
    {
        "country": "Pagadian",
        "visits": 443
    },
    {
        "country": "Zamboanga",
        "visits": 111
    }

    ];


    AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "country";
                chart.startDuration = 1;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.labelRotation = 90;
                categoryAxis.gridPosition = "start";

                // value
                // in case you don't want to change default settings of value axis,
                // you don't need to create it, as one value axis is created automatically.

                // GRAPH
                var graph = new AmCharts.AmGraph();
                graph.valueField = "visits";
                graph.balloonText = "[[category]]: <b>[[value]]</b>";
                graph.type = "column";
                graph.lineAlpha = 0;
                graph.fillAlphas = 0.8;
                chart.addGraph(graph);

                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.cursorAlpha = 0;
                chartCursor.zoomable = false;
                chartCursor.categoryBalloonEnabled = false;
                chart.addChartCursor(chartCursor);

                chart.creditsPosition = "top-right";

                chart.write("chartdiv");
            });
        </script>
    </head>

    <body>
        <div id="chartdiv" style="width: 100%; height: 400px;"></div>
    </body>
</div> <!-- //card -->

<br>
<hr/>
<br><br>


<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card" >
          <div class="header">

             <div class="col-md-8">
                <h2>Students List</h2>
            </div>
            <div class="col-md-4" id="filter" >

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
                        </optgroup>

                    </select>
                </form>
            </div>



        </div>

        <table>

          <thead>
            <tr>
              <th>ID #</th>
              <th>Student Name</th>
              <th>Email Address</th>
              <th>Company</th>
              <th>Location</th>
              <th>Date applied</th>
              <th>Status</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Jiel Gaid</td>
          <td>Jiel@email.com</td>
          <td>CEPALCO</td>
          <td>Cagayan de Oro</td>
          <td>2017-02-02 17:31:22</td>
          <td>Accepted</td>
          <td>
            <button class="btn btn-primary" type="button" href="#" data-toggle="modal" data-target="#myModal" style="
            margin-bottom: 4px;
            ">
            <i class="glyphicon glyphicon-eye-open"></i>
            &nbsp;VIEW APPLICATION
        </button> 

    </td>
</tr>
<tr>
  <td>2</td>
  <td>Charlane Vallar</td>
  <td>Lorem@email.com</td>
  <td>CEPALCO</td>
  <td>Cagayan de Oro</td>
  <td>2017-02-02 17:31:22</td>
  <td>Declined</td>

  <td>
     <button class="btn btn-primary" type="button" href="#" data-toggle="modal" data-target="#myModal" style="
     margin-bottom: 4px;
     ">
     <i class="glyphicon glyphicon-eye-open"></i>
     &nbsp;VIEW APPLICATION
 </button> 

</td>
</tr>
<tr>
  <td>3</td>
  <td>Kyle Mugot</td>
  <td>Lorem@email.com</td>
  <td>CEPALCO</td>
  <td>Cagayan de Oro</td>
  <td>2017-02-02 17:31:22</td>
  <td>Accepted</td>
  <td>
      <button class="btn btn-primary" type="button" href="#" data-toggle="modal" data-target="#myModal" style="
      margin-bottom: 4px;
      ">
      <i class="glyphicon glyphicon-eye-open"></i>
      &nbsp;VIEW APPLICATION
  </button> 

</td>
</tr>
<tr>
  <td>4</td>
  <td>Grace Sibug</td>
  <td>Lorem@email.com</td>
  <td>CEPALCO</td>
  <td>Cagayan de Oro</td>
  <td>2017-02-02 17:31:22</td>
  <td>Accepted</td>
  <td>
      <button class="btn btn-primary" type="button" href="#" data-toggle="modal" data-target="#myModal" style="
      margin-bottom: 4px;
      ">
      <i class="glyphicon glyphicon-eye-open"></i>
      &nbsp;VIEW APPLICATION
  </button> 

</td>
</tr>

<tr>
  <td>5</td>
  <td>Jissa Dablio</td>
  <td>Lorem@email.com</td>
  <td>CEPALCO</td>
  <td>Cagayan de Oro</td>
  <td>2017-02-02 17:31:22</td>
  <td>Declined</td>
  <td>
      <button class="btn btn-primary" type="button" href="#" data-toggle="modal" data-target="#myModal" style="
      margin-bottom: 4px;
      ">
      <i class="glyphicon glyphicon-eye-open"></i>
      &nbsp;VIEW APPLICATION
  </button> 

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


<br/><br/>


</div>

</div>



</div>
</div>
</div>

<div class="clearfix"></div>

