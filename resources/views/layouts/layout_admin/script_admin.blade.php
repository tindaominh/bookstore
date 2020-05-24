<!-- jQuery -->
<script src="{{URL::asset('public/AdminLTE-master/plugins/jquery/jquery.min.js')}}"></script>
<!-- DataTables -->
<script src="{{URL::asset('public/AdminLTE-master/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('public/AdminLTE-master/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('public/AdminLTE-master/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('public/AdminLTE-master/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>


<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="{{URL::asset('public/js/jquery.js')}}"></script> -->
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/jquery.fancybox-media.js')}}"></script>
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
    $('#deleteBook').on('show.bs.modal', function(event){
                var button = $(event.relatedTarget)
                var book_id = button.data('bookid')
                var modal = $(this);
                modal.find('.modal-body #book_id').val(book_id);
            })
</script>