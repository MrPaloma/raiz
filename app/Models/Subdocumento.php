<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdocumento extends Model
{
    use HasFactory;

    
    protected $fillable = ['documento_id', 'nombre'];

    public function documento()
    {
        return $this->belongsTo(Documento::class);
    }
}

