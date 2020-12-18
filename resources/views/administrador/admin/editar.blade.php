@extends('layouts.admin_plantilla')

@section('contenido')
    <!-- Content Header (Page header) -->
    <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Administradores</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Nuevo</a></li>
                  <li class="breadcrumb-item active"><a href="administradores.html">Ver</a></li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Actualizar administrador</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{ route('admin.update' , $user->id )}}"  enctype="multipart/form-data">
                  <div class="card-body">

                  @csrf
                  @method('PUT')
                            <!-- text input -->
                            <div class="form-group">
                              <label>Nombres:</label>
                              <input type="text" class="form-control" placeholder="Sus nombres" name="nombre" value={{$admin->nombre}}>
                            </div>
                            <div class="form-group">
                              <label for="apellidos">Apellidos:</label> 
                              <input type="text" class="form-control" id="apellidos" placeholder="Sus apellidos" name="apellido" value={{$admin->apellido}}>
                            </div>
                            <div class="form-group">
                              <label for="dni">DNI:</label>
                              <input type="text" class="form-control" id="dni" placeholder="Numero de DNI" name="DNI" value={{$admin->DNI}}>
                            </div>
                            <div class="form-group">
                              <label for="direccion">Dirreción:</label>
                              <input type="text" class="form-control" id="direccion" placeholder="Su direccion (Opcional)"  name="direccion" value={{$admin->direccion}}>
                            </div>
                            <div class="form-group">
                              <label for="celular">Celular:</label>
                              <input type="text" class="form-control" id="celular" placeholder="Numero de celular"  name="celular" value={{$admin->celular}}>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Foto de perfil</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="foto">
                                    <label class="custom-file-label" for="exampleInputFile">Elija una imagen</label>
                                  </div>
                                </div>
                              </div>
                            <div class="form-group">
                              <label for="email">Correo electronico:</label>
                              <input type="text" class="form-control" id="email" name="email" placeholder="Dirección de correo electronico"  value={{$user->email}}>
                            </div>
                            <div class="form-group">
                              <label for="">Rol de administrador:</label>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="rol" value="administrador" id="administrador">
                                <label for="administrador" class="form-check-label">Administrador</label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="rol" value="contador" id="contador" checked="">
                                <label for="contador" class="form-check-label">Contador</label>
                              </div>
                            </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <a href="{{route('admin.index') }}" class="btn btn-lg btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-lg btn-success float-right">Guardar</button>
                  </div>
                </form>
              </div>

              

          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection