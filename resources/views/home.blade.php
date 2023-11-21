@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>Treni</h1>

        <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">Partenza</th>
                <th scope="col">Arrivo</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">Codice treno</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($train as $item )
                    <tr>
                        <td>{{$item->departure_station}}</td>
                        <td>{{$item->arrival_station}}</td>
                        <td>{{$item->departure_time}}</td>
                        <td>{{$item->arrival_time}}</td>
                        <td>{{$item->train_code}}</td>
                        <td class="{{$item->isin_time ? 'text-success' : 'text-danger'}}">{{$item->isin_time ? 'In orario' : 'In ritardo'}}</td>
                        <td class="text-danger">{{$item->isdeleted ? 'Cancellato' : ''}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>

    </div>
@endsection
