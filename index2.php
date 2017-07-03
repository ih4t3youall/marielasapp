<html>
<head>
<script src="jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" ></script>

<style>



</style>
<script type="text/javascript">

function createChart(pieData,pieColors,pieLabels,options,id){

  var ctx = document.getElementById(id).getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: pieLabels,
        datasets: [{
            label: "Autos por mes",
            backgroundColor:pieColors,
            data: pieData,
        }]
    },
    // Configuration options go here
    options: options,
  });

}


$( document ).ready(function() {

var pieData =[15,15,15,15,15,15,10];
var pieColors=["red","blue","green","black","violet","yellow","bisque"];
var pieLabels=["a", "b", "c","d","e","f","g"];
var options ={
  responsive:false,
};

createChart(pieData,pieColors,pieLabels,options,'myChart');
createChart(pieData,pieColors,pieLabels,options,'myChart2');



});

</script>


</head>

<body>
  <div class="chart-container" style="position: relative; height:40vh; width:80vw">
      <canvas id="myChart"></canvas>
  </div>

  <div class="chart-container" style="position: relative; height:40vh; width:80vw">
      <canvas id="myChart2"></canvas>
  </div>


</body>

</html>
