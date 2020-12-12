<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        

        $admins = Admin::select( "admins.id", "admins.nombre", "admins.DNI", "users.rol")
                                ->join("users", "users.id", "=", "admins.user_id")
                                ->get();

        return view('administrador.admin.leer', compact('admins'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.admin.crear');
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
        $user->rol = $request->rol;

        $user->save();

        $user_id = User::where('email', $request->email)->get()->first();

        $admin = new Admin;

        $admin->user_id = $user_id->id;
        $admin->DNI = $request->DNI;
        $admin->nombre = $request->nombre;
        $admin->apellido = $request->apellido;
        $admin->foto = $request->foto;
        $admin->direccion = $request->direccion;
        $admin->celular = $request->celular;

        if ( $archivo = $request->file('foto') ) 
        {
            $nombre = $archivo->getClientOriginalName();

            $ruta = "images/$request->DNI/";

            $archivo->move($ruta, $nombre);

            $admin->foto = $nombre;
        } 

        $admin->save();

        return redirect('/admin');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('administrador.admin.ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $user = Admin::findOrFail($id)->user;
        $admin = Admin::findOrFail($id);

        return view('administrador.admin.editar', compact('admin', 'user'));
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

        Admin::where('user_id', $id)
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


            Admin::where('user_id', $id)
                        ->update(['foto' => $nombre]);

        } 

        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Admin::findOrFail($id)->user;
        $admin = Admin::findOrFail($id);

        $admin->delete();
        $user->delete();

        return redirect('/admin');
    }
}
