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
                  <h3 class="card-title">Agregar administrador</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{ route('admin.store') }}"  enctype="multipart/form-data">
                
                  <div class="card-body">
                            <!-- text input -->
                             @csrf
                            <div class="form-group">
                              <label for="DNI">DNI:</label>
                              <input type="text" class="form-control" id="DNI" name="DNI" placeholder="Numero de DNI">
                            </div>
                            <div class="form-group">
                              <label>Nombres:</label>
                              <input type="text" class="form-control" name="nombre" placeholder="Sus nombres">
                            </div>
                            <div class="form-group">
                              <label for="apellidos">Apellidos:</label>
                              <input type="text" class="form-control" id="apellidos" name="apellido" placeholder="Sus apellidos">
                            </div>
                            <div class="form-group">
                              <label for="direccion">Dirreción:</label>
                              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Su direccion (Opcional)">
                            </div>
                            <div class="form-group">
                              <label for="celular">Celular:</label>
                              <input type="text" class="form-control" id="celular" name="celular" placeholder="Numero de celular">
                            </div>
                             <div class="form-group">
                                <label for="exampleInputFile">Foto de perfil</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" name="foto" id="">
                                  </div>
                                </div>
                            </div> 
                            <div class="form-group">
                              <label for="email">Correo electronico:</label>
                              <input type="text" class="form-control" id="email" name="email" placeholder="Dirección de correo electronico">
                            </div>
                            <div class="form-group">
                              <label for="password">Contraseña:</label>
                              <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                              <label for="Cpassword">Confirmar contraseña:</label>
                              <input type="password" class="form-control " id="Cpassword" >
                            </div>
                            <div class="form-group" name="rol">
                              <label for="">Rol de administrador:</label>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="rol" value="administrador" id="administrador">
                                <label for="administrador" class="form-check-label" >Administrador</label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="rol"  value="contador" id="contador" checked="">
                                <label for="contador" class="form-check-label" >Contador</label>
                              </div>
                            </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <input type="submit" class="btn btn-lg btn-success float-right" value="Guardar">

                    <a href="administradores.html" class="btn btn-lg btn-danger">Cancelar</a>
                  </div>

                </form>
              </div>

              

          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection