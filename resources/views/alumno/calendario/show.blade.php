@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Horario</h4>
                <hr>
                  <!-- Calendar -->
                    <div class="calendar shadow bg-white p-5">

                        <ol class="day-names list-unstyled">
                        <li class="font-weight-bold text-uppercase">Dom</li>
                        <li class="font-weight-bold text-uppercase">Lun</li>
                        <li class="font-weight-bold text-uppercase">Mar</li>
                        <li class="font-weight-bold text-uppercase">Mie</li>
                        <li class="font-weight-bold text-uppercase">Jue</li>
                        <li class="font-weight-bold text-uppercase">Vie</li>
                        <li class="font-weight-bold text-uppercase">Sab</li>
                        </ol>

                        <ol class="days list-unstyled">
                        <li>
                            <div class="date">1</div>
                        </li>
                        <li>
                            <div class="date">2</div>
                            <div class="event bg-success">Lenguaje</div>
                            <div class="event bg-success">Historia</div>
                        </li>
                        <li>
                            <div class="date">3</div>
                            <div class="event bg-success">Geografia</div>
                            <div class="event bg-success">Musica</div>
                        </li>
                        <li>
                            <div class="date">4</div>
                            <div class="event bg-success">Lenguaje</div>
                            <div class="event bg-success">Historia</div>
                        </li>
                        <li>
                            <div class="date">5</div>
                            <div class="event bg-success">Matematica</div>
                            <div class="event bg-success">Historia</div>
                        </li>
                        <li>
                            <div class="date">6</div>
                            <div class="event bg-success">Matematica</div>
                            <div class="event bg-success">Historia</div>
                        </li>
                        </ol>
                    </div>
            </div>
        </div>
    </div>

</div>
@endsection


@push('scripts')
    <script src="{{ asset('js/plugins/jquery/jquery.min.js')}}"></script>

@endpush
