<div id="modalAddType" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<form method="post" action="{{route('agregar-tipo')}}">
			{{csrf_field()}}

			<!-- Modal content-->
			<div class="modal-content ">
				<div class="modal-header ">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><b> Agregar Tipo de Contaminantes </b></h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Nombre:</label>
						<input required type="text" class="form-control" name="name" placeholder="Tipo de contaminantes">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary" value="Submit">
						Agregar <span class="glyphicon glyphicon-ok"></span>			
					</button>
				</div>
			</div>
		</form>

	</div>
</div>