<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iscrizione extends Model
{
    use HasFactory;

    protected $table = 'iscrizione';

    protected function setKeysForSaveQuery($query){

        return $query->where('idCorso', $this->getAttribute('idCorso'))
            ->where('idUtente', $this->getAttribute('idUtente'));
    }
   
}

