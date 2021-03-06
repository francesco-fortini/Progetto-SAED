<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCorso';
    protected $table = 'tipo';
    protected $fillable = ['difficolta','descrizione'];
}
