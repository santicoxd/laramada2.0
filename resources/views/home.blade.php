@extends('layouts.app')

@section('title', 'Home')

@section('head')

@endsection

@section('header')
{{$HomeInfo->page_title}} <div class="hidden-md hidden-lg"></div><small>{{$HomeInfo->page_subtitle}}</small>
@endsection


@section('breadcrumb')
<i class="fa fa-home"></i> Home
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">         
            <div class="jumbotron">
                <h1>Bienvenido</h1>
                <h2>Esta es la aplicación informativa de contaminantes presentes en el distrito de riego <b> La Ramada </b></h2>
                
<p align="justify">La Ramada se extiende por los municipios de: Mosquera, Tenjo, Funza, Cota, Madrid y Bojacá. El área por la que se extiende el distrito de riego es de 18 mil hectáreas beneficiando a un promedio de 1000 usuarios. Los elementos principales del sistema de riego y drenaje de esta unidad son: Estación de bombeo Chicú, Canal Chicú – La Florida, Canal La Florida – Gualí, compuertas La Florida, sistema conformado por los canales “A”, “B” y “C”, Tibaitatá y San José, los cuales se alimentan a partir de la Ciénaga de Tres Esquinas mediante bocatomas de compuertas deslizantes. Canales colectores Venecia, Normandía y La Victoria, estación de bombeo para drenaje El Tabaco, la cual descarga al río Bogotá y posee dos bombas para una capacidad instalada de 2 m3/seg. En general los canales del Distrito cubren funciones mixtas de riego y drenaje. A los cerca de 1000 productores (usuarios) a quienes se les debe garantizar riego y drenaje a las tierras enclavadas en sus límites, dentro de esquemas de administración y manejo del recurso hídrico con criterios de racionalización y aprovechamiento de las disponibilidades de aguas tratadas a nivel primario del río Bogotá y que sean aptas para su reutilización en usos como el riego agroindustrial. (Corporación Autonoma Regional de Cundinamarca, 2010)</p>
            </div>
        </div>
    </div>
@endsection
