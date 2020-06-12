<?php 
    session_start();
    include 'include/php_inscription.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Inscription</title>
</head>
<body>
    <?php include 'include/header.php';?>

    <main>
        <h1>Formulaire d'inscription</h1>
        <form action="inscription.php" method="POST" class="form_pir">
            <label for="login">Login :</label>
            <input type="text" id="login" name="login" required/>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <label for="conf_password">Confirmer Mot de passe :</label>
            <input type="password" id="conf_password" name="conf_password" required>

            <input type="submit" name="validinsc" class="bouton" value="Inscription">

            <?php
                if(isset($msg_error))
                    {
            ?>
                        <p class="msg_error">
            <?php
                        echo $msg_error;
            ?>
                        </p>
            <?php
                    }
            ?>
        </form>
    </main>

    <?php include 'include/footer.php';?>
</body>
</html>