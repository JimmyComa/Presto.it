<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>un utente  ha richiesti di lavorare con noi</h1>
    <h2> i suoi dati: </h2>
    <p>nome: {{$user->name}}</p>
    <p>email: {{$user->email}}</p>
    <p>Vuoi rendere l'utente revisore?</p>
    <a href="{{route('make.revisor',compact('user'))}}">Rendi utente revisore</a>
</body>
</html>