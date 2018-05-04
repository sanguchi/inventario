<div class="row">
   <div class="col-md-12">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo "Usuario:" .$this->session->userdata('s_usuario'); ?></h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form action="<?php echo base_url(); ?>cpersona/actualizar" method="POST" class="form-horizontal">
          <div class="box-body">
            
            <div class="form-group">
              <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="txtNombre" id="inputEmail3" placeholder="Ingrese su Nombre">
              </div>
            </div>
            
            <div class="form-group">
              <label for="inputApellido" class="col-sm-2 control-label">Apellido</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="txtApellido"id="inputPassword3" placeholder="Ingrese su Apellido">
             </div>
            </div>

            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Correo Electrónico</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="txtEmail" id="inputEmail3" placeholder="Ingrese su Correo Electrónico">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-10 pull-right" >
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </div>
            </div><!-- /.box-footer -->

          </div><!-- /.box-body -->
        </form>


        <form action="<?php echo base_url(); ?>cpersona/eliminar" method="POST" class="form-horizontal">
          <div class="box-body">
            
            <div class="form-group">
              <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="txtIdPersona" id="inputIdPersona" placeholder="Ingrese el ID de la Persona">
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-10 pull-right" >
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </div>
            </div>
          </div>
        </form>

      </div><!-- /.box -->
    </div><!-- /.class="col-md-6" -->
</div><!-- /.row -->          
