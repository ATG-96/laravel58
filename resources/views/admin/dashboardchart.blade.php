@extends('layouts.master')

@section('title')
    Dashboardchart-chart
@endsection

@section('l3')
    class="active "
@endsection

@section('content')



  <br />
  <!-- start container-->
  <div class="container-fluid">
   <h3 style="text-align:center;">Make Google Pie Chart </h3><br />
   
   <!-- start panel-->
   <div class="panel panel-default">
      <div class="panel-heading">
          <h3 style="text-align:center;" class="panel-title">Percentage of Male and Female Employee</h3>
      </div>

      <!-- start chart row-->
      <div class="row">
        <div id="col1" class="col-lg-6 col-md-8 col-sm-12">
          <div class="panel-body" align="center">
            <div id="pie_chart" style="width:750px; height:450px;">
          </div>
        </div>

        <div id="col2" class="col-lg-6 col-md-8 col-sm-12">
          <div class="panel-body">
              <div id="pie_chart1" style="width:750px; height:450px;">
          </div>
        </div>
      </div>
      <!-- end row-->
      
      
    </div>
    <!-- end panel -->

   </div>
   <!-- end container-->
  <title>Make Google Pie Chart in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <style type="text/css">
   .box{
    width:800px;
    margin:0 auto;
   }
  </style>
  <script type="text/javascript">
   var analytics = <?php echo $gender; ?>

   google.charts.load('current', {'packages':['corechart']});
   

   google.charts.setOnLoadCallback(drawChart);

   google.charts.setOnLoadCallback(drawChart1);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Percentage of Male and Female Employee'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }

   function drawChart1()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Percentage of Male and Female Employee'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart1'));
    chart.draw(data, options);
   }
   
   </script>

@endsection
 

