//alert('entro a persona') //Se usó para comprobar que entra a este js
$.post(baseurl+"Ccondiva/getCondicioniva",
	{
	  	sitReg: 1 	
	},
	function(data) {
		//alert(data);
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboCondiva').append('<option value="'+item.idcondicioniva+'">'+item.condiva+'</option>');
		});
	});

//Para mostrar el texto de una condicion de iva al seleccionarla en el select
$('#cboCondiva').change(function(){
    var texto = $('#cboCondiva option:selected').text();
     //alert(texto);
    $('#textoCondiva').val(texto);
});