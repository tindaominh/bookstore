<!DOCTYPE html>
<html lang="en">
@yield('head')
@include('layouts.layout_admin.head_admin')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @yield('content')
    </div>


    
    @yield('scripts')
    @include('layouts.layout_admin.script_admin')
    @show


</body>
</html>