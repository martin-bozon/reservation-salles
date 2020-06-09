<?php
    if(isset($_SESSION["login"]))
        {
            header("Location:index.php");
        }
    else
        {
            if(isset($_POST["validcon"]))
                {
                    $login = $_POST["login"];
                    $mdp = $_POST["password"];

                    $connexionbd = mysqli_connect("localhost", "root", "", "reservationsalles");
                    $requete_user = "SELECT * FROM utilisateurs WHERE login='$login'";
                    $query_user = mysqli_query($connexionbd, $requete_user);
                    $info_user = mysqli_fetch_all($query_user, MYSQLI_ASSOC);

                    if(!empty($info_user))
                        {
                            if(password_verify($mdp, $info_user[0]["password"]))
                                {
                                    session_start();
                                    $_SESSION["login"] = $info_user[0]["login"];
                                    $_SESSION["password"] = $info_user[0]["password"];
                                    $_SESSION["id"] = $info_user[0]["id"];
                                    mysqli_close($connexionbd);                                    
                                    header("Location:index.php");
                                }
                            else
                                {
                                    $msg_error = "Mauvais mot de passe";
                                }
                        }
                    else
                        {
                            $msg_error = "Ce login n'est pas valide";
                        }
                }
        }
?>