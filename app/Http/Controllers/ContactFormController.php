<?php

namespace ADR\Http\Controllers;

use Illuminate\Http\Request;
use ADR\Mail\ContatoEmail;

class ContactFormController extends Controller
{
    private $name;
    private $email;
    private $subject;
    private $message;

    public function __construct(Request $request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
        $this->subject = $request->subject;
        $this->message = $request->message;
    }

    public function sendMail()
    {
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ];

        \Mail::to(config('mail.from.address'))
            ->send(new ContatoEmail($data));
    }
}
