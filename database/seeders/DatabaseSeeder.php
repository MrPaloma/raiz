<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Documento;
use App\Models\Subdocumento;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $documentos = array( array('nombre'=>'COMPROBANTE'),
                                array('nombre'=>'PDT'), 
                                array('nombre'=>'DECLARACIONES JURADA'),
                                array('nombre'=>'ESTADOS DE CUENTA'), 
                                array('nombre'=>'FACTURAS'),
                                array('nombre'=>'REGISTROS Y LIBROS, EXCEL, PDF Y PLE') );
        
        Documento::insert($documentos);

        $subdocumentos = array( array('documento_id' => '1', 'nombre' => 'COMPROBANTES RECIBIDOS'), 
                                array('documento_id' => '1', 'nombre' => 'COMPROBANTES GUARDADOS'),
                                array('documento_id' => '1', 'nombre' => 'COMPROBANTES REGISTRADOS'),
                                array('documento_id' => '2', 'nombre' => 'PDT621 1662'),
                                array('documento_id' => '2', 'nombre' => 'PDT621'),
                                array('documento_id' => '3', 'nombre' => 'DJ'),
                                array('documento_id' => '3', 'nombre' => 'DJA'),
                                array('documento_id' => '4', 'nombre' => 'ESTADO DE CUENTA BCP'),
                                array('documento_id' => '4', 'nombre' => 'ESTADO DE CUENTA DE DETRACCIONES'),
                                array('documento_id' => '5', 'nombre' => 'FACTURAS EMITIDAS'),
                                array('documento_id' => '6', 'nombre' => 'TXT'),
                                array('documento_id' => '6', 'nombre' => 'REPORTE DE INFORMACION CONSISTENTE'),
                                array('documento_id' => '6', 'nombre' => 'CONSTANCIA DE RECEPCION'),
                                array('documento_id' => '6', 'nombre' => 'XPLE'),
                                array('documento_id' => '6', 'nombre' => 'REGISTROS LIBROS Y EXCEL'));

        Subdocumento::insert($subdocumentos);
    
    }
}
