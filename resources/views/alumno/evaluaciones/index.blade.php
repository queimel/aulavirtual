@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Evaluaciones</h4>
                <div class="row">
                    <div class="col-4">
                        <select name="" id="" class="form-control">
                            <option value="0">Seleccionar Ramo</option>
                            <option value="1" selected>Historia</option>
                            <option value="2">Ingles</option>
                            <option value="3">Matematica</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive m-t-40">
                    <table id="usersTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Prueba nº1</td>
                                <td><span class="badge badge-primary">Activa</span></td>
                                <td>
                                     <a class="btn btn-secondary" href="{{ route('admin.evaluacionesAlumnos.edit', 1)}}">
                                        <i class="fa fa-pencil"></i> Rendir
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Prueba nº2</td>
                                <td><span class="badge badge-secondary">Finalizada</span></td>
                                <td>
                                     <a class="btn btn-secondary" href="{{ route('admin.evaluacionesAlumnos.show', 1)}}">
                                        <i class="fa fa-eye"></i> Ver
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

<!-- MODALES UNIDAD -->
<div class="modal fade bd-example-modal-lg" id="modalNuevaEvaluacion" tabindex="-1" role="dialog" aria-labelledby="modalNuevaEvaluacionTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalNuevaEvaluacionTitle">Crear Nueva Evaluación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="formGroupExampleInput">Titulo Evaluación</label>
                <input type="text" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="">Instrucciones</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                    <tr>
                        <th data-sort-initial="true" data-toggle="true">Nivel</th>
                        <th>Profesor</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <div class="form-group m-0">
                                <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="" value="8vo basico">
                            </div>
                        </td>
                        <td>
                            <select name="" id="" class="form-control form-control-sm">
                                <option value="">Seleccionar</option>
                                <option value="0">Milca Fernandez</option>
                                <option value="1" selected>Juan Pablo Torrealba</option>
                                <option value="2">Jorge Saez</option>
                            </select>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                        </td>
                    </tr>

                </tbody>
            </table>
            <div class="m-t-10">
                <div class="d-flex justify-content-end">
                    <div class="form-group">
                        <button id="demo-btn-addrow2" class="btn btn-primary btn-sm">
                            <i class="icon wb-plus" aria-hidden="true"></i>Agregar nuevo nivel
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Crear Unidad</button>
        </div>
      </div>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('js/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Footable -->
    <script src="{{ asset('js/plugins/footable/js/footable.all.min.js')}}" defer></script>
    <script src="{{ asset('js/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript" defer></script>
    <!--FooTable init-->
    <script>
        $(window).on('load', function() {
            // Add & Remove Row
            var addrow2 = $('#demo-foo-addrow');
            addrow2.footable().on('click', '.delete-row-btn', function() {

                //get the footable object
                var footable = addrow.data('footable');

                //get the row we are wanting to delete
                var row = $(this).parents('tr:first');

                //delete the row
                footable.removeRow(row);
            });
            var addrow = $('#demo-foo-addrow2');
            addrow.footable().on('click', '.delete-row-btn', function() {

                //get the footable object
                var footable = addrow.data('footable');

                //get the row we are wanting to delete
                var row = $(this).parents('tr:first');

                //delete the row
                footable.removeRow(row);
            });
            // Add Row Button
            $('#demo-btn-addrow').click(function() {

                //get the footable object
                var footable = addrow.data('footable');

                //build up the row we are wanting to add
                var newRow = `
                <tr>
                        <td>
                            <div class="form-group m-0">
                                <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="">
                            </div>
                        </td>
                        <td>
                            <select name="" id="" class="form-control form-control-sm">
                                <option value="">Seleccionar</option>
                                <option value="0">Milca Fernandez</option>
                                <option value="1">Juan Pablo Torrealba</option>
                                <option value="2">Jorge Saez</option>
                            </select>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                        </td>
                    </tr>`;

                //add it
                footable.appendRow(newRow);
            });

            $('#demo-btn-addrow2').click(function() {

                //get the footable object
                var footable = addrow2.data('footable');

                //build up the row we are wanting to add
                var newRow = `
                <tr>
                        <td>
                            <div class="form-group m-0">
                                <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="">
                            </div>
                        </td>
                        <td>
                            <select name="" id="" class="form-control form-control-sm">
                                <option value="">Seleccionar</option>
                                <option value="0">Milca Fernandez</option>
                                <option value="1">Juan Pablo Torrealba</option>
                                <option value="2">Jorge Saez</option>
                            </select>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                        </td>
                    </tr>`;

                //add it
                footable.appendRow(newRow);
                });
        })
    </script>

@endpush
