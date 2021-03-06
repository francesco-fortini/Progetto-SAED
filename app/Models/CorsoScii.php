<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorsoScii extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCorso';
    protected $table = 'corsoscii';
    protected $fillable = ['tipo','nome', 'membriMax', 'inizio', 'fine'];
}
