<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>{{$title}}</h1>
        <h4>{{$subtitle}}</h4>
        <ul>
            @foreach ( $students as $student )
            <li>{{$student}}</li>
            @endforeach
        </ul>
        <h4>{{$subtitle1}}</h4>
        <ul>
            @foreach ( $teachers as $teacher )
            <li>{{$teacher}}</li>
            @endforeach
        </ul>
    </body>
</html>
