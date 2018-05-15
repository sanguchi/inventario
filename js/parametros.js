//alert('entro a persona') //Se usó para comprobar que entra a este js
$.post(baseurl+"Ctipoimpuesto/getTipoimpuesto",
	{
	  	habilitado: 1 	
	},
	function(data) {
		alert(data);
		var c = JSON.parse(data);
		$.each(c,function(i,item){
		  // TODO: TERMINAR ESTO
			$('#inputNomImpuesto').append('<option value="'+item.idtipoimpuesto+'">'+item.ntipoimpuesto+'</option>');
		});
	});

//Para mostrar el texto de un tipo de impuesto al seleccionarla en el select
$('#inputNomImpuesto').change(function(){
    var texto = $('#inputNomImpuesto option:selected').text();
     //alert(texto);
    $('#textoNomImpuesto').val(texto);
});

//alert('entro a proveedor') //Se usó para comprobar que entra a este js
$.post(baseurl+"Cciudadprovincia/getCiudades",
	{
	  	sitReg: 1 	
	},
	function(data) {
		//alert(data);
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboCiudad').append('<option value="'+item.idciudad+'">'+item.ciudad+''+' - '+''+item.provincia+'</option>');
		});
	});

//Para mostrar el texto de una ciudad y provincia al seleccionarla en el select
$('#cboCiudad').change(function(){
    var texto = $('#cboCiudad option:selected').text();
    //alert(texto);
    $('#textociudad').val(texto);
});
