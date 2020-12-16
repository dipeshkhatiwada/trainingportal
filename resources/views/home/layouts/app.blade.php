<!DOCTYPE html>
<html lang="en">
@include('home.includes.head')

<body>
@include('home.includes.top')
@yield('main')

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
