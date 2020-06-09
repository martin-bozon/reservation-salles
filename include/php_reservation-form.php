<?php
    if(!isset($_SESSION["login"]))
        {
            header("Location:index.php");
        }
    else
        {                        
            if(isset($_POST["validresa"]) && !empty($_POST["titre"]) && !empty($_POST["description"]) && !empty($_POST["debut_date"]) && !empty($_POST["debut_heure"]) && !empty($_POST["fin_date"]) && !empty($_POST["fin_heure"]))
                {                    
                    $debut = $_POST["debut_date"] . " " . $_POST["debut_heure"];
                    $fin = $_POST["fin_date"] . " " . $_POST["fin_heure"];
                    $titre = $_POST["titre"];
                    $description = $_POST["description"];        
                    $debut_str = strtotime($debut);
                    $fin_str = strtotime($fin);                    
                    
                    //vérifie que l'heure de début choisie n'est pas déjà enregistré
                    // $requete_creneau = "SELECT * FROM reservations WHERE debut='$debut'";
                    // $query_creneau = mysqli_query($connexionbd, $requete_creneau);
                    // $info_creneau = mysqli_fetch_all($query_creneau, MYSQLI_ASSOC);

                    // if(empty($info_creneau))
                    //     {
                             if($debut_str<time()) 
                                //check date saisie pour début n'est pas déjà passée 
                                //time -2 heures !!!!!                            
                                    {
                                        echo "début";                        
                                    }
                                else
                                    {
                                        if($fin_str<$debut_str) 
                                        //check si date de fin n'est pas avant début
                                        //manque faire en sorte que le créneau dure 1h !!!!
                                            {
                                                echo "fin";
                                            }
                                        // else if(//crénau d'une heure !)
                                        //     {
                                                
                                        //     }
                                        // else
                                        //     {
                                        //         //ajout dans la bdd
                                        //     }
                                    }
                            //}                                        
                }
        }
?>

<!-- $connexionbd = mysqli_connect("localhost", "root", "", "reservationsalles");
                    $ajout = "INSERT INTO reservations (titre, description, debut, fin, id_utilisateurs) VALUES ('$titre', '$description', '$debut', '$fin', '$id')";
                    $query_ajout = mysqli_query($connexionbd, $ajout); -->