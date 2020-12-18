<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documento;
use App\Models\Subdocumento;


class ArchivoController extends Controller
{
    public function documentos()
    {
        $documentos = Documento::all();

        return view('administrador.archivo.archivo', compact('documentos'));
    }

    public function subdocumentos(Request $request)
    {
        if ($request -> ajax())
        {
            $subdocumentos = Subdocumentos::where('documento_id', $request->documento_id)->get();
            foreach ($subdocumentos as $subdocumento)
            {
                $subdocumentoArray[$subdocumento->id] = $subdocumento->nombre;
            }

            return response()->json();
        }
    }

    
}
