<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Doc;

class ArchivoController extends Controller
{
    
    public function index()
    {
        $docs = Doc::all();
        return view('administrador.archivo.doc', compact('docs'));
    }

}
