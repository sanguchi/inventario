<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $_SESSION['enviado']=TRUE; ?>

<div class="row">
	 <!--<?php //echo validation_errors('<div class="alert alert-danger col-md-6 col-md-offset-2">','</div>'); ?> -->
	<div class="col-md-8">
	  <!-- Horizontal Form -->
	  <div class="box box-info">
	    <div class="box-header with-border">
	      <h2 class="box-title">Cargar Proveedor</h2>
	    </div><!-- /.box-header -->
	    <?php echo $mensaje; ?> <!-- /.Muestro mensaje --> 
	    <!-- form start -->
	    <form action="<?php echo base_url(); ?>cproveedor/guardar" method="Post" class="form-horizontal">
	      <div class="box-body">

	        <div class="form-group">
	          <label for="inputNfantasia" class="col-sm-2 control-label">Nombre de Fantasía</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtNfantasia" value="<?php echo set_value('txtNfantasia'); ?>" size="50" id="inputNfantasia" placeholder="Ingrese Nombre de Fantasía">
	          	<?php echo form_error('txtNfantasia', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputRsocial" class="col-sm-2 control-label">Razón Social</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtRsocial" value="<?php echo set_value('txtRsocial'); ?>" size="50" id="inputRsocial" placeholder="Ingrese Razón Social">
	          	<?php echo form_error('txtRsocial', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputDireccion" class="col-sm-2 control-label">Dirección</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtDireccion" value="<?php echo set_value('txtDireccion'); ?>" size="50" id="inputDireccion" placeholder="Ingrese Dirección">
	          	<?php echo form_error('txtDireccion', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputCiudad" class="col-sm-2 control-label">Ciudad - Provincia</label>
	          <div class="col-sm-10">
	            <Select id="cboCiudad" class="form-control" name="selCiudad">
				 <option value="" >:Elija</option>
					 <option value="<?php if (isset($_POST['selCiudad']))
										    {
										        echo $_POST['selCiudad'];
										    } 
								    ?>" selected="selected">
									<?php if (isset($_POST['textociudad']))
										    {
										        echo $_POST['textociudad'];
										    } 
									?>
					 </option>
				</Select>
	           <?php echo form_error('selCiudad', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>
            <input type="hidden" name="textociudad" size="40" id="textociudad" value="<?php echo set_value('textociudad'); ?>">
	           
	        <div class="form-group">
	          <label for="inputCpostal" class="col-sm-2 control-label">Código Postal</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtCpostal" value="<?php echo set_value('txtCpostal'); ?>" size="10" id="inputCpostal" placeholder="Ingrese Código Postal">
	          	<?php echo form_error('txtCpostal', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputEmail" class="col-sm-2 control-label">Email</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtEmail" value="<?php echo set_value('txtEmail'); ?>" size="50" id="inputEmail" placeholder="Ingrese Email"> 
	          	<?php echo form_error('txtEmail', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputTelefono" class="col-sm-2 control-label">Teléfono</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtTelefono" value="<?php echo set_value('txtTelefono'); ?>" size="20" id="inputTelefono" placeholder="Ingrese Telefono"> 
	          	<?php echo form_error('txtTelefono', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputCondiva" class="col-sm-2 control-label">Condición IVA</label>
	          <div class="col-sm-10">
	            <Select id="cboCondiva" class="form-control" name="selCondiva">
				 <option value="">:Elija</option>
					 <option value="<?php if (isset($_POST['selCondiva']))
										    {
										        echo $_POST['selCondiva'];
										    } 
								    ?>" selected="selected">
									<?php if (isset($_POST['textoCondiva']))
										    {
										        echo $_POST['textoCondiva'];
										    } 
									?>
					 </option>				
				</Select>
	          	<?php echo form_error('selCondiva', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>
	 		<input type="hidden" name="textoCondiva" size="40" id="textoCondiva" value="<?php echo set_value('textoCondiva'); ?>">

	        <div class="form-group">
	          <label for="inputCuit" class="col-sm-2 control-label">CUIT</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtCuit" value="<?php echo set_value('txtCuit'); ?>" size="11" id="inputCUIT" placeholder="Ingrese CUIT">
	            <?php echo form_error('txtCuit', '<div class="error text-red">', '</div>'); ?>
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputContacto" class="col-sm-2 control-label">Contacto</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtContacto" value="<?php echo set_value('txtContacto'); ?>" size="50" id="inputContacto" placeholder="Ingrese Contacto">
	            <?php echo form_error('txtContacto', '<div class="error text-red">', '</div>'); ?>
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
	        	        	        	        
	      </div><!-- /.box-body -->
	      <div class="box-footer">
	       <!--<button type="submit" class="btn btn-default"  value="Cancelar">Cancelar</button>  -->
	        <button type="submit" class="btn btn-info pull-right" value="Guardar">Guardar</button>
	      </div><!-- /.box-footer -->
	    </form>
	  </div><!-- /.box -->
	</div><!--/.col (right) -->         
</div><!-- /.row --> 


<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>

