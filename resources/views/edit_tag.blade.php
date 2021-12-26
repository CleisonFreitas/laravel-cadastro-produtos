@extends('adminlte::page')

@section('title', 'Registro de Tags')

@section('content_header')
    <h1>Tags</h1>
@stop

@section('content')
<div class="card shadow bg-light" style="border-radius: 5px;">
    <div class="card-header bg-white text-white">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="row">
                    <div class="col">
                        <h5>Gerenciamento de tags</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6 ">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('tag.index') }}" class="btn btn-primary btn-sm" style="margin-left:80%;"><i class="fas fa-search-plus"></i>&nbsp;Consultar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body bg-white" style="border-radius: 5px;">
        <form action="{{ route('tag.update', $tag->id ) }}" method="post" class="form">
            @csrf
            @method('PUT')
                @include('forms.tag_form')
        </form>
    </div>
</div>
@stop



@section('js')
    @include('sweetalert::alert')

@stop
