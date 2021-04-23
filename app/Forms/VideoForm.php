<?php

namespace ADR\Forms;

use Kris\LaravelFormBuilder\Form;

class VideoForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text', [
                'label' => 'Título',
                'rules' => 'required|max:255'
            ])
            ->add('url', 'text', [
                'label' => 'Endereço do video',
                'rules' => 'required|max:255'
            ])
            ->add('servico', 'select', [
                'choices' => ['1' => 'Comunicação Visual', '2' => 'Estruturas Metálicas', '3' => 'Soluções Digitais', '4' => 'Cortes Routers', '5' => 'Mídia Externa'],
                'label' => 'Serviços',
                'empty_value' => '=== Selecione um Serviço ==='
            ])
            ->add('desc', 'textarea', [
                'label' => 'Descrição',
                'rules' => 'required'
            ])
           ->add('fullscreen','checkbox', [
                'label' => 'Permitir tela cheia',
                'value' => true,
            ])
            ->add('modestbranding','checkbox', [
                'label' => 'Ocultar Logo Youtube',
                'value' => true,
            ])
            ->add('mute','checkbox', [
                'label' => 'Iniciar video sem volume',
                'value' => true,
            ])
            ->add('controls','checkbox', [
                'label' => 'Exibir controle do video',
                'value' => true,
            ])
        ;
    }

}
