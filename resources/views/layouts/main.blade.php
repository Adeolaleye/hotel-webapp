<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
    <div class="wrapper">
        @include('includes.header')

        <!-- ========== REVOLUTION SLIDER ========== -->
        @include('includes.slider')
        
        <main>
            @yield('content')
        </main>
        
        @include('includes.footer')
    </div>
    @include('includes.foot')
</body>
</html>