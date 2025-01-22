<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    $_SESSION['nbvisites']++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <p>Nombre de visites : <strong><?php echo $_SESSION['nbvisites']; ?></strong></p>
    <form method="POST">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>