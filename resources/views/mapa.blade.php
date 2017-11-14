@extends('layouts.app')

@section('title', 'Mapa')

@section('head')

@endsection

@section('header')
Mapa de la Ramada <div class="hidden-md hidden-lg"></div>  <small>Información de contaminantes</small>
@endsection

@section('breadcrumb')
<i class="fa fa-map-marker"></i> Mapa
@endsection

@section('content')

    <div class="row">
    	<div class="col-md-3">

    	<h3>Contaminantes</h3>
     	<ul class="nav nav-pills nav-stacked">
    		@foreach($types as $type)
    		<li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{$type->name}}
			    <span class="caret"></span></a>
			    <ul class="dropdown-menu">
			      
			      @foreach($type->pollutants as $pollutant)
			       <li><a href="/mapa/{{$pollutant->id}}">{{$pollutant->name}}</a></li>	   
                   @endforeach 
			    </ul>
			</li>
    		
			@endforeach
		 </ul>
    	</div>
	    <div class="col-md-9">	   
	    	<div class="tab-content">
	    	    @if ($selectedPollutant==null)		 
	    		<div id="mapa-home" class="tab-pane fade in active">
			      <div class="panel panel-default">
					  <div class="panel-heading"><h3>Información <small>powered by Fusion Tables</small> </h3></div>
					  <div class="panel-body">
					  <div class="jumbotron">
					  	
					  <h2>Bienvenido, haga clic en un contaminante para mostrar su información</h2>
					  </div>
					  </div>
					</div>
			    </div>	
			    @endif

			    @if ($selectedPollutant!=null)
			        <div id="poll{{$selectedPollutant->id}}" class="tab-pane fade in active">
			        	<ul class="nav nav-tabs">
			        		<li class="active"><a data-toggle="tab" href="#{{$selectedPollutant->id}}maps">Mapas {{$selectedPollutant->name}}</a></li>
			        		<li><a data-toggle="tab" href="#{{$selectedPollutant->id}}inform">Información del contaminante</a></li>
			        	</ul>
			        	<div class="tab-content">
			        		<div id="{{$selectedPollutant->id}}maps" class="tab-pane fade in active">
			        			<div class="panel panel-default">
			        				<div class="panel-body">
			        					<ul class="nav nav-pills nav-justified">
			        						@foreach($selectedPollutant->yearMaps as $year)
			        						@if ($loop->first)
			        						<li class="active"><a href="#y{{$selectedPollutant->id}}{{$year->year}}" data-toggle="tab">{{$year->year}}</a></li>
			        						@else
			        					    <li><a href="#y{{$selectedPollutant->id}}{{$year->year}}" data-toggle="tab" >{{$year->year}}</a></li>
			        					    @endif
			        					    @endforeach
			        					    
			        						
			        					</ul>	
			        					<div class="tab-content">
			        					    @foreach($selectedPollutant->yearMaps as $year)
			        						@if ($loop->first)
			        						<div id="y{{$selectedPollutant->id}}{{$year->year}}" class="tab-pane fade in active">
			        						{!!$year->iframe!!}	
			        						</div>
			        						@else
			        					    <div id="y{{$selectedPollutant->id}}{{$year->year}}" class="tab-pane fade">
			        						{!!$year->iframe!!}	
			        						</div>
			        					    @endif
			        					    @endforeach
			        						
			        					</div>


			        				</div>
			        			</div>
			        		</div>
			        		<div id="{{$selectedPollutant->id}}inform" class="tab-pane fade in">
			        			<div class="panel panel-default">
			        				<div class="panel-body">
			        				<h2>{{$selectedPollutant->name}}</h2>
			        					{!!$selectedPollutant->description!!}
			        				</div>
			        			</div>
			        		</div>
			        	</div>
    
			        	
			        </div>
			    @endif


			   
			  </div> 	
	    	
	    </div>
    </div>
    <script type="text/javascript">
    	var iframes = document.getElementsByTagName("iframe");

    	for(var i = 0; i < iframes.length; i++){
    		iframes[i].setAttribute("width", "100%");
    		iframes[i].setAttribute("height", "60%");
    	}

    </script>
@endsection