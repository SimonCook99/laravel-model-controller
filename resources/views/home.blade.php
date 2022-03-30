<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    
    <h1>Film attualmente presenti:</h1>

    <ul>

        <!--Scorro la lista dei film passata da PageController-->
        @foreach ($movies as $movie)
            <li>
                <h3>Titolo: {{$movie["title"]}}</h3>
                <h3>Titolo originale: {{$movie["original_title"]}}</h3>
                <p>Nazionalità:{{$movie["nationality"]}}</p>
                <p>Data di rilascio: {{$movie["date"]}}</p>
                <p>Recensioni: {{$movie["vote"]}}</p>
            </li>
        @endforeach

    </ul>


</body>
</html>