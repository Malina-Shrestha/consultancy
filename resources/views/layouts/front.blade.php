<!doctype html>
<html lang="en">
@include('front.includes.header')

<body>
        @include('front.includes.loader')
        
        @include('front.includes.bar')

        @include('front.includes.navbar')

        @yield('content')

    

        
        
        @include('front.includes.footer')
            
            {{-- @include('front.includes.bar') --}}
    



{{-- @yield('scripts') --}}
</body>
</html>
