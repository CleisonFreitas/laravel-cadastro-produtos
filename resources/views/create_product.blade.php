@extends('adminlte::page')

@section('title', 'Registro de Produtos')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
<div class="card shadow bg-light" style="border-radius: 5px;">
    <div class="card-header bg-white text-white">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="row">
                    <div class="col">
                        <h5>Cadastrar novo produto</h5>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6 ">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('product.index') }}" class="btn btn-primary btn-sm" style="margin-left:80%;"><i class="fas fa-search-plus"></i>&nbsp;Consultar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body bg-white" style="border-radius: 5px;">
        <form action="{{ route('product.store') }}" method="post" class="form">
            @csrf
            @include('forms.product_form')
        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('choices/assets/styles/choices.min.css') }}">
@stop

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('choices/assets/scripts/.eslintrc.js') }}"></script>
    <script src="{{ asset('choices/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('choices/assets/scripts/select.js') }}"></script>
    @include('sweetalert::alert')

@stop
