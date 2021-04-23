@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Ver Video</h3>
            @php
                $linkEdit = route('admin.videos.edit',['video' => $video->id]);
                $linkDelete = route('admin.videos.destroy',['video' => $video->id]);
            @endphp
            {!! Button::primary(Icon::pencil().' Editar')->asLinkTo($linkEdit) !!}
            {!!
            Button::danger(Icon::remove().' Excluir')->asLinkTo($linkDelete)
                ->addAttributes([
                    'onclick' => "event.preventDefault();document.getElementById(\"form-delete\").submit();"
                ])
            !!}
            @php
                $formDelete = FormBuilder::plain([
                    'id' => 'form-delete',
                    'url' => $linkDelete,
                    'method' => 'DELETE',
                    'style' => 'display:none'
                ])
            @endphp
            {!! form($formDelete) !!}
            <br/><br/>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th scope="row">ID</th>
                    <td>{{$video->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Título</th>
                    <td>{{$video->title}}</td>
                </tr>
                <tr>
                    <th scope="row">URL</th>
                    <td>{{$video->url}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
