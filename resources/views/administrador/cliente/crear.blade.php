@extends('layouts.admin_plantilla')

@section('contenido')
    <!-- Content Header (Page header) -->
    <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Clientes</h1>
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
                  <h3 class="card-title">Agregar Cliente</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{ route('cliente.store') }}"  enctype="multipart/form-data">
                
                  <div class="card-body">
                            <!-- text input -->
                             @csrf
                            <div class="form-group">
                              <label for="RUC">RUC:</label>
                              <input type="text" class="form-control" id="RUC" name="RUC" placeholder="Numero de RUC">
                            </div>
                            <div class="form-group">
                              <label>Nombre:</label>
                              <input type="text" class="form-control" name="nombre" placeholder="Sus nombres">
                            </div>
                            <div class="form-group">
                            <label>Razón social:</label>
                              <textarea class="form-control" rows="3" placeholder="Describa a que rubro se dedica..." name="razon"></textarea>  
                            </div>
                            <div class="form-group">
                              <label for="direccion">Dirección:</label>
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
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <input type="submit" class="btn btn-lg btn-success float-right" value="Guardar">

                    <a href="{{ route('cliente.index') }}" class="btn btn-lg btn-danger">Cancelar</a>
                  </div>

                </form>
              </div>

              

          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection