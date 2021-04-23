<?php

namespace ADR\Forms;

use Kris\LaravelFormBuilder\Form;

class ContactForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
                'label' => 'Nome',
                'rules' => 'required|max:255'
            ])
            ->add('email', 'email',[
                'label' => 'E-mail',
                'rules' => "required|email"
            ])->add('subject', 'text', [
                'label' => 'Assunto',
                'rules' => 'required|max:255'
            ])
            ->add('message','textarea', [
                'label' => 'Mensagem'
            ]);
    }

}
