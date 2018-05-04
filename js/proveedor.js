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


$('#btnGetProveedores').click(function(){
	//alert('entro al boton');
	$('#tblProveedores tbody').html('');
	$.post(baseurl+"cproveedor/getProveedores",
		{
	  		sitRegprov: 1 	
		},
		function(data){
			//alert(data);
			var p = JSON.parse(data);
			$.each(p,function(i,item){
				$('#tblProveedores tbody').append(
					'<tr>'+
					'<td>'+item.idproveedor+'</td>'+
					'<td>'+item.nfantasiaprov+'</td>'+
					'<td>'+item.rsocialprov+'</td>'+
					'<td>'+item.direccionprov+'</td>'+
					'<td>'+item.ciudad+''+' - '+''+item.provincia+'</td>'+
					'<td>'+item.cpostalprov+'</td>'+
					'<td>'+item.emailprov+'</td>'+
					'<td>'+item.telefonoprov+'</td>'+
					'<td>'+item.condiva+'</td>'+
					'<td>'+item.cuitprov+'</td>'+
					'<td>'+item.contactoprov+'</td>'+
					'<td>'+item.descrubro+'</td>'+
					'<td><a href="#" class="btn btn-black btn-primary btn-sm" style="width: 80%;" data-toggle="modal" data-target="#modalEditProveedor" onClick="selProveedor(\''+item.idproveedor+'\',\''+item.nfantasiaprov+'\',\''+item.rsocialprov+'\',\''+item.direccionprov+'\',\''+item.cpostalprov+'\',\''+item.emailprov+'\',\''+item.telefonoprov+'\',\''+item.cuitprov+'\',\''+item.contactoprov+'\');"><i class="fa fa-fw fa-edit"></i></a></td>'+
					'<td><a href="#" class="btn btn-black btn-primary btn-sm" style="width: 80%;" data-toggle="modal" data-target="#modalDelProveedor" onClick="selProveedorDel(\''+item.idproveedor+'\',\''+item.nfantasiaprov+'\');"><i class="fa fa-fw fa-trash-o"></i></a></td>'+					
					'</tr>'																																							
					);
			});
			$('#tblProveedores').DataTable();
		});
});
//con esta funcion pasamos los paremtros a los text del modal.
selProveedor = function(idproveedor, nfantasiaprov, rsocialprov, direccionprov, cpostalprov,emailprov,telefonoprov,cuitprov,contactoprov){
	$('#mhdnIdProveedor').val(idproveedor);
	$('#mtxtNfantasia').val(nfantasiaprov);
	$('#mtxtRsocial').val(rsocialprov);
	$('#mtxtDireccion').val(direccionprov);
	$('#mtxtCpostal').val(cpostalprov);
	$('#mtxtEmail').val(emailprov);
	$('#mtxtTelefono').val(telefonoprov);
	$('#mtxtCuit').val(cuitprov);
	$('#mtxtContacto').val(contactoprov);
  // $('#mcboOtro value(3)').prop('selected', true);
  //$('[name=mcboOtro]').val(7);
};

//metodo update del modal
$('#mbtnUpdProveedor').click(function(){
	//alert('Entro aqui');
	var idP = $('#mhdnIdProveedor').val();
	var nfan = $('#mtxtNfantasia').val();
	var rsoc = $('#mtxtRsocial').val();
	var dir = $('#mtxtDireccion').val();
	var cp = $('#mtxtCpostal').val();
	var mail = $('#mtxtEmail').val();
	var tel = $('#mtxtTelefono').val();
	var cuit = $('#mtxtCuit').val();
	var cont = $('#mtxtContacto').val();
	$.post(baseurl+"cproveedor/updProveedor",	
	{
		mhdnIdProveedor:idP,
		mtxtNfantasia:nfan,
		mtxtRsocial:rsoc,
		mtxtDireccion:dir,
		mtxtCpostal:cp,
		mtxtEmail:mail,
 		mtxtTelefono:tel,
		mtxtCuit:cuit,
		mtxtContacto:cont
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
selProveedorDel = function(idproveedor, nfantasiaprov){
	//alert('Entro aqui');
	$('#mhdnIdProveedorDel').val(idproveedor);
	$('#mtxtNfantasiaDel').val(nfantasiaprov);
};

//metodo update del modal
$('#mbtnDelProveedor').click(function(){
	//alert('Entro aqui');
	var idP = $('#mhdnIdProveedorDel').val();
	$.post(baseurl+"cproveedor/delProveedor",	
	{
		mhdnIdProveedorDel:idP,
		sitRegprov: 0

	},
	function(data){
		if (data == 1) {
			//alert('Entro aqui');
			$('#mbtnDelCerrarModal').click();
			location.reload();
		}
	});
});

//Para mostrar el id de una ciudad al seleccionarla en el select
//$('#cboCiudad').change(function(){
//	$('#cboCiudad option:selected').each(function(){
//		var id = $('#cboCiudad').val();
//		alert(id);
//	});
//}); 


/*$(document).ready(function(){
	$('#btnGuardarProveedores').click(function(){
	 	//alert('entro al boton');

	    var id = $('#cboCiudad option:selected').val();
	    //alert(id,texto);
	    $('#cboCiudad').val(id);
	    alert('pasó el select');
	});
});*/

/*$("#cboCiudad").change(function(){
        alert($('select[id=cboCiudad]').val());
        $('#valor2').val($(this).val());
});*/

//Para listar proveedores usamos un DataTable de Jquery
//$('#tbProveedores').DataTable();