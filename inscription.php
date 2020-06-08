<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"/>
    <title>Inscription</title>
</head>
<body>
    <?php include 'include/header.php';?>

    <main>
        <h1>Formulaire d'inscription</h1>
        <form action="inscription.php" method="POST">
            <label for="login">Login :</label>
            <input type="text" id="login" name="login"/>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password">

            <label for="conf_password">Confirmer Mot de passe :</label>
            <input type="password" id="conf_password" name="conf_password">

            <input type="submit" name="validinsc" value="Inscription">
        </form>
    </main>

    <?php include 'include/footer.php';?>
</body>
</html>