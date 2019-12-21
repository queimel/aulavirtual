@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">[Nombre de Ramo]</h4>
                {{-- <div class="d-flex mb-3 justify-content-end">
                    <button class="btn btn-info" data-toggle="modal" data-target="#modalNuevoRamo">
                        <i class="fa fa-plus"></i>
                        Nuevo Ramo
                    </button>
                </div> --}}
                <h5>Secciones</h5>
                <div>
                    <span class="badge badge-secondary">1ro</span> <span class="badge badge-secondary">2do</span> <span class="badge badge-secondary">3ro</span> <span class="badge badge-secondary">4to</span> <span class="badge badge-secondary">5to</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3 justify-content-between">
                    <h4 class="card-title">Unidades</h4>
                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#nuevaUnidad">
                        <i class="fa fa-plus"></i>
                        Nueva unidad
                    </button>
                </div>
                <div class="table-responsive m-t-40">
                    <table id="usersTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nombre</th>
                                <th>Contenidos</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <button class="btn btn-light btnCollapse" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" >
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </td>
                                <td>Unidad 1</td>
                                <td>3</td>
                                <td class="text-right">
                                     <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarUnidad">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarUnidad">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="collapse bg-light" id="collapse1">
                                <td colspan="5">
                                    <div class="d-flex mb-3 justify-content-end">
                                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalNuevoContenido">
                                            <i class="fa fa-plus"></i>
                                            Nuevo Contenido
                                        </button>
                                    </div>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">Nombre contenido</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Contenido 1</td>
                                            <td>Lorem ipsum dolor sit amet.</td>
                                            <td class="text-right">
                                                <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarContenido">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarContenido">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                            <tr>
                                                <td>Contenido 2</td>
                                                <td>Lorem ipsum dolor sit amet.</td>
                                                <td class="text-right">
                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarContenido">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarContenido">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Contenido 3</td>
                                                <td>Lorem ipsum dolor sit amet.</td>
                                                <td class="text-right">
                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarContenido">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarContenido">
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
                                    <button class="btn btn-light btnCollapse" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2" >
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </td>
                                <td>Unidad 2</td>
                                <td>3</td>
                                <td class="text-right">
                                     <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarUnidad">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarUnidad">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="collapse bg-light" id="collapse2">
                                <td colspan="5">
                                    <div class="d-flex mb-3 justify-content-end">
                                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalNuevoContenido">
                                            <i class="fa fa-plus"></i>
                                            Nuevo Contenido
                                        </button>
                                    </div>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">Nombre contenido</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Contenido 1</td>
                                            <td>Lorem ipsum dolor sit amet.</td>
                                            <td class="text-right">
                                                <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarContenido">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarContenido">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                            <tr>
                                                <td>Contenido 2</td>
                                                <td>Lorem ipsum dolor sit amet.</td>
                                                <td class="text-right">
                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarContenido">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarContenido">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Contenido 3</td>
                                                <td>Lorem ipsum dolor sit amet.</td>
                                                <td class="text-right">
                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#modalEditarContenido">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarContenido">
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


<!-- MODALES UNIDAD -->
<div class="modal fade bd-example-modal-lg" id="nuevaUnidad" tabindex="-1" role="dialog" aria-labelledby="nuevaUnidadTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="nuevaUnidadTitle">Crear Nueva Unidad</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="formGroupExampleInput">Nombre Unidad</label>
                <input type="text" class="form-control" placeholder="" value="">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Crear Unidad</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modalEditarUnidad" tabindex="-1" role="dialog" aria-labelledby="modalEditarUnidadTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarUnidadTitle">Editar Unidad</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="formGroupExampleInput">Nombre Unidad</label>
                <input type="text" class="form-control" placeholder="" value="[Nombre de unidad a editar]">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Editar Unidad</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="modalBorrarUnidad" tabindex="-1" role="dialog" aria-labelledby="modalBorrarUnidadTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalBorrarUnidadTitle">¿Está seguro de borrar esta unidad?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Borrar Unidad</button>
        </div>
        </div>
    </div>
</div>

<!-- MODALES CONTENIDO -->

<div class="modal fade bd-example-modal-lg" id="modalNuevoContenido" tabindex="-1" role="dialog" aria-labelledby="modalNuevoContenidoTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalNuevoContenidoTitle">Crear Nuevo Contenido</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="formGroupExampleInput">Nombre Contenido</label>
                <input type="text" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
                <textarea class="textarea_editor form-control" rows="15" placeholder=""></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Archivo adjunto</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Crear Contenido</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modalEditarContenido" tabindex="-1" role="dialog" aria-labelledby="modalEditarContenidoTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarContenidoTitle">Editar Contenido</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="formGroupExampleInput">Nombre Contenido</label>
                <input type="text" class="form-control" placeholder="" value="[ Nombre de contenido a editar ]">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Contenido</label>
                <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ...">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nunc arcu, dapibus at nisi ut, pharetra elementum libero. Duis rutrum lacus eu justo gravida, ac sagittis urna dapibus. Nullam placerat sem non orci pharetra lobortis. In blandit ullamcorper risus eu convallis. Nulla facilisi. Phasellus vulputate nisl ac odio volutpat, sed hendrerit tortor laoreet. Quisque cursus aliquet tortor quis ultricies. Cras dictum, turpis sit amet dapibus lacinia, quam lectus bibendum lorem, ut luctus leo nibh sed velit. Maecenas nec nisi purus. Vivamus nec lacus et nunc placerat facilisis et eu est. Vivamus tristique dolor metus. Nunc et nunc elit. Mauris pulvinar ullamcorper mauris, vitae maximus magna luctus ac. Aenean tempus lacus non mauris auctor, nec venenatis lectus hendrerit. Morbi vulputate ante orci, a eleifend enim condimentum efficitur. Aliquam at bibendum lectus.

                    Praesent maximus imperdiet orci, eu vehicula est aliquam id. Praesent pretium posuere mi. In lacinia orci massa, sit amet vulputate lectus dictum sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam faucibus augue sed erat aliquet, in dictum ex ornare. Suspendisse id mauris quis eros suscipit tempus. Aliquam blandit nisl cursus ex cursus, in sodales nibh maximus.

                    Proin sed dolor eget dolor cursus egestas. Nulla ultricies dui arcu, non placerat magna accumsan ut. Curabitur gravida ullamcorper velit ultrices sagittis. In nec lectus felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum vel est interdum congue. Proin est felis, venenatis at tempor in, malesuada ac quam. Etiam facilisis elementum varius. Aliquam gravida tincidunt lorem. Curabitur nec metus fringilla, rhoncus mauris sit amet, eleifend arcu. Sed eget turpis sit amet orci tempor feugiat.

                    Vestibulum vehicula feugiat lectus in pulvinar. Suspendisse aliquam, libero sit amet hendrerit tincidunt, massa justo lobortis ligula, ut tempus odio libero quis velit. In eget tellus velit. Pellentesque ullamcorper eleifend sagittis. Aliquam justo erat, mattis vel tempor eu, vehicula ac turpis. Cras placerat arcu volutpat quam finibus congue. In posuere, nisl et vehicula sollicitudin, elit metus molestie ante, eget blandit ipsum arcu non augue. Nullam ultrices tellus et placerat malesuada. Pellentesque condimentum dignissim sapien, consequat euismod nisl fermentum laoreet. Quisque tortor erat, vulputate ut egestas sit amet, finibus in diam. Sed felis est, molestie eu ultrices vel, tempus quis orci. Vivamus sed nunc accumsan, efficitur nibh ac, molestie nisi. Nulla cursus mattis arcu imperdiet posuere. Donec id augue quis nulla finibus rutrum nec tincidunt turpis. Quisque et congue libero. Cras scelerisque velit quam, vel bibendum enim elementum eget.

                    Nam interdum convallis venenatis. Phasellus ipsum neque, venenatis id dolor vel, tempus tempor leo. Donec a sapien vel magna tristique iaculis in et odio. Suspendisse felis dui, volutpat at neque consequat, imperdiet gravida enim. Proin at nisi a ipsum mollis sodales nec a tellus. Etiam interdum porttitor diam in scelerisque. Aliquam erat volutpat. Maecenas finibus nisl aliquet eros fringilla, vel malesuada ligula mollis.
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Archivo adjunto</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Editar Contenido</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="modalBorrarContenido" tabindex="-1" role="dialog" aria-labelledby="modalBorrarContenidoTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalBorrarContenidoTitle">¿Está seguro de borrar este contenido?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Borrar Contenido</button>
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
