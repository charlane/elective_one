  <div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url('resources/images/sidebar-5.jpg');?>">

      <div class="sidebar-wrapper">
        <div class="logo logoadmin">
          <a class="admin-brand" rel="home" href="#">
            <img src="<?php echo base_url('resources/images/logo.png');?>">
          </a>
        </div>

        <ul class="nav">
          <li class="active">
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
            <a class="navbar-brand" href="#">Dashboard</a>
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
          <div class="col-md-3">
            <div class="card dashcard">
              <div class="header">
                <h4 class="title">Total Users</h4>
                <h2 class="haha">535</h2>
              </div>
              <div class="content">
                <div class="footer">

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card dashcard1">
              <div class="header">
                <h4 class="title">Applicants</h4>
                <h2 class="haha">612</h2>
              </div>
              <div class="content">
                <div class="footer">

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card dashcard2">
              <div class="header">
                <h4 class="title">Employers</h4>
                <h2 class="haha">423</h2>
              </div>
              <div class="content">
                <div class="footer">

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card dashcard3">
              <div class="header">
                <h4 class="title">Chairman</h4>
                <h2 class="haha">112</h2>
              </div>
              <div class="content">
                <div class="footer">
                </div>
              </div>
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




        </div>
      </div>

    </div>
