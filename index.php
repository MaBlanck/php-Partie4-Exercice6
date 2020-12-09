<?php
function identity($lastname = 'Szyslak', $firstname = 'Moe', $age = 47)
{
    return 'Bonjour' . ' ' . $firstname . ' ' . $lastname . ', tu as ' . $age . ' ans.';
} ?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 6 Partie 4</title>
</head>

<body>
    <h1>Exercice 6 Partie 4</h1>
    <p><?= identity() ?></p>
</body>

</html>