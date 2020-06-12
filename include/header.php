<header>
    <?php
        if(isset($_SESSION["login"]))
            {
        ?>            
                    <section id="HG">
                        <h2><a href="index.php">Accueil</a></h2>
                    </section>
                    <section id="HD">
                        <h2><a href="planning.php">Planning</a></h2>
                        <h2><a href="reservation-form.php">Réserver une salle</a></h2>
                        <h2><a href="profil.php">Profil</a></h2>
                        <form method="POST">
                            <input type="submit" name="deco" class="bouton" value="Déconnexion"/>
                        </form>
                    </section>
                    <?php
                        if(isset($_POST["deco"]))
                            {
                                session_destroy();
                                header("Location:index.php");
                            }     
            }
        else
            {
        ?>                
                    <section id="HG">
                        <h2><a href="index.php">Accueil</a></h2>
                    </section>
                    <section id="HD">
                        <h2><a href="inscription.php">Inscription</a></h2>
                        <h2><a href="connexion.php">Connexion</a></h2>
                        <h2><a href="planning.php">Planning</a></h2>
                    </section>                
        <?php
            }
    ?>
</header>