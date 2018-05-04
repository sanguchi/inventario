//alert('entro a persona') //Se usó para comprobar que entra a este js
$.post(baseurl+"Crubro/getRubro",
	{
	  	sitReg: 1 	
	},
	function(data) {
		//alert(data);
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboRubro').append('<option value="'+item.idrubro+'">'+item.descrubro+'</option>');
		});
	});

//Para mostrar el texto del rubro al seleccionarlo en el select
$('#cboRubro').change(function(){
    var texto = $('#cboRubro option:selected').text();
     //alert(texto);
    $('#textoRubro').val(texto);
});