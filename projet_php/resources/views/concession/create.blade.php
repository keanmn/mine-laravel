<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'une concession</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="/concessions">See all concession</a>
    <a href="/concession/create">Creat new concession</a>
    <h1>La nouvelle concession</h1>
    <form method="post" action="/concession/create">
        @csrf
        <table>
            <tr>
                <td>
                    <input type="text" name="name" placeholder="Nom de la concession">
                </td>
                <td>
                    <input type="text" name="siret" maxlength="15" placeholder="Numero de SIRET">
                </td>
                <td>
                    <input type="tel" name="phone" placeholder="Phone number">
                </td>
                <td>
                    <input type="submit" value="envoyer">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>