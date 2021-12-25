@extends('adminlte::page')

@section('title', 'Relação de Produtos')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
    @include('pages_content.product_content')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
