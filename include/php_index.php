<main>
<?php
    if(isset($_SESSION["login"]))
        {
    ?>
            <a href="reservation-form.php">Réserver une salle</a>
    <?php
        }
    else
        {
    ?>
           <p><a href="inscription.php">Inscris</a> toi et <a href="connexion.php">connectes</a> toi pour réserver une salle</p> 
    <?php
        }
?>
</main>