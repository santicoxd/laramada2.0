@extends('layouts.app')

@section('title', 'Datos')

@section('head')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">

<link href="{{asset('css/jquery.dataTables.css')}}" rel="stylesheet">
<link href="{{asset('css/buttons.dataTables.min.css')}}" rel="stylesheet">

<script src="{{asset('js/jquery.dataTables.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js/responsive.bootstrap.min.js')}}"></script>
<script src="{{asset('js/dataTables.buttons.min.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


<script src="{{asset('js/private/datos.js')}}"></script>


@endsection

@section('header')
Datos de Contaminantes <div class="hidden-md hidden-lg"> <small> Interfaz administrativa</small>
@endsection

@section('breadcrumb')
<i class="fa fa-database"></i> Datos
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">   
		<div class="panel panel-default">
			<div class="panel-heading"><b> Tipos de Contaminantes </b></div>

			<div class="panel-body">
				<div class="panel-group" id="accordion">
					@foreach($types as $id=>$type)
					<div class="panel panel-default">


						<div class="panel-heading">
							<h4 class="panel-title">
								<div class="row">
									<div class="col-md-3 col-xs-3">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$id}}">
											{{$type->name}}
										</a>
									</div>
									<div class="col-md-2 col-xs-5 pull-right">
										<div class="btn-group btn-group-justified">							    
											<div class="btn-group">
												<button type="button" class="btn  btn-warning buttonEditType" data-id="{{$type->id}}" data-nombre="{{$type->name}}"  data-toggle="modal" data-target="#modalEditType">
													<span class="glyphicon glyphicon-pencil"></span>
												</button>
											</div>
											<div class="btn-group">
												<button type="button" class="btn  btn-danger buttonDeleteType" data-id="{{$type->id}}"  data-nombre="{{$type->name}}" data-toggle="modal" data-target="#modalDeleteType">
													<span class="glyphicon glyphicon glyphicon-trash"></span>
												</button>
											</div>
										</div>
									</div>
								</div>	
							</h4>
						</div>


						<div id="collapse{{$id}}" class="panel-collapse collapse">
							<div class="panel-body">
								<table class="display datatable dt-responsive no-wrap" width="100%">
								    <thead>
								        <tr>
								        	<th><b>#</b></th>
								            <th>Contaminante</th>
								            <th>Mapas</th>
								            <th>Opciones</th>
								        </tr>
								    </thead>
								    <tbody>
								    	@foreach($type->pollutants as $idPollutant=>$pollutant)
								    	<tr>
								            <td>{{$idPollutant+1}}</td>
								            <td>{{$pollutant->name}}</td>
								            <td>{{sizeof($pollutant->yearMaps)}}</td>
								            <td>
								            	<div class="btn-group pull-right">
												  	<button type="button" data-id="{{$pollutant->id}}"  data-nombre="{{$pollutant->name}}" class="btn btn-default  buttonEditPollutant" data-toggle="modal" data-target="#modalEditPollutant">Editar</button>
								            		<button type="button" data-id="{{$pollutant->id}}"  data-nombre="{{$pollutant->name}}" class="btn btn-danger buttonDeletePollutant" data-toggle="modal" data-target="#modalDeletePollutant">Eliminar</button>
												</div>
								            	
								            </td>
								        </tr>
										@endforeach									        

								    </tbody>
								</table>
								<button data-toggle="modal" data-target="#modalAddPollutant" data-id="{{$type->id}}"  data-nombre="{{$type->name}}" type="button" class="btn btn-primary btn-lg btn-block buttonAddPollutant">Añadir Contaminante <span class="glyphicon glyphicon glyphicon-plus"></span></button>
							</div>
						</div>
					</div> 
					@endforeach 
				</div>
				<button type="button" class="btn-lg btn-primary col-md-2" data-toggle="modal" data-target="#modalAddType" >
					Añadir Tipo <span class="glyphicon glyphicon glyphicon-plus"></span>
				</button>

			</div>
		</div>      

	</div>
</div>

<!-- ModalAgregar -->
@include('modals.modalAddType')

<!-- ModalEditar -->
@include('modals.modalEditType')

<!-- ModalEliminar -->
@include('modals.modalDeleteType')

<!-- Modal Añadir contaminante -->
@include('modals.modalAddPollutant')

<!-- Modal Ver contaminante -->
@include('modals.modalEditPollutant')

<!-- Modal Editar contaminante -->
@include('modals.modalDeletePollutant')


@endsection