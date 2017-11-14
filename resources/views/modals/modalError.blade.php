<div id="modalError" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong> Error! </strong></h4>
            </div>
            <div class="modal-body">

                @if($errors->any())
                <div class="alert alert-danger">
                    <div class="row">
                        <div class="col-md-1">
                            <strong>Error!</strong>                                
                        </div>
                        <div class="col-md-11">
                            <ul id="listaDeErrores">
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach        
                            </ul>                                 
                        </div>
                    </div>


                </div>
                @endif

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Aceptar</button>
            </div>

        </div>

    </div>
</div>