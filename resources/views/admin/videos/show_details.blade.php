@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Usuário - {{$video->title}}</h3>
            {!! Button
                    ::normal('Listar Vídeos')
                    ->appendIcon(Icon::thList())
                    ->asLinkTo(route('admin.videos.index'))
                    ->addAttributes([
                        'class' => 'hidden-print'
                    ])
            !!}
            <br/><br/>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th scope="row">#</th>
                    <td>{{$video->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Título</th>
                    <td>{{$video->title}}</td>
                </tr>
                <tr>
                    <th scope="row">url</th>
                    <td>{{$video->url}}</td>
                </tr>

                </tbody>
            </table>

        </div>
    </div>
@endsection
