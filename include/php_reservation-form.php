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
                    $id = $_SESSION["id"];                                                                                          
                    
                    //vérifie que l'heure de début choisie n'est pas déjà enregistré
                    $connexionbd = mysqli_connect("localhost", "root", "", "reservationsalles");
                    $requete_creneau = "SELECT * FROM reservations WHERE debut='$debut'";
                    $query_creneau = mysqli_query($connexionbd, $requete_creneau);
                    $info_creneau = mysqli_fetch_all($query_creneau, MYSQLI_ASSOC);

                    //check si le jour n'est pas week-end
                    $semaine = explode("-", $_POST["debut_date"]);                 
                    $jour = date("N", mktime(0, 0, 0, $semaine[1], $semaine[2], $semaine[0]));                    

                     if(empty($info_creneau))
                        {
                            if($debut_str<time()) //check date saisie pour début n'est pas déjà passée                                 
                                //time -2 heures !!!!!                            
                                {
                                    $msg_error =  "L'heure est déjà passée";                        
                                }
                            else
                                {
                                    if($_POST["debut_date"] == $_POST["fin_date"])//vérifie que c'est le même jour
                                        {
                                            $time_debut= explode(':', $_POST["debut_heure"]);//transforme l'heure en tableau 2 entrées                                     
                                            $time_fin = explode(':', $_POST["fin_heure"]);                                     
                                        
                                            if($fin_str<$debut_str) //check si date de fin n'est pas avant début                                                                
                                                {
                                                    $msg_error = "La fin doit être le même jour";
                                                }
                                            else if($time_fin[0] - $time_debut[0] == 1)//regarde si le créneau dure 1h
                                                {                                            
                                                    if($jour<=5)//vérifie que le jour n'est pas week-end
                                                        {                                                   
                                                                $ajout = "INSERT INTO reservations (titre, description, debut, fin, id_utilisateurs) VALUES ('$titre', '$description', '$debut', '$fin', '$id')";
                                                                $query_ajout = mysqli_query($connexionbd, $ajout); 
                                                                $msg_valid = "réservation prise en compte";
                                                        }
                                                    else
                                                        {
                                                            $msg_error = "Pas de réservation le week-end";
                                                        }
                                                }
                                            else
                                                {
                                                    $msg_error = "Le créneau doit faire 1h";
                                                }
                                        }
                                    else
                                        {
                                            $msg_error = "Date de début et de fin différente";
                                        }                                    
                                }
                        } 
                    else    
                        {
                            $msg_error = "Créneau déjà prit";
                        }                                       
                }
        }
?>

                    