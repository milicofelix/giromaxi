<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ url('images/logo.ico') }}">
</head>
<body>
<div id="app">
    @php
        $navbar = Navbar::withBrand(config('app.name'), route('admin.dashboard'))->inverse();
        if(Auth::check()){
            $arrayLinks = [

                ['link' => route('admin.users.index'), 'title' => 'Usuário'],
                ['link' => route('admin.videos.index'), 'title' => 'Videos'],
                ['link' => route('admin.contacts.index'), 'title' => 'E-mails'],

                        ];

            $navbar->withContent(Navigation::links($arrayLinks));

                    $arrayLinksRight = [
                        [
                            Auth::user()->name,
                            [
                                [
                                    'link' => route('admin.dashboard'),
                                    'title' => 'Configurações'
                                ],
                                [
                                    'link' => route('logout'),
                                    'title' => 'Sair',
                                    'linkAttributes' => [
                                        'onclick' => "event.preventDefault();document.getElementById(\"form-logout\").submit();"
                                    ]
                                ]
                            ]
                        ]
                    ];
                    $navbar->withContent(Navigation::links($arrayLinksRight)->right());

                   $formLogout = FormBuilder::plain([
                        'id' => 'form-logout',
                        'url' => route('logout'),
                        'method' => 'POST',
                        'style' => 'display:none'
                    ]);
                }
    @endphp
    {!! $navbar !!}

    @if(Auth::check())
        {!! form($formLogout) !!}
    @endif

    @if(Session::has('message'))
        <div class="container hidden-print">
            {!! Alert::success(Session::get('message'))->close() !!}
        </div>
    @endif
    @yield('content')
</div>
<footer>
    <div class="container py-5">
        <div class="container py-5">
            <div class="row text-center py-2">
                <img src="{{ url('images/logo_giromaxi.png') }}" height="80" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="row text-center">
                <small>&copy;2020 Todos os direitos reservados</small>
            </div>

        </div>
    </div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
