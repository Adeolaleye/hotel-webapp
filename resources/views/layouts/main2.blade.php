<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>

    <div class="wrapper">
        @include('includes.header')
            
        @yield('content')
        
        @include('includes.footer')
    </div>
    @include('includes.foot')
</body>
</html>