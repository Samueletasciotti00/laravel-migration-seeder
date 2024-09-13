@extends('layouts.main')

@section('content')

<!-- Contenitore informazioni treni -->
<div class="box">


    <!-- Tabella treni -->
    <div class="tabella">
        <table class="table">
            <thead>
                <tr>
                    <th class="table-primary">Company</th>
                    <th class="table-primary">Partenze</th>
                    <th class="table-primary">Arrivi</th>
                    <th class="table-primary">OrarioPartenza</th>
                    <th class="table-primary">OrarioArrivo</th>
                    <th class="table-primary">CODE</th>
                    <th class="table-primary">N Carrozze</th>
                    <th class="table-primary">Puntualità</th>
                    <th class="table-primary">Cancellato</th>
                    <th class="table-primary">Data di partenza</th>
                </tr>
            </thead>
            <tbody>

            @foreach ($now_trains as $now)
            <tr>
                    <th>{{ $now->azienda}}</th>
                    <td>{{ $now->stazione_di_partenza}}</td>
                    <td>{{ $now->stazione_di_arrivo}}</td>
                    <td>{{ $now->orario_di_partenza}}</td>
                    <td>{{ $now->orario_di_arrivo}}</td>
                    <td>{{ $now->codice_treno}}</td>
                    <td>{{ $now->numero_carrozze}}</td>
                    <td>{{ $now->in_ritardo}}</td>
                    <td>{{ $now->cancellato}}</td>
                    <td>{{ $now->data_di_partenza}}</td>
                </tr>
            @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection