@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @include('pages_content.dashboard_content')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://unpkg.com/chart.js@^2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>

    <script>
        const chart = new Chartisan({
          el: '#chart',
          url: "@chart('product_chart_r')",
          hooks: new ChartisanHooks()
                .responsive()
                .title('De 1 à 5!')
                .datasets([{ type: 'line', fill: false}, 'bar']),
            });
      </script>
@stop
