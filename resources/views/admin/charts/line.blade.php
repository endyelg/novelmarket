@extends('admin.layouts.app')

@section('title', 'Admin-Charts linegraph')

@section('content')

<style>
    /* Center the line chart */
    #chart-container {
        margin: 0 auto;
        text-align: center;
    }
</style>

<div id="chart-container">
    <html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Year', 'Sales', 'Expenses'],
                    ['2004', 1000, 400],
                    ['2005', 1170, 460],
                    ['2006', 660, 1120],
                    ['2007', 1030, 540]
                ]);

                var options = {
                    title: 'Company Performance',
                    curveType: 'function',
                    legend: {position: 'bottom'}
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                chart.draw(data, options);
            }
        </script>
    </head>
    <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
    </body>
    </html>
</div>
@endsection
