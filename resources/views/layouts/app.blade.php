<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'মূলপাতা | আমার স্টুডেন্ট')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/jssor.slider.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css') }}">
    @yield('styles')

</head>


<body>
    {{-- <div id="app"> --}}

        @include('frontend.partial.header')

        <main>
            @yield('content')
        </main>



        @if (Request::is('contact*' || 'blog*'))
        @include('frontend.partial.footer')
        @endif

    {{-- </div> --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/js/jssor.slider-28.1.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jssor.slider.js') }}"></script>
    <script src="https://kit.fontawesome.com/4b5d72e539.js" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/app.js') }}"></script>



    @yield('scripts')
</body>

</html>
