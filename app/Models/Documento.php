<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    protected $guarded = [];

    public function subdocumentos()
    {
        return $this->hasMany(Subdocumento::class);
        
    }

}
