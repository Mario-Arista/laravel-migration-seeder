@extends('layouts/app')

@section('title')
    Laravel Migration-Seeder
@endsection

@section('content')
    <div class="container">
        <h1 class="text-white">
            Lista di treni diponibili da oggi:
        </h1>
        @foreach ($trains as $train)
            <div class="train text-white">
                Compagnia: {{ $train->company }}
                Stazione: {{ $train->starting_station }}
                Prezzo: {{ $train->price }}
                Data di partenza: {{ $train->date }}
                Orario di partenza: {{ $train->departure_time }}
                Orario di arrivo: {{ $train->arrival_time }}
            </div>
        @endforeach

    </div>

@endsection