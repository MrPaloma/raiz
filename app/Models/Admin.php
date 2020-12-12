<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'DNI',
        'nombre',
        'apellido',
        'foto',
        'direccion',
        'celular',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
