<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="{{ asset('ui/frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CMerriweather:400,300,300italic,400italic,700,700italic">
    <link rel="stylesheet" href="{{ asset('ui/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/frontend/css/novi.css') }}">
</head>

<body>
 
    <div class="page text-center">
        <x-frontend.layouts.partials.header>

        </x-frontend.layouts.partials.header>
            {{ $slot }}
        <x-frontend.layouts.partials.footer>
            
        </x-frontend.layouts.partials.footer>
    </div>
    {{-- <div class="snackbars" id="form-output-global"></div><a class="builder-button" href="http://whizthemes.com/builder/b_patshala/patshala-builder" target="_blank"><img src="images/novi-icon-26x26.png" alt="" width="26" height="26">Try builder</a>
    <div class="snackbars" id="form-output-global"></div> --}}
    <script src="{{ asset('ui/frontend/js/core.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/js/script.js') }}"></script>

</body>

</html>

