        </div><!-- /.content -->

      </div><!-- /.content-wrapper -->
      <!--Aquí comienza el pie de página-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017 <a href="http://coopevic.com.ar">COOPEVIC Cooperativa de Software Libre</a>.</strong> Todos los derechos reservados.
      </footer>

    </div><!-- ./wrapper -->

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url();?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url();?>assets/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- page script -->
    <!--<script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>-->
    
    <!-- script del proyecto -->
    <?php if($this->uri->segment(1)=='cpersona') {?>
       <script src="<?php echo base_url();?>js/persona.js"></script>       
    <?php }?>
     <!-- script del proyecto -->
    <?php if($this->uri->segment(1)=='cproveedor') {?>
       <script src="<?php echo base_url();?>js/proveedor.js"></script>       
    <?php }?>
    <!-- script del proyecto -->
    <?php if($this->uri->segment(1)=='cproducto') {?>
       <script src="<?php echo base_url();?>js/producto.js"></script>       
    <?php }?>
    <!-- script del proyecto -->
    <?php if($this->uri->segment(1)=='cproveedor') {?>
       <script src="<?php echo base_url();?>js/condiva.js"></script>       
    <?php }?>
    <?php if($this->uri->segment(1)=='cproveedor') {?>
       <script src="<?php echo base_url();?>js/rubro.js"></script>       
    <?php }?>
    <!-- script del proyecto -->
    <?php if($this->uri->segment(1)=='cproducto') {?>
       <script src="<?php echo base_url();?>js/rubro.js"></script>       
    <?php }?>   
  </body>
</html>
