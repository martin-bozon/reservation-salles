<?php
    if(!isset($_SESSION["login"]))
        {
            header("Location:index.php");
        }
    else
        {
            if(isset($_POST["validresa"]) && !empty($_POST["titre"]) && !empty($_POST["description"]) && !empty($_POST["debut_date"]) && !empty($_POST["debut_heure"]) && !empty($_POST["fin_date"]) && !empty($_POST["fin_heure"]))
                {                    
                    $debut = $_POST["debut_date"] . "" . $_POST["debut_heure"];

                    $connexionbd = mysqli_connect("localhost", "root", "", "reservationsalles");
                    $requete_créneau = "SELECT * FROM reservations WHERE debut='$debut'";
                }
        }

?>