<!DOCTYPE html>
<html lang="en">
@yield('head')
@include('layouts.layout_admin.head_admin')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @yield('content')
    </div>


    <script>
        
            $('#deleteBook').on('show.bs.modal', function(event){
                var button = $(event.relatedTarget)
                var book_id = button.data('bookid')
                var modal = $(this);
                modal.find('.modal-body #book_id').val(book_id);
            })
        
    </script>
    @yield('scripts')
    @include('layouts.layout_admin.script_admin')
    @show


</body>
</html>