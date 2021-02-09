<!DOCTYPE html>
<html lang="en">
@include('home.includes.head')

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="uQd7xmX7"></script>
@include('home.includes.top')
@include('home.includes.menu')
@yield('main')
@include('home.includes.footer')
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('home/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('home/lib/slick/slick.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('home/js/main.js')}}"></script>
@yield('js')
</body>
</html>
