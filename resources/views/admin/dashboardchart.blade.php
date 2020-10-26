@extends('layouts.master')

@section('title')
    Dashboardchart-chart
@endsection

@section('l3')
    class="active"
@endsection

@section('content')

<style>
  #pie_chart svg {
    width: 550px !important;
    margin-right:500px !important;
  }

  #pie_chart1 svg {
    width: 550px !important;
    margin-right:500px !important;
    
    
  }
</style>

  <!-- start container-->
  <div class="container-fluid">
   <h3 style="text-align:center;margin-top:2%;">Make Google Pie Chart </h3><br/>
   
   <!-- start panel-->
    <div class="panel panel-default">
      <div class="panel-heading">
          <h3 style="text-align:center;" class="panel-title">Percentage of Male and Female Employee</h3>
      </div>

      <!-- start chart row-->
      <div class="row">
        <div id="col1" class="col-lg-6 col-md-6 col-sm-12">
          <div class="panel-body">
            <div id="pie_chart" style="width:750px; height:450px;"></div>
          </div>
        </div>

        <div id="col2" class="col-lg-6 col-md-6 col-sm-12">
          <div class="panel-body">
              <div id="pie_chart1" style="width:750px; height:450px;"></div>
          </div>
        </div>
      </div>
      <!-- end row-->
    </div>
    <!-- end panel -->
  </div>
  <!-- end container-->


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
 

