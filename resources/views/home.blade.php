@extends('layouts/app')

@section('title')
    Laravel Migration-Seeder
@endsection

@section('content')
    <header class="bg-white">
        <div class="container d-flex justify-content-start align-items-center gap-2">
            <img src="https://logowik.com/content/uploads/images/trenitalia4947.logowik.com.webp" alt="LOGO TRENITALIA">
            <div>
                <h1>
                    Trenitalia!
                </h1>
                <h2>
                    Il rirardo è il nostro mantra!
                </h2>
            </div>

        </div>

    </header>

    <main>
        <div class="container py-5">

            <h3>Treni in partenza dal 10 Aprile 2024:</h3>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Codice treno</th>
                    <th scope="col">Compagnia</th>
                    <th scope="col">Stazione</th>
                    <th scope="col">Data di partenza</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($trains as $train)
                  <tr>
                    <td><strong>{{ $train->train_code }}</strong></td>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->starting_station }}</td>
                    <td>{{ $train->date }}</td>
                    <td>{{ $train->price }}€</td>
                    <td>{{ substr($train->departure_time, 0, 5) }}</td>
                    <td>{{ substr($train->arrival_time, 0, 5) }}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
    
        </div>
    </main>
    
@endsection