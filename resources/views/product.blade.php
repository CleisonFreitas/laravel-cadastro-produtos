@extends('adminlte::page')

@section('title', 'Relação de Produtos')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
    @include('pages_content.product_content')
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.jqueryui.min.css">

    <!-- Css Choices -->
    <link rel="stylesheet" href="{{ asset('choices/assets/styles/choices.min.css') }}">
@stop

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('vendor/jquery/jquery.min.js') }}">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
    <!-- Js choices -->
    <script src="{{ asset('choices/assets/scripts/.eslintrc.js') }}"></script>
    <script src="{{ asset('choices/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('choices/assets/scripts/select.js') }}"></script>
    @include('sweetalert::alert')
@stop
