<?php 
    session_start();
    include 'include/php_connexion.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Connexion</title>
</head>
<body>
    <?php include 'include/header.php';?>

    <main>
        <h1>Formulaire de Connexion</h1>    
            <form action="connexion.php" method="POST" id="form_co">
                <label for="login">Login :</label>
                <input type="text" id="login" name="login" required/>

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>            

                <input type="submit" name="validcon" class="bouton" value="Connexion">

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
            <p>Tu n'as pas encore de comptes ? => <a href="inscription.php">inscris toi !</a></p>                 
    </main>

    <?php include 'include/footer.php';?>
</body>
</html>