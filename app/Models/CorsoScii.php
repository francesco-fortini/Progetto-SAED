<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CorsoScii extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCorso';
    protected $table = 'corsoscii';
    protected $fillable = ['tipo','nome', 'membriMax', 'orario_inizio', 'orario_fine', 'inizio', 'fine'];
    
}
