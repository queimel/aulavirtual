@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Niveles</h4>
                <h6 class="card-subtitle">Listado de niveles registrados en el sistema</h6>
                <div class="d-flex mb-3 justify-content-end">
                    <button class="btn btn-info" data-toggle="modal" data-target="#modalNuevoNivel">
                        <i class="fa fa-plus"></i>
                        Nuevo Nivel
                    </button>
                </div>
                <div class="table-responsive m-t-40">
                    <table id="usersTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nombre</th>
                                <th>Cantidad Secciones</th>
                                <th>Cantidad Alumnos</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <button class="btn btn-light btnCollapse" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" >
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </td>
                                <td>1ro Basico</td>
                                <td>3</td>
                                <td>45</td>
                                <td>
                                     <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarNivel">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarNivel">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="collapse bg-light" id="collapse1">
                                <td colspan="5">
                                    <div class="d-flex mb-3 justify-content-end">
                                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalNuevaSeccion">
                                            <i class="fa fa-plus"></i>
                                            Nueva Sección
                                        </button>
                                    </div>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre seccion</th>
                                            <th scope="col">Cantidad Alumnos</th>
                                            <th scope="col">Acciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>1ro A</td>
                                            <td>45</td>
                                            <td>
                                                <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarSeccion">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarSeccion">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>1ro B</td>
                                                <td>45</td>
                                                <td>
                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarSeccion">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarSeccion">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td>1ro C</td>
                                                <td>45</td>
                                                <td>
                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarSeccion">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarSeccion">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                              </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-light btnCollapse" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        <i class="fa fa-plus"></i>
                                    </button></td>
                                <td>2do Basico</td>
                                <td>3</td>
                                <td>45</td>
                                <td>
                                     <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarNivel">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarNivel">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="collapse bg-light" id="collapse2">
                                <td colspan="5">
                                    <div class="d-flex mb-3 justify-content-end">
                                        <button class="btn btn-info" data-toggle="modal" data-target="#modalNuevaSeccion">
                                            <i class="fa fa-plus btn-sm"></i>
                                            Nueva Sección
                                        </button>
                                    </div>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre seccion</th>
                                            <th scope="col">Cantidad Alumnos</th>
                                            <th scope="col">Acciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>2do A</td>
                                            <td>45</td>
                                            <td>
                                                <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarSeccion">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarSeccion">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>2do B</td>
                                                <td>45</td>
                                                <td>
                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarSeccion">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarSeccion">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td>2do C</td>
                                                <td>45</td>
                                                <td>
                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarSeccion">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarSeccion">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                              </tr>
                                        </tbody>
                                      </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-light btnCollapse" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </td>
                                <td>3ro Basico</td>
                                <td>3</td>
                                <td>45</td>
                                <td>
                                     <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarNivel">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarNivel">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="collapse bg-light" id="collapse3">
                                <td colspan="5">
                                    <div class="d-flex mb-3 justify-content-end">
                                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalNuevaSeccion">
                                            <i class="fa fa-plus"></i>
                                            Nueva Sección
                                        </button>
                                    </div>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre seccion</th>
                                            <th scope="col">Cantidad Alumnos</th>
                                            <th scope="col">Acciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>3ro A</td>
                                            <td>45</td>
                                            <td>
                                                <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarSeccion">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarSeccion">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>3ro B</td>
                                                <td>45</td>
                                                <td>
                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarSeccion">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarSeccion">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td>3ro C</td>
                                                <td>45</td>
                                                <td>
                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarSeccion">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarSeccion">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                              </tr>
                                        </tbody>
                                      </table>
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


<div class="modal fade" id="modalNuevoNivel" tabindex="-1" role="dialog" aria-labelledby="modalNuevoNivelTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalNuevoNivelTitle">Crear nuevo nivel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nombre nivel</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Crear nivel</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalEditarNivel" tabindex="-1" role="dialog" aria-labelledby="modalEditarNivelTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarNivelTitle">Editar nivel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nombre nivel</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre de nivel a editar">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Crear nivel</button>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="modalBorrarNivel" tabindex="-1" role="dialog" aria-labelledby="modalBorrarNivelTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalBorrarNivelTitle">¿Está seguro de borrar este nivel?</h5>
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
    <script>
        $(document).ready(function(){
            $('.btnCollapse').click(function(){
                if($(this).attr('aria-expanded') === 'false'){
                    $(this).parent().parent().find('td').addClass('bg-active');
                }else{
                    $(this).parent().parent().find('td').removeClass('bg-active');

                }

            })

        })
    </script>
@endpush
