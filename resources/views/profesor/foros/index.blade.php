@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3 justify-content-between">
                    <div>
                        <h4 class="card-title">Foros</h4>
                        <h6 class="card-subtitle">Listado de foros</h6>
                    </div>
                    <div>
                        <a class="btn btn-info btn-sm" href="{{ route('admin.forosProfesor.create')}}">
                            <i class="fa fa-plus"></i>
                            Nuevo Foro
                        </a>
                    </div>
                </div>


                <div class="table-responsive m-t-40">
                    <table id="usersTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Ramo</th>
                                <th>Nivel</th>
                                <th>.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nisi exercitation adipisicing aute occaecat sunt.</td>
                                <td>Historia </td>
                                <td><span class="badge badge-secondary">5to</span></td>
                                <td>
                                     <a class="btn btn-secondary" href="{{ route('admin.forosProfesor.show', 1)}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-secondary" href="{{ route('admin.forosProfesor.edit', 1)}}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarForo">
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

<!--borrar -->
<div class="modal fade bd-example-modal-lg" id="modalBorrarForo" tabindex="-1" role="dialog" aria-labelledby="modalBorrarForoTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalBorrarForoTitle">Borrar Foro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            ¿Esta seguro de querer eliminar este foro?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Borrar foro</button>
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
