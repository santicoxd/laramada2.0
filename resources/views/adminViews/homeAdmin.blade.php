@extends('layouts.app')

@section('header')
Administración de contenido: <div class="hidden-md hidden-lg"></div> <small> Home</small>
@endsection

@section('breadcrumb')
<i class="fa fa-gear"></i> Administración de contenido: Home
@endsection

@section('content')
<div class="row">
    <form class="form-horizontal" role="form" method="POST" action="{{ route('changeHomeContent') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title" class="col-md-4 control-label">Titulo Principal</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control" name="title" value="{{$HomeInfo->page_title}}" required autofocus>
            
            </div>
        </div>
        <div class="form-group">
            <label for="subtitle" class="col-md-4 control-label">Subtitulo de la página</label>

            <div class="col-md-6">
                <input id="subtitle" type="text" class="form-control" name="subtitle" value="{{$HomeInfo->page_subtitle}}" required autofocus>
            
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                                Guardar Cambios
                </button>
            </div>
        </div>
    </form>
</div>   

@endsection