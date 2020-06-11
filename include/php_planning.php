<?php   
$connexionbd = mysqli_connect("localhost", "root", "", "reservationsalles");
$requete_resa = "SELECT * FROM utilisateurs INNER JOIN reservations ON utilisateurs.id = reservations.id_utilisateurs WHERE week(debut) = week(curdate())";
//sélectionne toutes les réservations de la semaine en cour, en allant chercher le login de l'user qui fait la résa. 
$query_resa = mysqli_query($connexionbd, $requete_resa);
$info_resa = mysqli_fetch_all($query_resa, MYSQLI_ASSOC);
//var_dump($info_resa);

        for($heure = 8; $heure <= 20; $heure++)//génération lignes des heures
            {                
                ?>  
        <tr>
            <td><p><?php echo $heure . "h";?></p></td>
                <?php
                for($jour = 1; $jour<=5; $jour++)//génération des cellules sous les jours
                    {
                        if(!empty($info_resa))
                            {                                
                                foreach($info_resa as $resa => $Hresa)//sépare les réservations
                                    {                                                
                                        $JH = explode(" ", $Hresa["debut"]);//sélection la ligne correspondant à l'heure de début

                                        $H = explode(":", $JH[1]);//explose l'heure
                                        $heure_resa = date("G", mktime($H[0], $H[1], $H[2], 0, 0, 0));//récupère uniquement l'heure sans le 0                  
                                        
                                        $J = explode("-", $JH[0]);//explose la date
                                        $jour_resa = date("N", mktime(0, 0, 0, $J[1], $J[2], $J[0]));//récupère le numéro du jour      
                                        
                                        $case_resa = $heure_resa . $jour_resa;//crée un numéro de réservation   
                                        //var_dump($case_resa);
                                        $titre = $Hresa["titre"];
                                        $login = $Hresa["login"];
                                        $id = $Hresa["id"];
                                    
                                    
                                $case = $heure . $jour;//Crée un numéro pour chaque cellules
                                
                                if($case == $case_resa)
                                    { 

                                        ?>
                                            <td><p><?php echo $titre . "&nbsp" . $login?></p></td>
                                        <?php
                                    }
                                else
                                    
                                         $case = null;
                                    }                                                                       
                                if ($case == null)
                                    {                    
                                        ?>
                                            <td><p>Dispo<?php echo $case;?></p></td><!--donne un numéro à chaque cellules -->
                                        <?php
                                    }
                                    
                            }
                        else
                            {
                                ?>
                                    <td><p>Dispo</p></td><!--si aucune résé n'est faite -->
                                <?php
                            }        
                    }   
            ?>                                        
        </tr>
    <?php
            }    
?>