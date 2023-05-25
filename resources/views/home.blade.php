@extends('layout.app')


@section('content')
<h1 class="text-center py-2 text-danger">Trains</h1>
<div class="container">
    <table class="table table-striped-columns table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Azienda</th>
                <th scope="col">stazione_partenza</th>
                <th scope="col">stazione_arrivo</th>
                <th scope="col">orario_partenza</th>
                <th scope="col">orario_arrivo</th>
                <th scope="col">codice_treno</th>
                <th scope="col">numero_carrozze</th>
                <th scope="col">in_orario</th>
                <th scope="col">cancellato</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($trains as $train)
          <tr>
            <th scope="row">{{$train->id}}</th>
            <td>{{$train->azienda}}</td>
            <td>{{$train->stazione_partenza}}</td>
            <td>{{$train->stazione_arrivo}}</td>
            <td>{{$train->orario_partenza}}</td>
            <td>{{$train->orario_arrivo}}</td>
            <td>{{$train->codice_treno}}</td>
            <td>{{$train->numero_carrozze}}</td>
            <td>{{$train->in_orario}}</td>
            <td>{{$train->cancellato}}</td>
        </tr>
        @empty
        <div class="col">
        <p>Come back later!</p>
        </div>
        @endforelse
        </tbody>
      </table>
</div>
@endsection