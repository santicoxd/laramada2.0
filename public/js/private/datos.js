var request= new XMLHttpRequest();

$(document).on('focus',".date-year", function(){
    $(this).datepicker( {
	    format: " yyyy", // Notice the Extra space at the beginning
	    viewMode: "years", 
	    minViewMode: "years"
	});
});

$(document).ready(function(){

	var mapaInputClone=  $(".mapa-input").first().clone();	

	$( "#form-add-pollutant" ).submit(function( event ) {

		$('#inputDespripcionAddPollutant').val($('#summernoteDescriptionAddPollutant').summernote('code'));		

	});

	$( "#form-edit-pollutant" ).submit(function( event ) {

		$('#inputDespripcionEditPollutant').val($('#summernoteDescriptionEditPollutant').summernote('code'));		

	});

	$(".buttonAddMap").click(function() {

		var div=$("#"+$(this).data('div'));	

		div.append(mapaInputClone.clone());	

		var inputs=div.find('.mapa-input');

		$("#"+$(this).data('inputnumbermapas')).val(inputs.length);				

	});

	$(".buttonDeleteMap").click(function() {
		
		var div=$("#"+$(this).data('div'));	

		var inputs=div.find('.mapa-input')

		if(inputs.length==1){
			alert("El contaminante debe tener al menos un mapa")
		}else{			
			inputs.last().remove();
		}	

		inputs=div.find('.mapa-input');	

		$("#"+$(this).data('inputnumbermapas')).val(inputs.length);	

	});

	$(".buttonAddPollutant").click(function() {

		var nombre=$(this).data('nombre')
		var id=$(this).data('id')

		$("#tituloAddPollutant").text(nombre);
		$("#inputIdTypeAddPollutant").val(id);		

	});	

	$(".buttonEditPollutant").click(function() {

		var nombre=$(this).data('nombre')
		var id=$(this).data('id')

		$("#tituloEditPollutant").text(nombre);
		$("#inputIdEditPollutant").val(id);

		actualizarModalEditPollutant();	

	});	

	$('#modalEditPollutant').on('hidden.bs.modal', function () {
	    var div=$("#mapa-inputs-edit-pollutant");
	    var inputs=div.find('.mapa-input');

	    while(inputs.length>1){
	    	inputs.last().remove();
	    	inputs=div.find('.mapa-input');
	    }

	    var lastYear=div.find('.mapa-input .input-group .yearInput').last();
		var lastIframe=div.find('.mapa-input .input-group .iframeInput').last();
		
		lastYear.val('');
		lastIframe.val('');
	    
	})

	function actualizarModalEditPollutant(){

		var form = document.getElementById('form-edit-pollutant');
		var formdata = new FormData(form);

		request.open('post','/retrieve-pollutant');
		request.addEventListener("load",eventActualizarModalEditPollutant);
		request.send(formdata);	

	}

	function eventActualizarModalEditPollutant(data){

		var response= JSON.parse(data.currentTarget.response);

		var pollutant=response.pollutant;

		$('#summernoteDescriptionEditPollutant').summernote('code', pollutant.description);
		$("#inputNombreEditPollutant").val(pollutant.name);

		var div=$("#mapa-inputs-edit-pollutant");	

		pollutant.year_maps.forEach(function(item,index){			

			if(index!=0){
				div.append(mapaInputClone.clone());	
			}

			var lastYear=div.find('.mapa-input .input-group .yearInput').last();
			var lastIframe=div.find('.mapa-input .input-group .iframeInput').last();
			
			lastYear.val(item.year);
			lastIframe.val(item.iframe);	
			
		});

	}



	$(".buttonDeletePollutant").click(function() {

		var nombre=$(this).data('nombre')
		var id=$(this).data('id')

		$("#spanEliminarContaminante").text(nombre);
		$("#inputIdEliminarContaminante").val(id);

	});	

   	
   	$(".buttonEditType").click(function() {

   		var nombre=$(this).data('nombre')
		var id=$(this).data('id')

		$("#tituloEditarTipo").text(nombre);
		$("#inputNombreEditarTipo").val(nombre);
		$("#inputIdEditarTipo").val(id);   		
	  
	});	

	$(".buttonDeleteType").click(function() {

		var nombre=$(this).data('nombre')
		var id=$(this).data('id')

		$("#spanEliminarTipo").text(nombre);
		$("#inputIdEliminarTipo").val(id);

	});

	
	

	$('.summernote').summernote();

	

	$('.datatable').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        },
        responsive: true ,
	    columnDefs: [
	        { responsivePriority: 1, targets: 0 },
	        { responsivePriority: 2, targets: -1 }
	    ]   
    } );
})