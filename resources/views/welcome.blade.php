<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to Cars Project</title>


    </head>
    <body>
        <h1>Welcome {{$name}}, I am {{$age}} years old.</h1>
    </body>
</html>
