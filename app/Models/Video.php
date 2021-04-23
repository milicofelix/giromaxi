<?php

namespace ADR\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class Video extends Model implements TableInterface
{
    protected $fillable = ['servico','title','desc','url','url_hash','fullscreen','modestbranding','mute','controls'];

    /**
     * A list of headers to be used when a table is displayed
     *
     * @return array
     */
    public function getTableHeaders()
    {
        return ['ID', 'Titulo', 'URL', 'Tela-cheia', 'Logo-Youtube','Mudo', 'Controle-video'];
    }

    /**
     * Get the value for a given header. Note that this will be the value
     * passed to any callback functions that are being used.
     *
     * @param string $header
     * @return mixed
     */
    public function getValueForHeader($header)
    {
        switch ($header) {
            case 'ID':
                return $this->id;
            case 'Titulo':
                return $this->title;
            case 'URL':
                return $this->url;
            case 'Tela-cheia':
                return ($this->fullscreen == true) ? 'Sim' : 'Não';
            case 'Logo-Youtube':
                return ($this->modestbranding == true) ? 'Sim' : 'Não';
            case 'Mudo':
                return ($this->mute == true) ? 'Sim' : 'Não';
            case 'Controle-video':
                return ($this->controls == true) ? 'Sim' : 'Não';
        }
    }
}
