<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Giromaxi') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ url('images/logo2.ico') }}">
</head>
<body>
    @if(Session::has('message'))

        <div class="container">
            {!! Alert::success(Session::get('message'))->close() !!}
        </div>
    @endif
    @yield('menu')
    <!--Slide show-->
    @yield('slide-show')
    <!--Serviços-->
    @yield('servicos')
    <!-- Parceiros -->
    @yield('parceiros')
    <!-- comunicacao visual -->
    @yield('comunicacao_visual')
    <!-- router -->
    @yield('router')
    <!-- Mídias Externas -->
    @yield('midias_externas')
    <!-- Soluções Digitais -->
    @yield('solucoes_digitais')
    <!-- Portfolio -->
    @yield('portfolio')
    <!-- Contato -->
    @yield('contato')
    <!-- Rodapé -->
    @yield('rodape')

    <a href="#top" class="fa fa-arrow-circle-up" aria-hidden="true">Topo</a>

    <script src="{{ asset('js/jquery-min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
