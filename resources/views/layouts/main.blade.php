<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
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