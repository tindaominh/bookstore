<!-- jQuery -->
<script src="{{URL::asset('public/AdminLTE-master/plugins/jquery/jquery.min.js')}}"></script>
<!-- DataTables -->
<script src="{{URL::asset('public/AdminLTE-master/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('public/AdminLTE-master/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('public/AdminLTE-master/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('public/AdminLTE-master/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<!-- icons bootstraps -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- page script -->

<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="{{URL::asset('public/js/jquery.js')}}"></script> -->
<script src="{{asset('public/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('public/js/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('public/js/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('public/js/portfolio/jquery.quicksand.js')}}"></script>
<script src="{{asset('public/js/portfolio/setting.js')}}"></script>
<script src="{{asset('public/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('public/js/animate.js')}}"></script>
<script src="{{asset('public/js/custom.js')}}"></script>
<script src="{{asset('public/js/alphabook/custom.js')}}"></script>
<script src="{{URL::asset('public/ckeditor/ckeditor.js')}}"></script>


<script>
$(function () {
    $("#example1").DataTable({
    "responsive": true,
    "autoWidth": false,
    });
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