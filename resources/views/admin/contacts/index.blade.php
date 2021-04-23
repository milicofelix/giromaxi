@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem de emails enviados do site</h3>
        </div>
        <div class="row">
            {!!
            Table::withContents($contatos->items())
            ->striped()
            ->callback('Ações', function($field,$model){
                $linkEdit = route('admin.users.edit',['user' => $model->id]);
                $linkShow = route('admin.contacts.show',['contact' => $model->id]);
                return Button::link(Icon::create('folder-open').'&nbsp;&nbsp;Ver')->asLinkTo($linkShow);
            })
            !!}
        </div>

        {!! $contatos->links() !!}
    </div>
@endsection