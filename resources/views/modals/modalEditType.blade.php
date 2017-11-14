<div id="modalEditType" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<form method="post" action="{{route('editar-tipo')}}">
		{{csrf_field()}}
		<input required type="hidden" id="inputIdEditarTipo" name="typeId">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><b>Editar Tipo de Contaminantes <span id="tituloEditarTipo"></span></b></h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="name">Nombre:</label>
					<input required type="text" class="form-control" name="name" id="inputNombreEditarTipo" placeholder="Tipo de contaminantes">
				</div>
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