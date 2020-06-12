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
        <h1>Planning</h1>
        <table>
            <thead>
                <tr>
                    <th class="vide"></th>
                    <th class="jour">Lundi</th>
                    <th class="jour">Mardi</th>
                    <th class="jour">Mercredi</th>
                    <th class="jour">Jeudi</th>
                    <th class="jour">Vendredi</th>
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