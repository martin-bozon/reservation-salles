<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Planning</title>
</head>
<body>
    <?php include 'include/header.php';?>

    <main>
        <h1>Planning <?php echo $jour_semaine = date('Y', time());?></h1>
        <h2>Semaine <?php echo $jour_semaine = date('W', time());?></h2>
        <table>
            <thead>
                <tr>
                    <th class="vide"></th>
                    <th class="jour">Lundi <?php echo $jour_semaine = date('d/m', strtotime('monday this week'));?></th>
                    <th class="jour">Mardi <?php echo $jour_semaine = date('d/m', strtotime('tuesday this week'));?></th>
                    <th class="jour">Mercredi <?php echo $jour_semaine = date('d/m', strtotime('wednesday this week'));?></th>
                    <th class="jour">Jeudi <?php echo $jour_semaine = date('d/m', strtotime('thursday this week'));?></th>
                    <th class="jour">Vendredi <?php echo $jour_semaine = date('d/m', strtotime('friday this week'));?></th>
                </tr>                              
            </thead>
            <tbody>
                <?php include 'include/php_planning.php';?>               
            </tbody>
        </table>
    </main>

    <?php include 'include/footer.php';?>
</body>
</html>