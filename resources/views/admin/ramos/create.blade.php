@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Usuarios</h4>
                <h6 class="card-subtitle">Crear Nuevo Usuario</h6>
                <hr>

                    <div class="form-group">
                        <label for="exampleInputuname">Nombre Usuario</label>
                        <input type="text" class="form-control" id="exampleInputuname" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo electronico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label">Genero</label>
                        <select class="form-control custom-select">
                            <option value="">Masculino</option>
                            <option value="">Femenino</option>
                        </select>
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label">Perfil</label>
                        <select class="form-control custom-select" id="perfil">
                            <option value="0">Seleccionar</option>
                            <option value="1">Profesor</option>
                            <option value="2">Alumno</option>
                        </select>
                    </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 ">
        <div class="card">
            <div class="card-body">

                    <div id="formApoderado" class="d-none">
                        <div class="form-group">
                            <label for="exampleInputuname">Nombre Apoderado</label>
                            <input type="text" class="form-control" id="exampleInputuname" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo electronico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group has-success">
                            <label class="control-label">Genero</label>
                            <select class="form-control custom-select">
                                <option value="">Masculino</option>
                                <option value="">Femenino</option>
                            </select>
                        </div>
                    </div>

                    <a  class="btn btn-success waves-effect waves-light m-r-10" href="{{ route('admin.usuarios.index')}}">Crear</a>
                    <a  class="btn btn-inverse waves-effect waves-light">Cancelar</a>

            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/plugins/jquery/jquery.min.js')}}"></script>
    <script>

        $(document).ready(function() {
            $('#perfil').change(function() {
                console.log(this.value)
                if(this.value == '2'){
                    $('#formApoderado').removeClass('d-none');
                }
            });
        });


    </script>
@endpush
