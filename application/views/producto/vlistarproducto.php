<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <div class="row">
    
    <div class="col-xs-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Listado de Productos</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table id="tblProductos" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 5%;background-color: #006699; color: white;">#</th>
                <th style="width: 10%;background-color: #006699; color: white;">Código</th>
                <th style="width: 10%;background-color: #006699; color: white;">Descripción</th>
                <th style="width: 10%;background-color: #006699; color: white;">Rubro</th>
                <th style="width: 10%;background-color: #006699; color: white;">Presentación</th>
                <th style="width: 10%;background-color: #006699; color: white;">Unidad</th>
                <th style="width: 10%;background-color: #006699; color: white;">Lote</th>
                <th style="width: 10%;background-color: #006699; color: white;">Partida</th>
                <th style="width: 10%;background-color: #006699; color: white;">Marca</th>
                <th style="width: 10%;background-color: #006699; color: white;">Vencimiento</th>
                <th style="width: 10%;background-color: #006699; color: white;">Punto Pedido</th>
                <th style="width: 10%;background-color: #006699; color: white;">Stock</th>
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
   <button type="button" id="btnGetProductos" class="btn btn-flat"><i class="fa fa-search"></i>Buscar</button> 
  </div><!-- /.row -->

<!-- Modal Edit -->
<div class="modal fade" id="modalEditProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">

      <div class="modal-header bg-green-active">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Producto</h4>
      </div>

      <div class="modal-body">
	      <form class="form-horizontal">
	      	<!-- parametros ocultos -->
	      	<input type="hidden" id="mhdnIdProducto">
	      	
			<div class="box-body">
		        <div class="form-group">
		            <label class="col-sm-3 control-label">Código</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtCodigo" class="form-control" id="mtxtCodigo" placeholder="">
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">Descripción</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtDescripcion" class="form-control" id="mtxtDescripcion" value="" >
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">Presentación</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtPresentacion" class="form-control" id="mtxtPresentacion">
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">Unidad</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtUnidad" class="form-control" id="mtxtUnidad">
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">Lote</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtLote" class="form-control" id="mtxtLote">
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">Partida</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtPartida" class="form-control" id="mtxtPartida">
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">Marca</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtMarca" class="form-control" id="mtxtMarca">
		            </div>
		        </div>

		        <div class="form-group">
		            <label class="col-sm-3 control-label">Punto Pedido</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtPuntoPedido" class="form-control" id="mtxtPuntoPedido">
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
        <button type="button" class="btn btn-info" id="mbtnActProducto">Actualizar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Edit Hasta Aquí-->

<!-- Modal Eliminar -->
<div class="modal fade" id="modalDelProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">

      <div class="modal-header bg-red-active">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Eliminar Producto</h4>
      </div>

      <div class="modal-body">
	      <form class="form-horizontal">
	      	<!-- parametros ocultos -->
	      	<input type="hidden" id="mhdnIdProductoDel">
	      	
			<div class="box-body">
		        <div class="form-group">
		            <label class="col-sm-3 control-label text-red">Se va a eliminar el Producto:</label>
		            <div class="col-sm-9"> 
		              <input type="text" name="mtxtDescripcionDel" class="form-control" id="mtxtDescripcionDel" readonly="true">
		            </div>
		        </div>	      
			</div>
		  </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="mbtnDelCerrarModal" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-info" id="mbtnDelProducto">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Eliminar Hasta Aquí-->

<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>
