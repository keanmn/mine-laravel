<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta description="Oula">
        <title>Best mine site Laravel</title>
    </head>
    <body>
    <a href="/">Home</a>
    <a href="/concessions">See all concession</a>
    <a href="/concession/create">Creat new concession</a>
        <p> nom:  {{$mine->name}}</p>
        <p> longitude:  {{$mine->longitude}}</p>
        <p>latitude: {{$mine->latitude}}</p>
    </body>
</html>