$('#btnGetProductos').click(function(){
	//alert('entro al boton');
	$('#tblProductos tbody').html('');
	$.post(baseurl+"cproducto/getProductos",
		{
	  		sitRegprod: 1 	
		},
		function(data){
			//alert(data);
			var p = JSON.parse(data);
			$.each(p,function(i,item){
				$('#tblProductos tbody').append(
					'<tr>'+
					'<td>'+item.idproducto+'</td>'+
					'<td>'+item.codigoprod+'</td>'+
					'<td>'+item.descripcionprod+'</td>'+
					'<td>'+item.descrubro+'</td>'+
					'<td>'+item.presentacionprod+'</td>'+
					'<td>'+item.unidadprod+'</td>'+
					'<td>'+item.loteprod+'</td>'+
					'<td>'+item.partidaprod+'</td>'+
					'<td>'+item.marcaprod+'</td>'+
					'<td>'+item.vencimientoprod+'</td>'+
					'<td>'+item.puntopedidoprod+'</td>'+
					'<td>'+item.stockactualprod+'</td>'+
					'<td><a href="#" class="btn btn-black btn-primary btn-sm" style="width: 80%;" data-toggle="modal" data-target="#modalEditProducto" onClick="selProducto(\''+item.idproducto+'\',\''+item.codigoprod+'\',\''+item.descripcionprod+'\',\''+item.presentacionprod+'\',\''+item.unidadprod+'\',\''+item.loteprod+'\',\''+item.partidaprod+'\',\''+item.marcaprod+'\',\''+item.puntopedidoprod+'\');"><i class="fa fa-fw fa-edit"></i></a></td>'+
					'<td><a href="#" class="btn btn-black btn-primary btn-sm" style="width: 80%;" data-toggle="modal" data-target="#modalDelProducto" onClick="selProductoDel(\''+item.idproducto+'\',\''+item.descripcionprod+'\');"><i class="fa fa-fw fa-trash-o"></i></a></td>'+					
					'</tr>'																																							
					);
			});
			$('#tblProductos').DataTable();
		});
});
//con esta funcion pasamos los paremtros a los text del modal.
selProducto = function(idproducto, codigoprod, descripcionprod,presentacionprod, unidadprod,loteprod,partidaprod,marcaprod,puntopedidoprod){
	//alert('Entro aqui');
	$('#mhdnIdProducto').val(idproducto);
	$('#mtxtCodigo').val(codigoprod);
	$('#mtxtDescripcion').val(descripcionprod);
	//$('#mtxtRubro').val(descrubro);
	$('#mtxtPresentacion').val(presentacionprod);
	$('#mtxtUnidad').val(unidadprod);
	$('#mtxtLote').val(loteprod);
	$('#mtxtPartida').val(partidaprod);
	$('#mtxtMarca').val(marcaprod);	
	//$('#mtxtVencimiento').val(vencimientoprod);
	$('#mtxtPuntoPedido').val(puntopedidoprod);

  // $('#mcboOtro value(3)').prop('selected', true);
  //$('[name=mcboOtro]').val(7);
};

//metodo update del modal
$('#mbtnActProducto').click(function(){
	//alert('Entro aqui');
	var idP = $('#mhdnIdProducto').val();
	var cod = $('#mtxtCodigo').val();
	var desc = $('#mtxtDescripcion').val();
	var pres = $('#mtxtPresentacion').val();
	var und = $('#mtxtUnidad').val();
	var lot = $('#mtxtLote').val();
	var part = $('#mtxtPartida').val();
	var mar = $('#mtxtMarca').val();
	var punt = $('#mtxtPuntoPedido').val();
	$.post(baseurl+"cproducto/updProducto",	
	{
		mhdnIdProducto:idP,
		mtxtCodigo:cod,
		mtxtDescripcion:desc,
		mtxtPresentacion:pres,
		mtxtUnidad:und,
		mtxtLote:lot,
 		mtxtPartida:part,
		mtxtMarca:mar,
		mtxtPuntoPedido:punt
	},
	function(data){
		if (data == 1) {
			//alert('Entro aqui');
			$('#mbtnCerrarModal').click();
			location.reload();
		}
	});
});

//con esta funcion pasamos los paremtros a los text del modal eliminar.
selProductoDel = function(idproducto, descripcionprod){
	//alert('Entro aqui');
	$('#mhdnIdProductoDel').val(idproducto);
	$('#mtxtDescripcionDel').val(descripcionprod);
};

//metodo update del modal
$('#mbtnDelProducto').click(function(){
	//alert('Entro aqui');
	var idP = $('#mhdnIdProductoDel').val();
	$.post(baseurl+"cproducto/delProducto",	
	{
		mhdnIdProductoDel:idP,
		sitRegprod: 0

	},
	function(data){
		if (data == 1) {
			//alert('Entro aqui');
			$('#mbtnDelCerrarModal').click();
			location.reload();
		}
	});
});
//Para mostrar el id de una presentacionprod al seleccionarla en el select
//$('#cbopresentacionprod').change(function(){
//	$('#cbopresentacionprod option:selected').each(function(){
//		var id = $('#cbopresentacionprod').val();
//		alert(id);
//	});
//}); 


/*$(document).ready(function(){
	$('#btnGuardarProveedores').click(function(){
	 	//alert('entro al boton');

	    var id = $('#cbopresentacionprod option:selected').val();
	    //alert(id,texto);
	    $('#cbopresentacionprod').val(id);
	    alert('pasó el select');
	});
});*/

/*$("#cbopresentacionprod").change(function(){
        alert($('select[id=cbopresentacionprod]').val());
        $('#valor2').val($(this).val());
});*/

//Para listar proveedores usamos un DataTable de Jquery
//$('#tbProveedores').DataTable();