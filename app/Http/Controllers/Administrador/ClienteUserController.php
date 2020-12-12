<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\User;

class ClienteUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        

        $clientes = Cliente::select( "clientes.id", "clientes.nombre", "clientes.RUC", "users.rol")
                                ->join("users", "users.id", "=", "clientes.user_id")
                                ->get();

        return view('administrador.cliente.leer', compact('clientes'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.cliente.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User;

        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->rol = 'cliente';

        $user->save();

        $user_id = User::where('email', $request->email)->get()->first();

        $cliente = new Cliente;

        $cliente->user_id = $user_id->id;
        $cliente->RUC = $request->RUC;
        $cliente->razon_social = $request->razon_social;
        $cliente->nombre = $request->nombre;
        $cliente->foto = $request->foto;
        $cliente->direccion = $request->direccion;
        $cliente->celular = $request->celular;

        if ( $archivo = $request->file('foto') ) 
        {
            $nombre = $archivo->getClientOriginalName();

            $ruta = "images/$request->RUC/";

            $archivo->move($ruta, $nombre);

            $cliente->foto = $nombre;
        } 

        $cliente->save();

        return redirect('/cliente');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('administrador.cliente.ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $user = Cliente::findOrFail($id)->user;
        $cliente = Cliente::findOrFail($id);

        return view('administrador.cliente.editar', compact('cliente', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        User::where('id', $id)
                ->update(['email' => $request->email,
                            'rol' => $request->rol]);

        Cliente::where('user_id', $id)
                ->update(['DNI' => $request->DNI,
                            'nombre' => $request->nombre,
                            'apellido' => $request->apellido,
                            'direccion' => $request->direccion,
                            'celular' => $request->celular]);

        if ( $archivo = $request->file('foto') ) 
        {
            $nombre = $archivo->getClientOriginalName();

            $ruta = "images/$request->DNI/";

            $archivo->move($ruta, $nombre);


            Cliente::where('user_id', $id)
                        ->update(['foto' => $nombre]);

        } 

        return redirect('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Cliente::findOrFail($id)->user;
        $cliente = Cliente::findOrFail($id);

        $cliente->delete();
        $user->delete();

        return redirect('/cliente');
    }
}
