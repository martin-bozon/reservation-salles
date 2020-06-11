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
        <section>
            <h1>Réserver par <?php echo $login;?></h1>
            <p>Le <?php echo $jour?> de <?php echo $heure_debut;?> à <?php echo $heure_fin;?></p>
            <p>Intitulé : <?php echo $titre;?></p>
            <p>Description : <?php echo $description;?></p>
        </section>
    </main>

    <?php include 'include/footer.php';?>
</body>
</html>