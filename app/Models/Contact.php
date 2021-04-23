<?php

namespace ADR\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model implements TableInterface
{
    protected $fillable = ['name', 'email','subject','message'];

    /**
     * A list of headers to be used when a table is displayed
     *
     * @return array
     */
    public function getTableHeaders()
    {
        return ['ID', 'Nome', 'E-mail', 'Assunto', 'Mensagem'];
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
            case 'Nome':
                return $this->name;
            case 'E-mail':
                return $this->email;
            case 'Assunto':
                return $this->subject;
            case 'Mensagem':
                return str_limit($this->getAttribute('message'), 10, '...');
        }
    }
}
