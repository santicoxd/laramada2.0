<div id="modalDeletePollutant" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<form method="post" action="{{route('delete-pollutant')}}">
		{{csrf_field()}}
		<input required type="hidden" id="inputIdEliminarContaminante" name="pollutantId">
			

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><b> Eliminar Contaminante</b></h4>
			</div>
			<div class="modal-body">
				<p>¿Esta seguro que desea eliminar el contaminante <strong><span id="spanEliminarContaminante"></span></strong> y todos los datos asociados a este?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-danger" value="Submit">
					Eliminar <span class="glyphicon glyphicon-ok"></span>			
				</button>
			</div>
		</div>

		</form>
	</div>
</div>