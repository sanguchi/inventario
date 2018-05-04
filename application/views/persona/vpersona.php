<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
             
	<h1>Cargo Persona</h1>
	<form action="<?php echo base_url(); ?>cpersona/guardar" method="Post">
	<table>
		<tr>	
			<td><label>DNI</label></td>
			<td><input type="text" name="txtDNI" maxlength="8"></td>
		</tr>
		<tr>	
			<td><label>Nombre</label></td>
			<td><input type="text" name="txtNombre"></td>
		</tr>
		<tr>	
			<td><label>Apellido</label></td>
			<td><input type="text" name="txtApellido"></td>
		</tr>
		<tr>	
			<td><label>Email</label></td>
			<td><input type="email" name="txtEmail"></td>
		</tr>
		<tr>	
			<td><label>Fecha de Nacimiento</label></td>
			<td><input type="date" name="datFecNac"></td>
		</tr>
		<tr>	
			<td><label>Ciudad</label></td>
			<td><div class="form-group">
					<Select id="cboCiudad" class="form-control">
						<option value="">:Elija</option>
					</Select></td>
				</div>
		</tr>	
		<tr>	
			<td colspan="2"><label>Usuario</label></td>
		</tr>
		<tr>
			<td><label>Usuario</label></td>
			<td><input type="text" name="txtUsuario"></td>
		</tr>
		<tr>	
			<td><label>Clave</label></td>
			<td><input type="password" name="txtClave"></td>
		</tr>
		<tr>	
			<td colspan="2"><input type="submit" value="Guardar"></td>
		</tr>	
	</table>	
	</form>
	<a href="<?php echo base_url();?>clogin">Loguearse</a>

<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>