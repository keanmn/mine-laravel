<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site laravel sur les carriére</title>
    <meta descriprtion="">
</head>
<body>
<a href="/">Home</a>
<a href="/concessions">See all concession</a>
<a href="/concession/create">Creat new concession</a>
    <h1>Les concessions</h1>
    @foreach ($concessions as $concession)
    
        <p>La concession : {{$concession->name}}</p>
        <p> SIRET : {{$concession->siret}}</p>
    
    @endforeach
</body>
</html>