@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Editar Evaluación</h4>
                <hr>
                <div class="form-group">
                    <label for="formGroupExampleInput">Titulo Evaluación</label>
                    <input type="text" class="form-control" placeholder="" value="Pellentesque sit amet consectetur tellus">
                </div>
                <div class="form-group">
                    <label for="">Instrucciones</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control">
                        Curabitur nec iaculis orci, gravida sodales diam. Ut fermentum, turpis non convallis commodo, dui ex egestas velit, eget laoreet arcu mi sit amet diam. Fusce sollicitudin, purus ut viverra vehicula, purus eros lobortis lorem, vitae aliquet massa orci id leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna arcu, commodo nec sagittis vitae, fermentum a turpis. Nunc a quam lorem. Donec aliquam porta dignissim. Maecenas accumsan vel magna bibendum congue.
                    </textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <h5>Preguntas</h5>
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNuevaPregunta">
                        <i class="fa fa-plus" aria-hidden="true"></i> Agregar nueva pregunta
                    </button>
                </div>
                <table id="demo-foo-addrow" class="table table-bordered table-hover ">
                    <tr>
                        <th><small>#</small></th>
                        <th><small>Cuerpo pregunta</small></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <small>
                                ¿Proin sed dolor eget dolor cursus egestas. Nulla ultricies dui arcu, non placerat magna accumsan ut. Curabitur gravida ullamcorper velit ultrices sagittis?
                            </small>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="modal" data-target="#modalEditarPregunta" >
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="modal" data-target="#modalBorrarPregunta">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <small>
                                ¿Proin sed dolor eget dolor cursus egestas. Nulla ultricies dui arcu, non placerat magna accumsan ut. Curabitur gravida ullamcorper velit ultrices sagittis?
                            </small>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="modal" data-target="#modalEditarPregunta" >
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="modal" data-target="#modalBorrarPregunta">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <small>
                                ¿Proin sed dolor eget dolor cursus egestas. Nulla ultricies dui arcu, non placerat magna accumsan ut. Curabitur gravida ullamcorper velit ultrices sagittis?
                            </small>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="modal" data-target="#modalEditarPregunta" >
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="modal" data-target="#modalBorrarPregunta">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <small>
                                ¿Proin sed dolor eget dolor cursus egestas. Nulla ultricies dui arcu, non placerat magna accumsan ut. Curabitur gravida ullamcorper velit ultrices sagittis?
                            </small>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="modal" data-target="#modalEditarPregunta" >
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="modal" data-target="#modalBorrarPregunta">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>
                            <small>
                                ¿Proin sed dolor eget dolor cursus egestas. Nulla ultricies dui arcu, non placerat magna accumsan ut. Curabitur gravida ullamcorper velit ultrices sagittis?
                            </small>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="modal" data-target="#modalEditarPregunta" >
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="modal" data-target="#modalBorrarPregunta">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>
                            <small>
                                ¿Proin sed dolor eget dolor cursus egestas. Nulla ultricies dui arcu, non placerat magna accumsan ut. Curabitur gravida ullamcorper velit ultrices sagittis?
                            </small>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="modal" data-target="#modalEditarPregunta" >
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="modal" data-target="#modalBorrarPregunta">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- MODALES UNIDAD -->
<div class="modal fade bd-example-modal-lg" id="modalNuevaPregunta" tabindex="-1" role="dialog" aria-labelledby="modalNuevaPreguntaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalNuevaPreguntaTitle">Nueva Pregunta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group mb-4">
                <label for="">Cuerpo pregunta</label>
                <textarea class="form-control form-control-sm" id="formGroupExampleInput" placeholder="" ></textarea>
            </div>

            <h5>Alternativas</h5>

            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th></th>
                        <th>Cuerpo</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <input type="checkbox" class="filled-in chk-col-red" >
                                    <label>correcta</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm">
                            </div>
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
                            <i class="icon wb-plus" aria-hidden="true"></i>Agregar nueva alternativa
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Crear Pregunta</button>
        </div>
      </div>
    </div>
</div>
<!-- editar -->
<div class="modal fade bd-example-modal-lg" id="modalEditarPregunta" tabindex="-1" role="dialog" aria-labelledby="modalNuevaEvaluacionTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalNuevaEvaluacionTitle">Editar Pregunta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group mb-4">
                <label for="">Cuerpo pregunta</label>
                <textarea class="form-control form-control-sm" id="formGroupExampleInput" placeholder="" >¿Proin sed dolor eget dolor cursus egestas. Nulla ultricies dui arcu, non placerat magna accumsan ut. Curabitur gravida ullamcorper velit ultrices sagittis?"</textarea>
            </div>

            <h5>Alternativas</h5>

            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th></th>
                        <th>Cuerpo</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <input type="checkbox" class="filled-in chk-col-red" >
                                    <label>correcta</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" value="Phasellus ipsum neque, venenatis id dolor vel, tempus tempor leo">
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2
                        </td>
                        <td>
                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red" checked="">
                            <label>correcta</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" value="Nam interdum convallis venenatis.">
                            </div>

                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3
                        </td>
                        <td>
                            <input type="checkbox" class="chk-col-red">
                            <label>correcta</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" value="Phasellus ipsum neque, venenatis id dolor vel, tempus tempor leo.">
                            </div>

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
                            <i class="icon wb-plus" aria-hidden="true"></i>Agregar nueva alternativa
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Editar Pregunta</button>
        </div>
      </div>
    </div>
</div>

<!--borrar -->
<div class="modal fade bd-example-modal-lg" id="modalBorrarPregunta" tabindex="-1" role="dialog" aria-labelledby="modalBorrarPreguntaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalBorrarPreguntaTitle">Borrar Pregunta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            ¿Esta seguro de querer eliminar esta pregunta?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Borrar Pregunta</button>
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

            $('#demo-btn-addrow2').click(function() {

                //get the footable object
                var footable = addrow2.data('footable');

                //build up the row we are wanting to add
                var newRow = `
                <tr>
                        <td>
                            3
                        </td>
                        <td>
                            <input type="checkbox" class="chk-col-red">
                            <label>correcta</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" >
                            </div>

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
