<?php
    if(!isset($_SESSION["login"]))
        {
            header("Location:index.php");
        }
    else
        {
            if(isset($_POST["validmod"]) && !empty($_POST["login"]) && !empty($_POST["old_password"]))
                {
                    if(password_verify($_POST["old_password"], $_SESSION["password"]))
                        {
                            $login = $_POST["login"];
                            $mdp = $_POST["nw_password"];
                            $id = $_SESSION["id"];

                            $connnexionbd = mysqli_connect("localhost", "root", "", "reservationsalles");
                            $requete_user = "SELECT * FROM utilisateurs WHERE login='$login'";
                            $query_requete = mysqli_query($connnexionbd, $requete_user);
                            $info_user = mysqli_fetch_all($query_requete, MYSQLI_ASSOC);

                            if(empty($info_user) || $login == $_SESSION["login"])
                                {
                                    $update_login = "UPDATE utilisateurs SET login='$login' WHERE id='$id'";
                                    $query_login = mysqli_query($connnexionbd, $update_login);
                                    $_SESSION["login"] = $login;
                                    $msg_login = "Login modifié";
                                }
                            else
                                {
                                    $msg_error = "Ce login est déjà prit";
                                }
                            if(isset($mdp) && !empty($mdp))
                                {
                                    if($mdp == $_POST["conf_password"])
                                        {
                                            $mdp_hash = password_hash($mdp, PASSWORD_DEFAULT);

                                            $update_mdp = "UPDATE utilisateurs SET password='$mdp_hash' WHERE id='$id'";
                                            $query_mdp = mysqli_query($connnexionbd, $update_mdp);
                                            $_SESSION["password"] = $mdp_hash;
                                            $msg_mdp = "Mot de passe modifié";
                                        }
                                    else
                                        {
                                            $msg_error = "Les mots de passe ne correspondent pas";
                                        }
                                }
                        }
                    else
                        {
                            $msg_error = "Mauvais mot de passe";
                        }
                }
           
        }
?>