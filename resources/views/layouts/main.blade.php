<!DOCTYPE html>
<html lang="en">
    @yield('head')
        @include('layouts.head')
    @show
<body>

   
    @section('header')
    @show

    @yield('content')

    @yield('scripts')
        @include('layouts/script')
        
    @show
    
    @section('footer')
        @include('layouts.footer')
        
    @show
</body>
</html>