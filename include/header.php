<?php
    if(isset($_SESSION["login"]))
        {
    ?>
            <header>
                <section>
                    <h2><a href="index.php">Accueil</a></h2>
                </section>
                <section>
                    <h2><a href="planning.php">Planning</a></h2>
                    <h2><a href="reservation-form.php">Réserver une salle</a></h2>
                    <h2><a href="profil.php">Profil</a></h2>
                    <form method="POST">
                        <input type="submit" name="deco" value="Déconnexion"/>
                    </form>
                </section>
            </header>
    <?php
        }
    else
        {
    ?>
            <header>
                <section>
                    <h2><a href="index.php">Accueil</a></h2>
                </section>
                <section>
                    <h2><a href="inscription.php">Inscription</a></h2>
                    <h2><a href="connexion.php">Connexion</a></h2>
                    <h2><a href="planning.php">Planning</a></h2>
                </section>
            </header>
    <?php
        }
?>