<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>
    <p>Bonjour {{ $email }} votre réservation pour le {{ $date }} à {{ $time }} est confirmée.</p>
    <a href="https://gym-affluences.herokuapp.com/cancel/<?=$token?>">Annuler la réservation</a>
</body>
</html>
