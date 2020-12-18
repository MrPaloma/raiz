@extends('layouts.admin_plantilla')

@section('contenido')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil de cliente</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="img/user5-128x128.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $cliente->nombre }}</h3>

                <a href="#" class="btn btn-primary btn-block"><b>Resetear Contraseña</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  
                  
                  <li class="nav-item"><a class="nav-link" href="#" disabled>Datos del cliente</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  
                  
                  
                  

                  <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">RUC</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" value="{{ $cliente->RUC }}" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" value="{{ $cliente->nombre }}" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Razón social</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" rows="3" id="inputExperience" placeholder="{{ $cliente->razon }}" disabled></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Correo electronico</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" value="{{ $user->email }}" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Celular" class="col-sm-2 col-form-label">Celular</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Celular" value="{{ $cliente->celular }}" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="direccion" class="col-sm-2 col-form-label">Dirreción</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="direccion" value="{{ $cliente->direccion }}" disabled>
                        </div>
                      </div>
                          <a href="{{ route('cliente.index') }}" class="btn btn-danger btn-lg">Cerrar</a>
                       
                          <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-info btn-lg float-right">Editar</a>
                        
                      
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection