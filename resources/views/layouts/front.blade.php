<!doctype html>
<html lang="en">
@include('front.includes.header')

<body>
        @include('front.includes.loader')
        
        @include('front.includes.bar')

        @include('front.includes.navbar')

        @include('front.includes.messages')

        @yield('content')
        
        @include('front.includes.footer')
        
</body>
</html>
