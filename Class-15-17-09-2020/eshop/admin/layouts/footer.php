<!-- jQuery 3 -->
<script src="assets/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/datatables.net/js/jquery.dataTables.js"></script>
<script src="assets/datatables.net-bs/js/dataTables.bootstrap.js"></script>
<!-- Morris.js charts -->
<script src="assets/raphael/raphael.min.js"></script>
<script src="assets/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="assets/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/moment/min/moment.min.js"></script>
<script src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/fastclick/lib/fastclick.js"></script>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=bl182cv0ud67yxrbs9uor8xfscrz38s7bb5swlqoo5y4v7o6"></script>

<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
<script src="js/notify.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<script>
  tinymce.init({ selector:'textarea' });
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
