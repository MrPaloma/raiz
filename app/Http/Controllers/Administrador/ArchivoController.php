<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documento;
use App\Models\Cliente;
use App\Models\Subdocumento;
use App\Models\Archivo;

class ArchivoController extends Controller
{
    public function documentos($id)
    {
        $cliente = Cliente::find($id)->get();

        $documentos = Documento::all();

        $subdocumentos = Documento::find(1)->subdocumentos;

        return view('administrador.archivo.archivo', compact('cliente', 'documentos', 'subdocumentos'));
    }

    public function subdocumentos(Request $request)
    {
        if ($request -> ajax())
        {
            $subdocumentos = Subdocumento::where('documento_id', $request->documento_id)->get();
            foreach ($subdocumentos as $subdocumento)
            {
                $subdocumentoArray[$subdocumento->id] = $subdocumento->nombre;
            }

            return response()->json($subdocumentoArray);
        }
    }

    public function store(Request $request)
    {
        
        $subdocumento = Subdocumento::where('id', $request->subdoc)->get()->first();
        $documento = Documento::where('id', $request->doc)->get()->first();

        $archivo = new Archivo;
        $archivo->cliente_id = $request->cliente_id;
        $archivo->subdocumento_id = $request->subdoc;
        // $archivo->fecha = $request->month . " - " . $request->year;

        $doc = $request->file('archivo');

        $nombre = $doc->getClientOriginalName();
        
        $archivo->path = "Documentos/$request->ruc/$documento->nombre/$subdocumento->nombre/$request->year/$request->month";

        $doc->move($archivo->path, $nombre);

        $archivo->nombre = $nombre;

        $archivo->save();
        
        return "oki";

    }
}
