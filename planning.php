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
                    <th></th>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
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