@extends('layouts.admin_plantilla')

@section('contenido')
    <!-- Content Header (Page header) -->
    <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>clienteistradores</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Nuevo</a></li>
                  <li class="breadcrumb-item active"><a href="clienteistradores.html">Ver</a></li>
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
                  <h3 class="card-title">Actualizar Cliente</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{ route('cliente.update' , $user->id )}}"  enctype="multipart/form-data">
                  <div class="card-body">

                  @csrf
                  @method('PUT')
                            <!-- text input -->
                            
                            <div class="form-group">
                              <label for="dni">RUC:</label>
                              <input type="text" class="form-control" id="dni" placeholder="RUC de la empresa" name="RUC" value="{{ $cliente->RUC }} ">
                            </div>
                            <div class="form-group">
                              <label>Nombres:</label>
                              <input type="text" class="form-control" placeholder="nombre de la empresa" name="nombre" value="{{ $cliente->nombre }}">
                            </div>
                            <div class="form-group">
                                <label>Razón social:</label>
                                <textarea class="form-control" name="razon" rows="3" placeholder="Describa a que rubro se dedica..." >{{ $cliente->razon }}</textarea>  
                            </div>
                            <div class="form-group">
                              <label for="direccion">Dirreción:</label>
                              <input type="text" class="form-control" id="direccion" placeholder="Su direccion (Opcional)"  name="direccion" value="{{ $cliente->direccion }}">
                            </div>
                            <div class="form-group">
                              <label for="celular">Celular:</label>
                              <input type="text" class="form-control" id="celular" placeholder="Numero de celular"  name="celular" value="{{ $cliente->celular }}">
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
                              <input type="text" class="form-control" id="email" name="email" placeholder="Dirección de correo electronico" value="{{ $user->email }}">
                            </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <a href="{{ route('cliente.index') }}" class="btn btn-lg btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-lg btn-success float-right">Guardar</button>
                  </div>
                </form>
              </div>

              

          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection