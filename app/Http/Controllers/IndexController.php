<?php

namespace ADR\Http\Controllers;

use ADR\Forms\ContactForm;
use ADR\Models\Contact;
use ADR\Models\Video;
use Kris\LaravelFormBuilder\Form;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $form = \FormBuilder::create(ContactForm::class, [
//            'url' => route('store'),
//            'method' => 'POST'
//        ]);
//        $videos = Video::where('servico', '=','1')->get();
//        $videos_router = Video::where('servico', '=','4')->get();
//        $videos_me = Video::where('servico', '=','5')->get();
//        $videos_sd = Video::where('servico', '=','3')->get();
//
//        $video_exists = $videos->count() > 0;
//        $video_router_exists = $videos_router->count() > 0;
//        $video_me_exists = $videos_me->count() > 0;
//        $video_sd_exists = $videos_sd->count() > 0;
//
//        return view('home', compact('form','videos','video_exists','videos_router','videos_me', 'videos_sd','video_router_exists','video_me_exists','video_sd_exists'));
    return view('index');
    }

    public function store(Request $request)
    {
        /** @var Form $form */
        $form = \FormBuilder::create(ContactForm::class);

        if (!$form->isValid()) {
            return redirect()
                ->back()
                ->withErrors($form->getErrors())
                ->withInput();
        }

        $data = $form->getFieldValues();
        $contato = new ContactFormController($request);

        try{
            $contato->sendMail();
            Contact::create($data);
            $request->session()->flash('message','Mensagem enviada com sucesso');
        }
        catch (\Exception $e){
            return back()->with("message", "Ouve um erro inesperado: {$e->getMessage()}");
        }

        return redirect()->route('index');
    }
}
