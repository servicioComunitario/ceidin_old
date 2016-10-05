var form = "";

function destroyUser($id){
	form = "form-destroy-"+$id;
}

$('#btn-eliminar-empleado').click(function (e) {
	e.preventDefault();
	$('#'+form).submit();
});

function mostrar(){
	
}