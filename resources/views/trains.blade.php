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

            @foreach ($trains as $train)
            <tr>
                    <th>{{ $train->azienda}}</th>
                    <td>{{ $train->stazione_di_partenza}}</td>
                    <td>{{ $train->stazione_di_arrivo}}</td>
                    <td>{{ $train->orario_di_partenza}}</td>
                    <td>{{ $train->orario_di_arrivo}}</td>
                    <td>{{ $train->codice_treno}}</td>
                    <td>{{ $train->numero_carrozze}}</td>
                    <td>{{ $train->in_ritardo}}</td>
                    <td>{{ $train->cancellato}}</td>
                    <td>{{ $train->data_di_partenza}}</td>
                </tr>
            @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection