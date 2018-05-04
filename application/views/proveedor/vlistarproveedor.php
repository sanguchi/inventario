<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <div class="row">
    
    <div class="col-xs-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Listado de Proveedores</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table id="tblProveedores" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 5%;background-color: #006699; color: white;">#</th>
                <th style="width: 10%;background-color: #006699; color: white;">Nombre</th>
                <th style="width: 10%;background-color: #006699; color: white;">Razón Social</th>
                <th style="width: 10%;background-color: #006699; color: white;">Dirección</th>
                <th style="width: 10%;background-color: #006699; color: white;">Ciudad - Provincia</th>
                <th style="width: 10%;background-color: #006699; color: white;">Código Postal</th>
                <th style="width: 10%;background-color: #006699; color: white;">Email</th>
                <th style="width: 10%;background-color: #006699; color: white;">Teléfono</th>
                <th style="width: 10%;background-color: #006699; color: white;">Condición IVA</th>
                <th style="width: 10%;background-color: #006699; color: white;">CUIT</th>
                <th style="width: 10%;background-color: #006699; color: white;">Contacto</th>
                <th style="width: 10%;background-color: #006699; color: white;">Rubro</th>
                <th style="width: 10%;background-color: #006699; color: white;">Editar</th>
				<th style="width: 10%;background-color: #006699; color: white;">Borrar</th>              
              </tr>
            </thead>
           <tbody></tbody>
        <!--<tfoot>
            </tfoot>-->
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
   <button type="button" id="btnGetProveedores" class="btn btn-flat"><i class="fa fa-search"></i>Buscar</button> 
  </div><!-- /.row -->

<!-- Modal Edit -->
<div class="modal fade" id="modalEditProveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">

      <div class="modal-header bg-blue-active">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Proveedor</h4>
      </div>

      <div class="modal-body">
	      <form class="form-horizontal">
	      	<!-- parametros ocultos -->
	      	<input type="hidden" id="mhdnIdProveedor">
	      	
			<div class="box-body">
		        <div class="form-group">
		            <label class="col-sm-3 control-label">Nombre de Fantasía</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtNfantasia" class="form-control" id="mtxtNfantasia" placeholder="">
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">Razón Social</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtRsocial" class="form-control" id="mtxtRsocial" value="" >
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">Dirección</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtDireccion" class="form-control" id="mtxtDireccion">
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">Código Postal</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtCpostal" class="form-control" id="mtxtCpostal">
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">Email</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtEmail" class="form-control" id="mtxtEmail">
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">Teléfono</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtTelefono" class="form-control" id="mtxtTelefono">
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">CUIT</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtCuit" class="form-control" id="mtxtCuit">
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">Contacto</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtContacto" class="form-control" id="mtxtContacto">
		            </div>
		        </div>

		    <!--   <div class="form-group">
		            <label class="col-sm-3 control-label">Otro</label>
		            <div class="col-sm-9">
		            	<select class="form-control" id="mcboOtro" name="mcboOtro">
		            		<option value="">:: Elija</option>
		            		<option value="3">1</option>
		            		<option value="5">2</option>
		            		<option value="7">3</option>
		            	</select>
		            </div>
		        </div> -->
			</div>
		  </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="mbtnCerrarModal" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-info" id="mbtnUpdProveedor">Actualizar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Edit Hasta Aquí-->

<!-- Modal Eliminar -->
<div class="modal fade" id="modalDelProveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">

      <div class="modal-header bg-red-active">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Eliminar Proveedor</h4>
      </div>

      <div class="modal-body">
	      <form class="form-horizontal">
	      	<!-- parametros ocultos -->
	      	<input type="hidden" id="mhdnIdProveedorDel">
	      	
			<div class="box-body">
		        <div class="form-group">
		            <label class="col-sm-3 control-label text-red">Se va a eliminar el Proveedor:</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtNfantasiaDel" class="form-control" id="mtxtNfantasiaDel" readonly="true">
		            </div>
		        </div>	      
			</div>
		  </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="mbtnDelCerrarModal" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-info" id="mbtnDelProveedor">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Eliminar Hasta Aquí-->

<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>
