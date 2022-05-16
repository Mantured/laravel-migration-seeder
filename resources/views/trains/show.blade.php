@extends('layouts.app')

@section('title', 'Train Details')

@section('main-content')
<section class="container text-center">
    <h1> Trrains Tabelouns </h1>
    <div class="row g-2">
            <div class="col-12 border border-dark border-3 rounded-3 p-0">
                <div class="{{($train->cancellato) ? "bg-warning" : ""}} p-2">
                    <p>{{$train->data_partenza}}</p>
                    <h4>{{$train->codice_treno}} | {{$train->stazione_di_partenza }} &#x2192; {{$train->stazione_di_arrivo}}</h4>
                    <h5>{{$train->azienda}}, {{ $train->orario_di_partenza }} | {{ $train->orario_di_arrivo }}</h5>
                    <h6>Ritardo: {{ ($train->in_orario) ? "No" : "Si"}}</h6>
                    <h6>Carrozze: {{ $train->numero_carrozze }}</h6>
                </div>
            </div>
    </div>
</section>
@endsection
