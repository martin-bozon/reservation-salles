<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"/>
    <title>Connexion</title>
</head>
<body>
    <?php include 'include/header.php';?>

    <main>
        <h1>Formulaire de Connexion</h1>
        <section>
            <form action="inscription.php" method="POST">
                <label for="login">Login :</label>
                <input type="text" id="login" name="login"/>

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password">            

                <input type="submit" name="validinsc" value="Inscription">
            </form>
            <p>Tu n'as pas encore de comptes ? => <a href="inscription.php">inscris toi !</a></p>
        </section>
    </main>

    <?php include 'include/footer.php';?>
</body>
</html>