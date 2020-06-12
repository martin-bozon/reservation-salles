<?php 
    session_start();
    include 'include/php_reservation.php';   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Réservation</title>
</head>
<body>
    <?php include 'include/header.php';?>

    <main>
        <section id="reservation">
            <h1>Réserver par <u><?php echo $login;?></u></h1>
            <p>Le <?php echo $jour?> de <?php echo $heure_debut;?> à <?php echo $heure_fin;?></p>
            <section class="info_resa">
                <p><u>Intitulé</u> :</p>
                <?php echo $titre;?>
            </section>
            <hr>
            <section class="info_resa">
                <p><u>Description</u> :</p>
                <?php echo $description;?>
            </section>
            
        </section>
    </main>

    <?php include 'include/footer.php';?>
</body>
</html>