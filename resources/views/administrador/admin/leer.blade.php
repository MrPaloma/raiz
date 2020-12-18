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
              <li class="breadcrumb-item"><a href="formAdministrador.html">Nuevo</a></li>
              <li class="breadcrumb-item active">Ver</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              
            <div class="card">
              <div class="card-header">
                <a href="admin/create" class="btn btn-lg btn-outline-primary "><i class="fas fa-plus"></i> Agregar Nuevo</a>
              </div>
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 table-responsive">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                    <!-- <div class="dataTables_length" id="example1_length">
                      <label>Show 
                        <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option>
                          <option value="50">50</option><option value="100">100</option>
                        </select> entries</label>
                      </div> -->
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div id="example1_filter" class="dataTables_filter">
                        <label>Buscar:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                    <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 10px">ID</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Código</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Nombres</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Rol</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Info</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Editar</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Eliminar</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($admins as $admin)
                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1">{{$admin->id}}</td>
                            <td>{{$admin->DNI}}</td>
                            <td>{{$admin->nombre}}</td>
                            <td>{{$admin->rol}}</td>
                            <td>
                                <a href="{{route('admin.show', $admin->id) }}" class="btn btn-fat btn-info">
                                    <i class="fas fa-info"></i> 
                                </a>
                            </td>
                            <td>
                                <a href="{{route('admin.edit', $admin->id) }}" class="btn btn-fat btn-secondary">
                                    <i class="fas fa-edit"></i> 
                                </a>
                            </td>
                            <td>
                            <form method="post" action="{{ route('admin.destroy' , $admin->id )}}"  enctype="multipart/form-data">
                              @csrf
                              @method('DELETE')
                                <button type="submit" class="btn btn-fat btn-danger" id="btn"><i class="fas fa-trash"></i></button>
                                    
                                </a>
                              </form>
                            </td>
                        </tr>   
                    @endforeach

                    </tbody>

                    <tfoot>
                    <tr><th rowspan="1" colspan="1">ID</th>
                      <th rowspan="1" colspan="1">Código</th>
                      <th rowspan="1" colspan="1">Nombres</th>
                      <th rowspan="1" colspan="1">Rol</th>
                      <th rowspan="1" colspan="1">Info</th>
                      <th rowspan="1" colspan="1">Editar</th>
                      <th rowspan="1" colspan="1">Eliminar</th>
                    </tr>
                    </tfoot>
                  </table>
              </div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Monstrando de 1 a 10 de 57 registros</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Anterior</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Siguiente</a></li></ul></div></div></div></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection