<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $_SESSION['enviado']=TRUE; ?>

	 <!--<?php //echo validation_errors('<div class="alert alert-danger col-md-6 col-md-offset-2">','</div>'); ?> -->
	<div class="col-md-8">
	  <!-- Horizontal Form -->
	  <div class="box box-info">
	    <div class="box-header with-border">
	      <h2 class="box-title">Cargo Producto</h2>
	    </div><!-- /.box-header -->
	    <?php echo $mensaje; ?> <!-- /.Muestro mens --> 
	    <!-- form start -->
	    <form action="<?php echo base_url(); ?>cproducto/guardar" method="Post" class="form-horizontal">
	      <div class="box-body">

	        <div class="form-group">
	          <label for="inputCodigo" class="col-sm-2 control-label">Código</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtCodigo" value="<?php echo set_value('txtCodigo'); ?>" size="50" id="inputCodigo" placeholder="Ingrese un código para el Producto">
	          	<?php echo form_error('txtCodigo', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputDescripcion" class="col-sm-2 control-label">Descripción</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtDescripcion" value="<?php echo set_value('txtDescripcion'); ?>" size="50" id="inputDescripcion" placeholder="Ingrese Descripción">
	          	<?php echo form_error('txtDescripcion', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputRubro" class="col-sm-2 control-label">Rubro</label>
	          <div class="col-sm-10">
	            <Select id="cboRubro" class="form-control" name="selRubro" value="<?php echo set_value('selRubro'); ?>">
					<option value="">:Elija</option>
					<option value="<?php if (isset($_POST['selRubro']))
									    {
									        echo $_POST['selRubro'];
									    } 
							    	?>" selected="selected">
							    	<?php if (isset($_POST['textoRubro']))
									    {
									        echo $_POST['textoRubro'];
									    } 
								    ?>
					</option>
				</Select>
	            <?php echo form_error('selRubro', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>
	        <input type="hidden" name="textoRubro" size="40" id="textoRubro" value="<?php echo set_value('textoRubro'); ?>">

	        <div class="form-group">
	          <label for="inputPresentacion" class="col-sm-2 control-label">Presentación</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtPresentacion" value="<?php echo set_value('txtPresentacion'); ?>" size="50" id="inputPresentacion" placeholder="Ingrese Presentación">
	          	<?php echo form_error('txtPresentacion', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputUnidad" class="col-sm-2 control-label">Unidad</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtUnidad" value="<?php echo set_value('txtUnidad'); ?>" size="10" id="inputUnidad" placeholder="Ingrese Unidad">
	          	<?php echo form_error('txtUnidad', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputLote" class="col-sm-2 control-label">Lote</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtLote" value="<?php echo set_value('txtLote'); ?>" size="50" id="inputLote" placeholder="Ingrese Lote"> 
	          	<?php echo form_error('txtLote', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputPartida" class="col-sm-2 control-label">Partida</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtPartida" value="<?php echo set_value('txtPartida'); ?>" size="20" id="inputPartida" placeholder="Ingrese Partida"> 
	          	<?php echo form_error('txtPartida', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputMarca" class="col-sm-2 control-label">Marca</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtMarca" value="<?php echo set_value('txtMarca'); ?>" size="11" id="inputMarca" placeholder="Ingrese Marca">
	            <?php echo form_error('txtMarca', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputVencimiento" class="col-sm-2 control-label">Vencimiento</label>
	          <div class="col-sm-10">
	           <div class="input-group">
	            <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
	            <input type="text" class="form-control" name="datVencimiento" value="<?php echo set_value('datVencimiento'); ?>" size="50" id="inputVencimiento" placeholder="Seleccione fecha de Vencimiento">
	            <?php echo form_error('datVencimiento', '<div class="error text-red">', '</div>'); ?>
	           </div>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputPPedido" class="col-sm-2 control-label">Punto Pedido</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtPuntoPedido" value="<?php echo set_value('txtPuntoPedido'); ?>" size="50" id="inputPPedido" placeholder="Ingrese Punto Pedido">
	            <?php echo form_error('txtPuntoPedido', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>
	        
	      	<div class="form-group">
	          <label for="inputModStock" class="col-sm-2 control-label">Modifica Stock</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtModStock" value="<?php echo set_value('txtModStock'); ?>" size="50" id="inputModStock" placeholder="Modifica Stock">
	            <?php echo form_error('txtModStock', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputStockActual" class="col-sm-2 control-label">Stock Actual</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtStockActual" size="50" id="inputStockActual" placeholder="Stock Actual" readonly=true>
	          </div>
	        </div>

	      </div><!-- /.box-body -->
	      <div class="box-footer">
	       <!--<button type="submit" class="btn btn-default"  value="Cancelar">Cancelar</button>  -->
	        <button type="submit" id="btnGuardarProductos" class="btn btn-info pull-right" value="Guardar">Guardar</button>
	      </div><!-- /.box-footer -->
	    </form>
	  </div><!-- /.box -->
	</div><!--/.col (right) -->         
</div><!-- /.row --> 


<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>
