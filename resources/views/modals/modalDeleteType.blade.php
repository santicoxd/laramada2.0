<div id="modalDeleteType" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<form method="post" action="{{route('eliminar-tipo')}}">
		{{csrf_field()}}
		<input required type="hidden" id="inputIdEliminarTipo" name="typeId">
			

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><b> Eliminar Tipo de Contaminantes</b></h4>
			</div>
			<div class="modal-body">
				<p>¿Esta seguro que desea eliminar el tipo de contaminantes <strong><span id="spanEliminarTipo"></span></strong> y todos los datos asociados a este?</p>
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