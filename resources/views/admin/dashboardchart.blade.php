@extends('layouts.master')

@section('title')
    Dashboardchart-chart
@endsection

@section('l3')
    class="active "
@endsection

@section('content')

<!DOCTYPE html>
<html>
 <head>
  <title>Make Google Pie Chart in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script type="text/javascript">
   var analytics = <?php echo $gender; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Percentage of Male and Female Employee'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }
  </script>
 </head>
 <body>
  <br />
  

  <div class="container">
   <h3 >Make Google Pie Chart in Laravel</h3><br />
   
   <div class="card">
    <div class="row">
     <h3 class="panel-title">Percentage of Male and Female Employee  <a href="/dashboardsafe/"class="btn btn-success">Go</a></h3>
    </div>
    
     <div id="pie_chart" style="width:375px; height:225px;">

    
    </div>
   </div>
  </div>

 
      


  
 </body>
</html>

