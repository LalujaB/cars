@extends('layouts/master')

@section('title')
    Cars
@endsection

@section('content')
    <div>
        @foreach($cars as $car)
            <tr>
                <td>
                    <a href="cars/{{$car->id}}"> {{$car->title}} </a>
                </td>

                <td>
                    {{$car->producer}}
                </td>

                <td>
                    {{$car->number_of_doors}}
                </td>
            </tr>
        @endforeach
    </div>
@endsection