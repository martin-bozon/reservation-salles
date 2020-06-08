<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"/>
    <title>Réserver une salle</title>
</head>
<body>
    <?php include 'include/header.php';?>

    <main>
        <h1>Réserver une salle</h1>
        <form action="reservation-form" method="POST">
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="titre"/>

            <label for="description">Description:</label>
            <input type="text" id="description" name="description">

            <label for="debut">Date de début :</label>
            <input type="date" id="debut" name="debut">
            <input type="time" id="debut" name="debut">
            <small>Première session à 8h, dernière session à 19h</small>

            <label for="fin">Date de début :</label>
            <input type="date" id="fin" name="fin">
            <input type="time" id="fin" name="fin">
            <small>Crénaux d'une heure !</small>

            <input type="submit" name="validinsc" value="Inscription">
        </form>
    </main>

    <?php include 'include/footer.php';?>
</body>
</html>