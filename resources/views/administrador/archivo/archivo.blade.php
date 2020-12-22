@extends('layouts.admin_plantilla')

@section('metadatos')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('contenido')

 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subir Documentos en el Repositorio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Nuevo</a></li>
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
            <div class="card card-default card-primary">
              
              <div class="card-header">
                <h3 class="card-title">Subir Documentos</h3>
                
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  
                </div>
              </div>
              <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                
                
                <form method="post" action="{{route('archivo.show')}}" id="formShow">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="dni">RUC:</label>
                        @foreach($cliente as $client)
                          <input id="ruc" type="text" class="form-control" value="{{ $client->RUC }}" disabled="">
                          <input id="cliente_id" type="hidden" class="form-control" value="{{ $client->id }}" disabled="">
                        @endforeach
                      </div>
                      <h5>Fecha de subida</h5>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Año</label>
                            <select class="form-control select2" id="year">
                              <option value="2020" selected>2020</option>
                              <option value="2019">2019</option>
                              <option value="2018">2018</option>
                              <option value="2017">2017</option>
                              <option value="2016">2016</option>
                              <option value="2015">2015</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                              <option value="2012">2012</option>
                              <option value="2011">2011</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Mes</label>
                            <select class="form-control select2" id="month">
                              <option value="Enero">Enero</option>
                              <option value="Febrero">Febrero</option>
                              <option value="Marzo">Marzo</option>
                              <option value="Abril">Abril</option>
                              <option value="Mayo">Mayo</option>
                              <option value="Junio">Junio</option>
                              <option value="Julio">Julio</option>
                              <option value="Agosto">Agosto</option>
                              <option value="Septiembre">Septiembre</option>
                              <option value="Octubre">Octubre</option>
                              <option value="Noviembre">Noviembre</option>
                              <option value="Diciembre"  selected>Diciembre</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <h5>Tipo de Documento</h5>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Documento</label>
                            <select class="form-control select2" id="doc">
                                @foreach($documentos as $documento)
                                    <option value="{{ $documento->id }}">{{ $documento->nombre }}</option>
                                @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>SubDocumento</label>
                            <select class="form-control select2" id="subdoc">
                              @foreach($subdocumentos as $subdocumento)
                                  <option value="{{ $subdocumento->id }}">{{ $subdocumento->nombre }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                </div>
             
              <!-- /.card-body -->
                <div class="card-footer" style="display: block;">
                    <button type="submit" class="btn btn-block btn-lg btn-info" id="buscar-doc">
                      <i class="fa fa-search"></i></button>
                </div>
                </form>
            </div>  
            <div class="card">
              
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 table-responsive p-0"">

                        <div class="row">
                          <div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                    <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 10px">IdDoc</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Documento</th>
                      <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Descargar</th>
                      <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody  id="archivos">

                      <script>
                            function borrar(id){
                              let fila = "registro_" + id;
                              ocultar(fila);
                              console.log(fila)

                              $.ajax({
                                  url: "{{route('archivo.destroy')}}",
                                  method: 'POST',
                                  data: {
                                      id: id
                                  }
                              }).done(function(res){
                                console.log("eliminado");
                                console.log(res)
                              })
                            }

                            function ocultar(fila){
                              let elemento = document.getElementById(fila);
                              elemento.style.display = "none";
                            }

                      </script>
                      
                    </tbody>
                    <tr>
                    <tr role="row" class="odd">
                        <form method="post" action="{{route('archivo.store')}}"  enctype="multipart/form-data" id="formArchivo">
                          <td tabindex="0" class="sorting_1">#</td>
                          <td colspan="2"><input type="file" name="archivo"></td>
                          <td><button type="submit" id="subirDoc">Guardar</button></td>
                        </form>
                      </tr>
                    </tr>
                    <tfoot>
                    <tr>
                      <th rowspan="1" colspan="1">IdDoc</th>
                      <th rowspan="1" colspan="1">Documento</th>
                      <th rowspan="1" colspan="1">Descargar</th>
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

@section('script')
    <script>

        $(document).ready(function(){

            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $('#doc').change(function(){
                var documento_id = $(this).val();

                $.ajax({
                    url: "{{route('archivo.subdocumentos')}}",
                    method: 'POST',
                    data: {
                        documento_id: documento_id
                    }
                }).done(function(subdocumentos){
                    $('#subdoc').empty();

                    $.each(subdocumentos, function (index, value) {
                        $('#subdoc').append("<option value='" + index + "'>" + value +"</option>");
                    });
                })
            });

            $("#formShow").submit(function(e){  
              e.preventDefault();
              var year = $('#year').val();
              var month = $('#month').val();
              var doc = $('#doc').val();
              var subdoc = $('#subdoc').val();
              var ruc = $('#ruc').val();
              var cliente_id = $('#cliente_id').val();

              $.ajax({
                  url: "{{route('archivo.show')}}",
                  method: "POST",
                  data: { year:year, month:month, doc:doc, subdocumento_id:subdoc, ruc:ruc, cliente_id:cliente_id},
                  cache: false
              })
              .done(function(array){

                  $.each(array, function (index, value) {
                   

                    $('#archivos').append("<tr role='row' class='odd' id='registro_"+index+"'><td>" + index + "</td><td>" + value['nombre'] + "</td><td><a href='" + value['path'] + "' class='btn btn-fat btn-primary'><i class='fas fa-download'></i></a></td><td><button onclick='borrar(" + index + ")' vhref='#' class='btn btn-fat btn-danger'><i class='fas fa-trash'></i></button></td></tr>");
                  });

                 
                  
              });
          });

                
                
  
            $("#formArchivo").on("submit", function(e){
              e.preventDefault();
              var f = $(this);
              var year = $('#year').val();
              var month = $('#month').val();
              var doc = $('#doc').val();
              var subdoc = $('#subdoc').val();
              var ruc = $('#ruc').val();
              var cliente_id = $('#cliente_id').val();


              var formData = new FormData(document.getElementById("formArchivo"));
              formData.append("ruc", ruc);
              formData.append("cliente_id", cliente_id);
              formData.append("year", year);
              formData.append("month", month);
              formData.append("doc", doc);
              formData.append("subdocumento_id", subdoc);

              $.ajax({
                  url: "{{route('archivo.store')}}",
                  type: "post",
                  dataType: "html",
                  data: formData,
                  cache: false,
                  contentType: false,
                  processData: false
              })
              .done(function(array){
                alldata();
              });
          });
          
          function alldata() {
            var year = $('#year').val();
              var month = $('#month').val();
              var doc = $('#doc').val();
              var subdoc = $('#subdoc').val();
              var ruc = $('#ruc').val();
              var cliente_id = $('#cliente_id').val();

              $.ajax({
                  url: "{{route('archivo.show')}}",
                  method: "POST",
                  data: { year:year, month:month, doc:doc, subdocumento_id:subdoc, ruc:ruc, cliente_id:cliente_id},
                  cache: false
              })
              .done(function(array){
                
                $('#archivos').empty();
                  $.each(array, function (index, value) {
                    $('#archivos').append("<tr role='row' class='odd' id='registro_"+index+"'><td>" + index + "</td><td>" + value['nombre'] + "</td><td><a href='" + value['path'] + "' class='btn btn-fat btn-primary'><i class='fas fa-download'></i></a></td><td><button onclick='borrar(" + index + ")' vhref='#' class='btn btn-fat btn-danger'><i class='fas fa-trash'></i></button></td></tr>");
                  });
              });
          }
        })


    </script>
@endsection