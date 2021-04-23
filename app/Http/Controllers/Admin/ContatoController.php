<?php

namespace ADR\Http\Controllers\Admin;

use ADR\Models\Contact;
use Illuminate\Http\Request;
use ADR\Http\Controllers\Controller;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contact::paginate();
        return view('admin.contacts.index',compact('contatos'));
    }

    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }


    public function destroy(Contact $contact)
    {
        $contact->delete();
        session()->flash('message','Email excluído com sucesso');
        return redirect()->route('admin.contacts.index');
    }
}
