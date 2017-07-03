
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Starter UI, by Keen IO</title>

  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="dashboard/keen-dashboards.css" />
  <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">

<?php

require 'chartjsCustom/pie.js'

 ?>

 </script>

</head>
<body class="application">



  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-6">
        <div class="chart-wrapper">
          <div class="chart-title">
            Pageviews by browser (past 24 hours)
          </div>
          <div class="chart-stage">
            <div class="chart-container" style="position: relative; height:40vh; width:80vw">
                <canvas id="myChart"></canvas>
            </div>

          </div>
          <div class="chart-notes">
            This is a sample text region to describe this chart.
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="chart-wrapper">
          <div class="chart-title">
            Pageviews by browser (past 5 days)
          </div>
          <div class="chart-stage">
            <div class="chart-container" style="position: relative; height:40vh; width:80vw">
                <canvas id="myChart2"></canvas>
            </div>


          </div>
          <div class="chart-notes">
            Notes go down here
          </div>
        </div>
      </div>

    </div>


    <div class="row">

      <div class="col-sm-12">
        <div class="chart-wrapper">
          <div class="chart-title">
            Impressions by advertiser
          </div>
          <div class="chart-stage">
            <?php
            require 'graficoBarras.php'

             ?>
          </div>
          <div class="chart-notes">
            Notes go down here
          </div>
        </div>
      </div>

    </div>

    <hr>

    

  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" ></script>
  <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>

  <script type="text/javascript" src="dashboard/holder.js"></script>
  <script>
    Holder.add_theme("white", { background:"#fff", foreground:"#a7a7a7", size:10 });
  </script>

  <script type="text/javascript" src="dashboard/keen.min.js"></script>
  <script type="text/javascript" src="dashboard/meta.js"></script>

</body>
</html>
