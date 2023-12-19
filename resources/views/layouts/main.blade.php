<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Pemad Programnmer</title>

    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>
<body>
    
    @include('partials.header')

    <div class="nav-wrapper">
        <div class="container">
            @if(Session::has('success'))
            <div class="alert-show success" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" onclick="XFunction()">X</button>
            </div>    
            @endif
            @if(Session::has('success-danger'))
            <div class="alert-show danger" role="alert">
                <strong>{{ Session::get('success-danger') }}</strong>
                <button type="button" onclick="XFunction()">X</button>
            </div>    
            @endif
        </div>
    </div>

    @yield('content')

    @include('partials.footer')

    @if(request()->is('company*') || request()->is('penawaran*') || request()->is('jobs*') || request()->is('projects*'))
        <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <script>
            var cks = document.querySelectorAll(".my-editor");
            for(var y = 0; y < cks.length; y++) {
                CKEDITOR.replace(cks[y]);
            }
        </script>
    @endif
    @if(request()->is('penawaran*'))
        @stack('masking')
    @endif

    <script defer> //atau bisa menggunakan async
        function XFunction() {
            var x = document.querySelector(".alert-show");
            x.classList.add('x-none');
        }
    </script>
</body>
</html>