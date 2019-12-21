@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Mis Ramos</h4>
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
                                <td>Historia de Chile</td>
                                <td><span class="badge badge-secondary">1ro</span> <span class="badge badge-secondary">2do</span> <span class="badge badge-secondary">3ro</span> <span class="badge badge-secondary">4to</span> <span class="badge badge-secondary">5to</span> </td>
                                <td>
                                     <a class="btn btn-secondary" href="{{ route('admin.ramosProfesor.show', 1)}}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Geografia</td>
                                <td><span class="badge badge-secondary">1ro</span> <span class="badge badge-secondary">2do</span> <span class="badge badge-secondary">3ro</span> <span class="badge badge-secondary">4to</span> <span class="badge badge-secondary">5to</span> </td>
                                <td>
                                     <a class="btn btn-secondary" href="{{ route('admin.ramosProfesor.show', 1)}}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Historia Universal</td>
                                <td><span class="badge badge-secondary">1ro</span> <span class="badge badge-secondary">2do</span> <span class="badge badge-secondary">3ro</span> <span class="badge badge-secondary">4to</span> <span class="badge badge-secondary">5to</span> </td>
                                <td>
                                     <a class="btn btn-secondary" href="{{ route('admin.ramosProfesor.show', 1)}}">
                                        <i class="fa fa-pencil"></i>
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
