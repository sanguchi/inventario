//alert('entro a persona') //Se usó para comprobar que entra a este js
$.post(baseurl+"cciudad/getCiudades",
	{
	  	sitReg: 1 	
	},
	function(data) {
		//alert(data);
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboCiudad').append('<option value="'+item.idciudad+'">'+item.ciudad+'</option>');
		});
	});