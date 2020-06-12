<?php 
    session_start();
    include 'include/php_profil.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Profil</title>
</head>
<body>
    <?php include 'include/header.php';?>

    <main>
        <form action="profil.php" method="POST" class="form_pir">
            <label for="login">Login :</label>
            <input type="text" id="login" name="login"required value="<?php echo $_SESSION['login'];?>"/>

            <label for="old_password">Ancien mot de passe :</label>
            <input type="password" id="old_password" name="old_password" required>

            <label for="nw_password">Nouveau mot de passe :</label>
            <input type="password" id="nw_password" name="nw_password">

            <label for="conf_password">Confirmer mot de passe :</label>
            <input type="password" id="conf_password" name="conf_password">

            <input type="submit" name="validmod" class="bouton" value="Modifier">

            <?php                     
                    if(isset($msg_login))
                        {
                            echo "<span class='msg_'>" . $msg_login . "</span><br/>";
                        }
                    if(isset($msg_mdp))
                        {
                            echo "<span class='msg_'>" . $msg_mdp . "</span><br/>";
                        }
                    if(isset($msg_error))
                        {
                            echo "<span class='msg_'>" . $msg_error . "</span>";
                        }
                ?>
        </form>
    </main>

    <?php include 'include/footer.php';?>
</body>
</html>