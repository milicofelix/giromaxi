@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Ver usuário</h3>
            @php
                $linkEdit = route('admin.contacts.index');
                $linkDelete = route('admin.contacts.destroy',['contact' => $contact->id]);
            @endphp
            {!! Button::primary(Icon::pencil().' Voltar')->asLinkTo($linkEdit) !!}
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
                    <td>{{$contact->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Nome</th>
                    <td>{{$contact->name}}</td>
                </tr>
                <tr>
                    <th scope="row">E-mail</th>
                    <td>{{$contact->email}}</td>
                </tr>
                <tr>
                    <th scope="row">Mensagem</th>
                    <td>{{$contact->message}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
