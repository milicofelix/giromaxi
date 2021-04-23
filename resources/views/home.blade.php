@extends('layouts.app')

{{--<div id="video-viewport">--}}
    {{--<video width="100%" height="1080px" autoplay="" loop="">--}}
        {{--<source src="https://brilhomaissp.com.br/wp-content/themes/brilhomaissite/video.mp4" type="video/mp4">--}}

    {{--</video>--}}
{{--</div>--}}

@section('menu')
    @include('site.menu')
@endsection

@section('slide-show')
    @include('site.banner')
@endsection

@section('servicos')
    @include('site.empresa')
@endsection

@section('parceiros')
    @include('site.servicos')
@endsection

@if($video_exists)
    @section('comunicacao_visual')
        @include('site.comunicacao_visual')
    @endsection
@endif

@if($video_router_exists)
    @section('router')
        @include('site.router')
    @endsection
@endif

@if($video_me_exists)
    @section('midias_externas')
        @include('site.midias_externas')
    @endsection
@endif

@if($video_sd_exists)
    @section('solucoes_digitais')
        @include('site.solucoes_digitais')
    @endsection
@endif

@section('portfolio')
    @include('site.portfolio')
@endsection

@section('contato')
    @include('site.contato')
@endsection

@section('rodape')
    @include('site.rodape')
@endsection

