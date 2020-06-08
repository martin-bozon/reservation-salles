<?php
    if(isset($_SESSION["login"]))
        {
            header("Location:index.php");
        }
    else
        {
            if(isset($_POST["validinsc"]))
                {
                    $login = $_POST["login"];

                    $connexionbd = mysqli_connect("localhost", "root", "", "reservationsalles");
                    $requete_user = "SELECT * FROM utilisateurs WHERE login='$login'";
                    $query_requete_user = mysqli_query($connexionbd, $requete_user);
                    $verif_user = mysqli_fetch_all($query_requete_user);
                    
                    if(empty($verif_user))
                        {
                            if($_POST["password"] == $_POST["conf_password"])
                                {
                                    $mdp = password_hash($_POST["password"], PASSWORD_DEFAULT);
                                    
                                    $insert_user = "INSERT INTO utilisateurs (login, password) VALUES ('$login', '$mdp')";
                                    $query_insert_user = mysqli_query($connexionbd, $insert_user);
                                    header("Location:connexion.php");
                                }
                            else
                                {
                                    $msg_error = "Les mots de passe ne correspondent pas";
                                }
                        }
                    else    
                        {
                            $msg_error = "Ce login existe déjà";
                        }
                    
                }
        }
?>