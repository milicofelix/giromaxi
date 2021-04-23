@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem de Videos</h3>
            {!! Button::primary('Novo Video')->asLinkTo(route('admin.videos.create')) !!}
        </div>
        <div class="row">
            {!!
            Table::withContents($videos->items())
            ->striped()
            ->callback('Ações', function($field,$model){
                $linkEdit = route('admin.videos.edit',['video' => $model->id]);
                $linkShow = route('admin.videos.show',['video' => $model->id]);
                return Button::link(Icon::create('pencil').' Editar')->asLinkTo($linkEdit).'|'.
                    Button::link(Icon::create('folder-open').'&nbsp;&nbsp;Ver')->asLinkTo($linkShow);
            })
            !!}
        </div>

        {!! $videos->links() !!}
    </div>
@endsection