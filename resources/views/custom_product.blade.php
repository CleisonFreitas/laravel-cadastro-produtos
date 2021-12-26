@extends('adminlte::page')

@section('title', 'Registro de Produtos')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
    @include('forms.product_form')
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('choices/assets/styles/choices.min.css') }}">
@stop

@section('js')
    <script src="{{ asset('choices/assets/scripts/.eslintrc.js') }}"></script>
    <script src="{{ asset('choices/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('choices/assets/scripts/select.js') }}"></script>

@stop
