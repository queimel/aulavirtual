@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Mis Notas</h4>
                <table border="0" cellpadding="0" cellspacing="0" class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bordes">Código</th>
                            <th class="bordes nombre">Nombre</th>
                            <th class="bordes align_center">Año/Sem</th>
                            <th class="bordes align_center">Opt.1</th>
                            <th class="bordes align_center">Opt.2</th>
                            <th class="bordes align_center">Opt.3</th>
                            <th class="bordes align_center">Opt.4</th>
                            <th class="bordes align_center">Opt.5</th>
                            <th class="bordes align_center">Obs.</th>
                        </tr>

                <tr>
                    <td>COM108</td>
                    <td>INGLÉS I</td>
                    <td class="align_center">1/2</td>
                    <td class="align_center width_70">2017/2 <b> <b>7,0</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">CO</td>
                </tr>

                <tr>
                    <td>COM109</td>
                    <td>INGLÉS III</td>
                    <td class="align_center">2/2</td>
                    <td class="align_center width_70">2017/2 <b> <b>7,0</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">CO</td>
                </tr>

                <tr>
                    <td>COM114</td>
                    <td>FORMACIÓN PARA EL TRABAJO</td>
                    <td class="align_center">1/1</td>
                    <td class="align_center width_70">2017/2 <b> <b>6,0</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">CO</td>
                </tr>

                <tr>
                    <td>COM115</td>
                    <td>TALLER DE EMPRENDEDORES</td>
                    <td class="align_center">1/2</td>
                    <td class="align_center width_70">2017/2 <b> <b>6,3</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">EX</td>
                </tr>

                <tr>
                    <td>COM117</td>
                    <td>PLAN DE NEGOCIOS</td>
                    <td class="align_center">2/1</td>
                    <td class="align_center width_70">2018/1 <b> <b>6,4</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">EX</td>
                </tr>

                <tr>
                    <td>COM208</td>
                    <td>INGLÉS II</td>
                    <td class="align_center">2/1</td>
                    <td class="align_center width_70">2017/2 <b> <b>7,0</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">CO</td>
                </tr>

                <tr>
                    <td>COM209</td>
                    <td>INGLÉS IV</td>
                    <td class="align_center">3/1</td>
                    <td class="align_center width_70">2017/2 <b> <b>7,0</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">CO</td>
                </tr>

                <tr>
                    <td>COM216</td>
                    <td>RELACIONES INTERPERSONALES Y TRABAJO EN EQUIPO</td>
                    <td class="align_center">2/1</td>
                    <td class="align_center width_70">2018/1 <b> <b>5,9</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">EX</td>
                </tr>

                <tr>
                    <td>EIT315</td>
                    <td>INGLÉS APLICADO PARA TECNOLOGÍA DE LA INFORMACIÓN I</td>
                    <td class="align_center">3/2</td>
                    <td class="align_center width_70">2019/2 <b> <b>5,9</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">EX</td>
                </tr>

                <tr>
                    <td>ETI109</td>
                    <td>TALLER DE BASES DE DATOS</td>
                    <td class="align_center">2/1</td>
                    <td class="align_center width_70">2018/1 <b> <b>5,3</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">AP</td>
                </tr>

                <tr>
                    <td>MAT101</td>
                    <td>INTRODUCCIÓN A LA MATEMÁTICA</td>
                    <td class="align_center">1/1</td>
                    <td class="align_center width_70">2017/2 <b> <b>5,1</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">CO</td>
                </tr>

                <tr>
                    <td>MAT212</td>
                    <td>ESTADÍSTICA</td>
                    <td class="align_center">2/2</td>
                    <td class="align_center width_70">2018/2 <b> <b>5,5</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">EX</td>
                </tr>

                <tr>
                    <td>MAT313</td>
                    <td>PROBABILIDAD Y ESTADISTICA BIVARIADA</td>
                    <td class="align_center">3/1</td>
                    <td class="align_center width_70">2019/1 <b> <b>6,7</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">EX</td>
                </tr>

                <tr>
                    <td>MAT414</td>
                    <td>NEGOCIACIÓN Y RELACIONES CON EL CLIENTE</td>
                    <td class="align_center">3/2</td>
                    <td class="align_center width_70">2019/2 <b> <b>5,5</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">EX</td>
                </tr>

                <tr>
                    <td>PAS310</td>
                    <td>TALLER DE ANALISIS DE SISTEMAS</td>
                    <td class="align_center">3/1</td>
                    <td class="align_center width_70">2019/1 <b> <b>4,7</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">AP</td>
                </tr>

                <tr>
                    <td>PAS314</td>
                    <td>MODELAMIENTO DE PROCESOS DE NEGOCIOS</td>
                    <td class="align_center">3/1</td>
                    <td class="align_center width_70">2019/1 <b> <b>5,2</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">AP</td>
                </tr>

                <tr>
                    <td>PAS315</td>
                    <td>CONTROL DE CALIDAD DE SOFTWARE</td>
                    <td class="align_center">3/1</td>
                    <td class="align_center width_70">2019/1 <b> <b>6,0</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">AP</td>
                </tr>

                <tr>
                    <td>PAS410</td>
                    <td>TALLER INTEGRADO DE PROYECTOS DE ANALISIS</td>
                    <td class="align_center">3/2</td>
                    <td class="align_center width_70">2019/2 <b> <b>0,0</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center"></td>
                </tr>

                <tr>
                    <td>PAS411</td>
                    <td>TALLER DE DISEÑO DE SISTEMAS</td>
                    <td class="align_center">3/2</td>
                    <td class="align_center width_70">2019/2 <b> <b>5,1</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">AP</td>
                </tr>

                <tr>
                    <td>PAS412</td>
                    <td>ADMINISTRACIÓN DE PROYECTOS INFORMÁTICOS</td>
                    <td class="align_center">3/2</td>
                    <td class="align_center width_70">2019/1 <b> <b>6,6</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">AP</td>
                </tr>

                <tr>
                    <td>TPC101</td>
                    <td>FUNDAMENTOS DE PROGRAMACIÓN COMPUTACIONAL</td>
                    <td class="align_center">1/1</td>
                    <td class="align_center width_70">2017/2 <b> <b>5,2</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">CO</td>
                </tr>

                <tr>
                    <td>TPC102</td>
                    <td>INTRODUCCIÓN A REQUERIMIENTOS Y MODELOS DE NEGOCIOS</td>
                    <td class="align_center">1/1</td>
                    <td class="align_center width_70">2018/1 <b> <b>5,2</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">AP</td>
                </tr>

                <tr>
                    <td>TPC103</td>
                    <td>TALLER DE SOPORTE EN HARDWARE Y REDES</td>
                    <td class="align_center">1/1</td>
                    <td class="align_center width_70">2018/1 <b> <b>6,7</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">EX</td>
                </tr>

                <tr>
                    <td>TPC201</td>
                    <td>TALLER DE PROGRAMACIÓN JAVA</td>
                    <td class="align_center">1/2</td>
                    <td class="align_center width_70">2017/2 <b> <b>4,6</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">CO</td>
                </tr>

                <tr>
                    <td>TPC202</td>
                    <td>BASES DE DATOS RELACIONALES</td>
                    <td class="align_center">1/2</td>
                    <td class="align_center width_70">2017/2 <b> <b>4,8</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">CO</td>
                </tr>

                <tr>
                    <td>TPC203</td>
                    <td>TALLER DE APLICACIONES PARA INTERNET</td>
                    <td class="align_center">1/2</td>
                    <td class="align_center width_70">2017/2 <b> <b>6,4</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">EX</td>
                </tr>

                <tr>
                    <td>TPC204</td>
                    <td>TALLER DE SOPORTE EN SOFTWARE Y SISTEMA OPERATIVO</td>
                    <td class="align_center">1/2</td>
                    <td class="align_center width_70">2017/2 <b> <b>6,2</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">EX</td>
                </tr>

                <tr>
                    <td>TPC301</td>
                    <td>TALLER DE PROGRAMACIÓN NET</td>
                    <td class="align_center">2/1</td>
                    <td class="align_center width_70">2018/1 <b> <b>4,9</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">AP</td>
                </tr>

                <tr>
                    <td>TPC302</td>
                    <td>TALLER DE APLICACIONES PARA INTERNET EN JAVA</td>
                    <td class="align_center">2/1</td>
                    <td class="align_center width_70">2018/1 <b> <b>6,1</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">AP</td>
                </tr>

                <tr>
                    <td>TPC401</td>
                    <td>TALLER INTEGRADO DE PROYECTOS DE PROGRAMACIÓN</td>
                    <td class="align_center">2/2</td>
                    <td class="align_center width_70">2018/2 <b> <b>6,5</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">AP</td>
                </tr>

                <tr>
                    <td>TPC402</td>
                    <td>METODOLOGIAS DE DESARROLLO DE SOFTWARE</td>
                    <td class="align_center">2/2</td>
                    <td class="align_center width_70">2018/2 <b> <b>4,9</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">AP</td>
                </tr>

                <tr>
                    <td>TPC403</td>
                    <td>TALLER DE APLICACIONES PARA INTERNET EN NET</td>
                    <td class="align_center">2/2</td>
                    <td class="align_center width_70">2018/2 <b> <b>4,8</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">AP</td>
                </tr>

                <tr>
                    <td>TPC404</td>
                    <td>TALLER DE TESTING Y CALIDAD  DE SOFTWARE</td>
                    <td class="align_center">2/2</td>
                    <td class="align_center width_70">2018/1 <b> <b>4,6</b></b></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center width_70"></td>
                    <td class="align_center">AP</td>
                </tr>

                    </tbody>
                </table>

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
