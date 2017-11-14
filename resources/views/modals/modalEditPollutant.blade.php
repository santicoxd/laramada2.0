<div id="modalEditPollutant" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <form method="post" action="{{route('edit-pollutant')}}" id="form-edit-pollutant">
    {{csrf_field()}}
    <input type="hidden" name="pollutantId" id="inputIdEditPollutant">
    <input type="hidden" name="mapas"  id="inputNumberMapasEditPollutant" value="1">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Editar Contaminante <span id="tituloEditPollutant"></span> </b></h4>
        </div>


        <div class="modal-body">
        
          <div class="form-group">
            <label for="name">Nombre:</label>
            <input required type="text" class="form-control" name="name" placeholder="Nombre del contaminante" id="inputNombreEditPollutant">
          </div>  

          
            <label for="name">Mapas:</label>           

            <div class="row">
              <div id="mapa-inputs-edit-pollutant">
                <div class="mapa-input">
                  <div class="form-group col-md-3">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Año</span>
                      <input required type="text" class="date-year form-control yearInput" type="text" name="year[]" placeholder="Año">
                    </div>  
                  </div>

                  <div class="form-group col-md-9">    
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><b>iframe</b> </span>
                      <input required type="text" class="form-control iframeInput" type="text" name="iframe[]" placeholder="Código generado por Datatables">
                    </div> 
                  </div>                
                </div> 
              </div>              
              <div class="form-group col-md-3">
                  <button type="button" data-div="mapa-inputs-edit-pollutant" data-inputNumberMapas="inputNumberMapasEditPollutant" class="btn btn-primary btn-block buttonAddMap"><span class="glyphicon glyphicon glyphicon-plus"></span>
                  </button>
              </div>   
              <div class="form-group col-md-3">
                  <button type="button" data-div="mapa-inputs-edit-pollutant" data-inputNumberMapas="inputNumberMapasEditPollutant" class="btn btn-warning btn-block buttonDeleteMap"><span class="glyphicon glyphicon glyphicon-minus"></span>
                  </button>
              </div>      
            </div>
                        
         

          <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control summernote" rows="5" id="summernoteDescriptionEditPollutant"></textarea>          
          </div>

          <input type="hidden" name="descripcion" id="inputDespripcionEditPollutant">

        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success" value="Submit">
            Aceptar <span class="glyphicon glyphicon-ok"></span>      
          </button>
        </div>


      </div>
    </form>
  </div>
</div>