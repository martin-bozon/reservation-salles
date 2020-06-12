<main id="accueil">
<?php
    if(isset($_SESSION["login"]))
        {
    ?>
            <section>
                <a href="reservation-form.php">Réserver la Broadcast room</a>
                <p>Créneau <b>d'une heure maximum</b>, n'oubliez pas de remplir la description !</p>
                <p><i>Merci de laisser la salle propre et ranger après votre passage</i></p>
            </section>
            
            <section>
                <img src="image/salle.jpg" alt="salle de réunion" id="reunion">
            </section>
    <?php
        }
    else
        {
    ?>
            <section>
                <p><a href="inscription.php">Inscris</a> toi et <a href="connexion.php">connectes</a> toi pour réserver la salle</p>
            </section>
            <section>
                <img src="image/salle.jpg" alt="salle de réunion" id="reunion">
            </section>
            
    <?php
        }
?>
</main>