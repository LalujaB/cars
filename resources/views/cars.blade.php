<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<tbody>
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
</tbody>
</body>
</html>