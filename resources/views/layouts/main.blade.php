<!DOCTYPE html>
<html lang="en">
@yield('head')
@include('layouts.head')
<body>
    <div id="wrapper">
        @yield('content')
    </div>
    @yield('scripts')
    @include('layouts.script')
    @show


</body>
</html>