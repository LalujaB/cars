@extends ('layouts/master')

@section('title')
    Cars
@endsection

@section('content')


        @if($car)
            <div>
                {{$car->title}}
                {{$car->producer}}
                {{$car->number_od_doors}}
            </div>
        @endif

@endsection