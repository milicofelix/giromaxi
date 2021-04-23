<?php

namespace ADR\Http\Controllers\Admin;

use ADR\Forms\VideoForm;
use ADR\Models\Video;
use Illuminate\Http\Request;
use ADR\Http\Controllers\Controller;

class VideoController extends Controller
{
    protected $validUrl;

    public function index()
    {
        $videos = Video::paginate();
        return view('admin.videos.index',compact('videos'));
    }

    public function create()
    {
        $form = \FormBuilder::create(VideoForm::class, [
            'url' => route('admin.videos.store'),
            'method' => 'POST'
        ]);
        return view('admin.videos.create', compact('form'));
    }

    public function store(Request $request)
    {
        /** @var Form $form */
        $form = \FormBuilder::create(VideoForm::class);

        if (!$form->isValid()) {
            return redirect()
                ->back()
                ->withErrors($form->getErrors())
                ->withInput();
        }

        $data = $form->getFieldValues();
        $youtube = $this->containsYoutube($data['url'],'youtube.com');

        if($this->validateUrl($data['url']) && $youtube) {

            $data['url_hash'] = $this->getHashVideo($data['url']);
            Video::create($data);
            $request->session()->flash('message', 'Vídeo criado com sucesso');
        } else {
            $request->session()->flash('message','Informe um endereço de vídeo válido!');
            return redirect()->route('admin.videos.create')->withInput();
        }

        return redirect()->route('admin.videos.index');
    }

    public function show(Video $video)
    {
        return view('admin.videos.show', compact('video'));
    }

    public function edit(Video $video)
    {
        $form = \FormBuilder::create(VideoForm::class, [
            'url' => route('admin.videos.update',['video' => $video->id]),
            'method' => 'PUT',
            'model' => $video
        ]);

        return view('admin.videos.edit', compact('form'));
    }

    public function update(Video $video)
    {
        /** @var Form $form */
        $form = \FormBuilder::create(VideoForm::class, [
            'data' => ['id' => $video->id]
        ]);

        if (!$form->isValid()) {
            return redirect()
                ->back()
                ->withErrors($form->getErrors())
                ->withInput();
        }

        $data = $form->getFieldValues();

        $data['url_hash'] = $this->getHashVideo($data['url']);

        $video->update($data);
        session()->flash('message','Video editado com sucesso');
        return redirect()->route('admin.videos.index');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        session()->flash('message','Video excluído com sucesso');
        return redirect()->route('admin.videos.index');
    }

    protected function getHashVideo($url)
    {
        $res = strstr($url,'=');
        $res = explode('=',$res);
        $res = implode('',$res);

        return $res;
    }

    protected function validateUrl($url)
    {
        //$url = "https://www.w3schools.com";
        $this->validUrl = false;
        if (filter_var($url, FILTER_VALIDATE_URL)) {

            $this->validUrl = true;

        } else {
            $this->validUrl = false;
        }

        return $this->validUrl;
    }

    function containsYoutube($url, $nome)
    {
        return strpos($url, $nome) !== false;
    }
}
