<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }  

        html {
        font-size: 16px;
        }
        @media (min-width: 768px) {
        html {
            font-size: 18px;
        }
        }

        .container {
        max-width: 960px;
        }

        .pricing-header {
        max-width: 700px;
        }

        .card-deck .card {
        min-width: 220px;
        }    

        .jumbotron {
        padding-top: 3rem;
        padding-bottom: 3rem;
        margin-bottom: 0;
        background-color: #fff;
        }
        @media (min-width: 768px) {
        .jumbotron {
            padding-top: 6rem;
            padding-bottom: 6rem;
        }
        }

        .jumbotron p:last-child {
        margin-bottom: 0;
        }

        .jumbotron h1 {
        font-weight: 300;
        }

        .jumbotron .container {
        max-width: 40rem;
        }

        footer {
        padding-top: 3rem;
        padding-bottom: 3rem;
        }

        footer p {
        margin-bottom: .25rem;
        }          
              
    </style>
  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white p-0 m-0">
    <div id="app">
        </nav>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white     border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal">
                <a href="{{ url('/') }}">Todo</a>   
            </h5>
            <nav class="my-2 my-md-0 mr-auto">
                <a class="p-2 text-dark" href="{{ url('/cheatsheet') }}">Cheatsheet</a>
                <a class="p-2 text-dark" href="{{ url('/masterbase') }}">Masterbase</a>
                <a class="p-2 text-dark" href="{{ url('/packages') }}">Packages</a>
                <a class="p-2 text-dark" href="{{ url('/feature-ideas') }}">Feature Ideas</a>
                <a class="p-2 text-dark" href="{{ url('/code-refactor') }}">Code Refactor</a>
                <a class="p-2 text-dark" href="{{ url('/study-topics') }}">Study Topics</a>
            </nav>
            <nav class="my-0 mr-md-0 font-weight-light">
                <a class="p-2 text-dark" href="{{ url('/login') }}">Login</a>
                <a class="p-2 text-dark" href="{{ url('/register') }}">Register</a>            
            </nav>
        </div>        

        <main class="px-0 m-0 py-0">
            @yield('content')
        </main>
    </div>
</body>
</html>
