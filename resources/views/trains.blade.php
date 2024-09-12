@extends('layouts.main')

@section('content')

<!-- Contenitore informazioni treni -->
<div class="box">


    <!-- Tabella treni -->
    <div class="tabella">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Company</th>
                    <th scope="col">Partenze</th>
                    <th scope="col">Arrivi</th>
                    <th scope="col">OrarioPartenza</th>
                    <th scope="col">OrarioArrivo</th>
                    <th scope="col">CODE</th>
                    <th scope="col">N Carrozze</th>
                    <th scope="col">Puntualità</th>
                    <th scope="col">Cancellato</th>
                    <th scope="col">Data di partenza</th>
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