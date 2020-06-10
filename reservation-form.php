<?php 
    session_start();
    include 'include/php_reservation-form.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Réserver une salle</title>
</head>
<body>
    <?php include 'include/header.php';?>

    <main>
        <h1>Réserver une salle</h1>
        <form action="reservation-form.php" method="POST">
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="titre" required>

            <label for="description">Description:</label>
            <input type="text" id="description" name="description" required>

            <label for="debut">Date de début :</label>
            <input type="date" id="debut" name="debut_date" required>        
            <select id="debut" name="debut_heure">
                <option value="08:00">08:00</option>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option> 
            </select>                       

            <label for="fin">Date de fin :</label>
            <input type="date" id="fin" name="fin_date" required>
            <select id="debut" name="fin_heure">
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option> 
            </select>  
            <small>Créneau d'une heure !</small>
           
            <input type="submit" name="validresa" value="Réserver">

            <?php
                if(isset($msg_error))
                    {
                        echo "<span class='msg_'>" . $msg_error . "</span><br/>";
                    }
                if(isset($msg_valid))
                    {
                        echo "<span class='msg_'>" . $msg_valid . "</span><br/>";
                    }
            ?>
        </form>
    </main>

    <?php include 'include/footer.php';?>
</body>
</html>