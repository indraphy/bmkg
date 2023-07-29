

<footer class="main-footer">
    <strong>SIPSI Stasiun Geofisika Lampung Utara</a>.</strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="<?= base_url() ?>/template/plugins/jquery/jquery.min.js"></script>

<script src="<?= base_url() ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url() ?>/template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>/template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/select2/js/select2.full.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/toastr/toastr.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url() ?>/template/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="<?= base_url() ?>/template/plugins/dropzone/min/dropzone.min.js"></script>
<script src="<?= base_url() ?>/template/dist/js/adminlte.min.js?v=3.2.0"></script>

<!-- <script src="<?= base_url() ?>/template/dist/js/demo.js"></script> -->

<script>
  $(function () {
    
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "ordering": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(function () {
    
    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    $('#tanggalsurat').datetimepicker({
        format: 'L'
    });
  });
</script>
<script>
  window.setTimeout(function(){
      $('.alert').fadeTo(500,0).slideUp(500, function(){
        $(this).remove();
      });
    }, 3000);
</script>

</body>
</html>
