@extends('layout.main')

@section('content')

<h1>Trains</h1>

<div class="container">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Compagnia</th>
            <th scope="col">Codice treno</th>
            <th scope="col">Slug</th>
            <th scope="col">Prtenza</th>
            <th scope="col">Arrivo</th>
            <th scope="col">Orario partenza</th>
            <th scope="col">Orario arrivo</th>
            <th scope="col">Ritardo</th>
            <th scope="col">Numero carrozze</th>
            <th scope="col">Numero posti</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)

            <tr>
              <th>{{ $train->agency }}</th>
              <th>{{ $train->train_code }}</th>
              <th>{{ $train->slug }}</th>
              <th>{{ $train->departure_station }}</th>
              <th>{{ $train->arrival_station }}</th>
              <th>{{ $train->departure_time }}</th>
              <th>{{ $train->arrival_time }}</th>
              <th>{{ $train->delay ? 'Si' : 'No' }}</th>
              <th>{{ $train->number_carriages }}</th>
              <th>{{ $train->seat_number }}</th>

            </tr>

            @endforeach

        </tbody>
      </table>

      <div class="container">
        {{$trains->links()}}
      </div>
</div>

@endsection
