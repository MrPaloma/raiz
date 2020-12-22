<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'subdocumento_id',
        'nombre',
        'path',
        'month',
        'year'
    ];

    
}
    