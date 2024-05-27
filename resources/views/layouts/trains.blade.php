@extends('layouts.app')
@section('content')
    <h1>Contenuto treni</h1>
    @foreach ($trains as $train)
       <div class="card">
            <div>Azienda: {{ $train->azienda }}</div>
            <div>Stazione di Partenza: {{ $train->stazione_di_partenza }}</div>
            <div>Stazione di Arrivo: {{ $train->stazione_di_arrivo }}</div>
            <div>Orario di Partenza: {{ $train->orario_di_partenza }}</div>
            <div>Orario di Arrivo: {{ $train->orario_di_arrivo }}</div>
            <div>Codice PNR: {{ $train->codice_treno }}</div>
            <div>Carrozze: {{ $train->numero_carrozze }}</div>
            <div>In orario: {{ $train->in_orario }}</div>
            <div>Cancellato: {{ $train->cancellato }}</div>
        </div>   
    @endforeach
@endsection
