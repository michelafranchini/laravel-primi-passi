<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Primi passi con Laravel</title>
    </head>
    <body>
        <h1>Hello world!</h1>
        <div>
            <h2>Studente</h2>
            <div>
                
                <h3>{{$nome}}</h3>
                <h3>{{$cognome}}</h3>
                <h3>{{$età}}</h3>
            </div>
            <div>
                <h2>SKILL</h2>
                @foreach ($data as $value)
                    <p>{{$value}}</p>
                @endforeach
            </div>
        </div>
    </body>
</html>