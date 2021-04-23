@php
    $tabs = [
       ['title' => 'Informações','link' => route('admin.videos.edit',['user' => $video->id])],
       /*['title' => 'Perfil','link' => route('admin.users.profile.edit',['user' => $user->id])],*/
    ]
@endphp

<h3>Gerenciar usuário</h3>
<div class="text-right">
    {!! Button::link('Listar Videos')->asLinkTo(route('admin.videos.index')) !!}
</div>
{!! \Navigation::tabs($tabs) !!}
<div>
    {!! $slot !!}
</div>