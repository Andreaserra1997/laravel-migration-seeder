<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <ul>
            @foreach ($trains as $train)
                <li>
                    Azienda: {{ $train->company }} - 
                    Stazione di partenza: {{ $train->starting_station }} -
                    Stazione di arrivo: {{ $train->end_station }} -
                    Orario di partenza: {{ $train->departure_time }} -
                    Orario di arrivo: {{ $train->arrival_time }} -
                    Codice Treno: {{ $train->train_code }} -
                    Numero Carrozze: {{ $train->number_coaches }}
                </li>
            @endforeach
        </ul>
    </body>
</html>