<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher $_GET</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Formulaire GET</h1>
    <form action="" method="GET">
        <label for="arg1">Argument 1:</label>
        <input type="text" name="arg1" id="arg1"><br><br>

        <label for="arg2">Argument 2:</label>
        <input type="text" name="arg2" id="arg2"><br><br>

        <label for="arg3">Argument 3:</label>
        <input type="text" name="arg3" id="arg3"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <h2>Résultat</h2>
    <?php
    if (!empty($_GET)) {
        echo "<table>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";
        
        foreach ($_GET as $key => $value) {
            echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "Aucun argument reçu via GET.";
    }
    ?>
</body>
</html>
