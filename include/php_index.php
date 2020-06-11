<main>
<?php
    if(isset($_SESSION["login"]))
        {
    ?>
            <a href="reservation-form.php">Réserver la Broadcast room</a>
    <?php
        }
    else
        {
    ?>
           <p><a href="inscription.php">Inscris</a> toi et <a href="connexion.php">connectes</a> toi pour réserver la salle</p> 
    <?php
        }
?>
</main>