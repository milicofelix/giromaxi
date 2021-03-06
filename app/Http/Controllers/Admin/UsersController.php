<?php

namespace ADR\Http\Controllers\Admin;

use ADR\Models\User;
use Kris\LaravelFormBuilder\Form;
use ADR\Forms\UserForm;
use Illuminate\Http\Request;
use ADR\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::paginate();
        return view('admin.users.index',compact('users'));
    }

    public function create()
    {
        $form = \FormBuilder::create(UserForm::class, [
            'url' => route('admin.users.store'),
            'method' => 'POST'
        ]);
        return view('admin.users.create', compact('form'));
    }

    public function store(Request $request)
    {
        /** @var Form $form */
        $form = \FormBuilder::create(UserForm::class);

        if (!$form->isValid()) {
            return redirect()
                ->back()
                ->withErrors($form->getErrors())
                ->withInput();
        }

        $data = $form->getFieldValues();
        $result = User::createFully($data);

        $request->session()->flash('message','Usuário criado com sucesso');
        $request->session()->flash('user_created',[
            'id' => $result['user']->id,
            'password' => $result['password']
        ]);
        return redirect()->route('admin.users.show_details');
    }

    public function showDetails(){
        $userData = session('user_created');
        $user = User::findOrFail($userData['id']);
        $user->password = $userData['password'];

        return view('admin.users.show_details',compact('user'));
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $form = \FormBuilder::create(UserForm::class, [
            'url' => route('admin.users.update',['user' => $user->id]),
            'method' => 'PUT',
            'model' => $user
        ]);

        return view('admin.users.edit', compact('form'));
    }

    public function update(User $user)
    {
        /** @var Form $form */
        $form = \FormBuilder::create(UserForm::class, [
            'data' => ['id' => $user->id]
        ]);

        if (!$form->isValid()) {
            return redirect()
                ->back()
                ->withErrors($form->getErrors())
                ->withInput();
        }

        $data = $form->getFieldValues();
        $user->update($data);
        session()->flash('message','Usuário editado com sucesso');
        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('message','Usuário excluído com sucesso');
        return redirect()->route('admin.users.index');
    }
}
