@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ramos</h4>
                <h6 class="card-subtitle">Listado de ramos registrados en el sistema</h6>
                <div class="d-flex mb-3 justify-content-end">
                    <button class="btn btn-info" data-toggle="modal" data-target="#modalNuevoRamo">
                        <i class="fa fa-plus"></i>
                        Nuevo Ramo
                    </button>
                </div>
                <div class="table-responsive m-t-40">
                    <table id="usersTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Niveles</th>
                                <th>.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Historia</td>
                                <td>1ro, 2do, 3ro, 4to, 5to </td>
                                <td>
                                     <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarRamo">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarRamo">
                                        <i class="fa fa-trash"></i>
                                    </button>
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

<!-- Modal -->


<div class="modal fade bd-example-modal-lg" id="modalNuevoRamo" tabindex="-1" role="dialog" aria-labelledby="modalNuevoRamoTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalNuevoRamoTitle">Crear nuevo ramo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="formGroupExampleInput">Nombre ramo</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>

            <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle" data-page-size="7">
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
                    </tr>

                </tbody>
            </table>
            <div class="m-t-10">
                <div class="d-flex justify-content-end">
                    <div class="form-group">
                        <button id="demo-btn-addrow" class="btn btn-primary btn-sm">
                            <i class="icon wb-plus" aria-hidden="true"></i>Agregar nuevo nivel
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Crear ramo</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalEditarRamo" tabindex="-1" role="dialog" aria-labelledby="modalEditarRamoTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarRamoTitle">Editar nivel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="formGroupExampleInput">Nombre ramo</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" value="Historia">
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
          <button type="button" class="btn btn-danger" data-dismiss="modal">Crear nivel</button>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="modalBorrarRamo" tabindex="-1" role="dialog" aria-labelledby="modalBorrarRamoTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalBorrarRamoTitle">¿Está seguro de borrar este nivel?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Borrar Nivel</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalBorrarSeccion" tabindex="-1" role="dialog" aria-labelledby="modalBorrarSeccionTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalBorrarSeccionTitle">¿Está seguro de borrar esta seccion?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Borrar Sección</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalNuevaSeccion" tabindex="-1" role="dialog" aria-labelledby="modalNuevaSeccionTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalNuevaSeccionTitle">Crear Nueva Sección para nivel [nombre de nivel]</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nombre Seccion</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Cupos para alumnos</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Crear Sección</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalEditarSeccion" tabindex="-1" role="dialog" aria-labelledby="modalEditarSeccionTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarSeccionTitle">Editar sección de nivel [nombre de nivel]</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nombre Seccion</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre de la seccion a editar">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Cupos para alumnos</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Cupos de la sección a editar">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Crear Sección</button>
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
