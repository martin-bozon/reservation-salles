<?php   


$connexionbd = mysqli_connect("localhost", "root", "", "reservationsalles");
$requete_resa = "SELECT * FROM reservations";//sélectionne toutes les réservations
$query_resa = mysqli_query($connexionbd, $requete_resa);
$info_resa = mysqli_fetch_all($query_resa, MYSQLI_ASSOC);
var_dump($info_resa);

$requete_TN = "SELECT utilisateurs.login FROM reservations INNER JOIN utilisateurs WHERE utilisateurs.id='$id'";

var_dump($titre_nom);

foreach($info_resa as $resa => $Hresa)//sépare les réservations
    {        
        var_dump($Hresa);
        $JH = explode(" ", $Hresa["debut"]);//sélection la ligne correspondant à l'heure de début

        $H = explode(":", $JH[1]);//explose l'heure
        $heure_resa = date("G", mktime($H[0], $H[1], $H[2], 0, 0, 0));//récupère uniquement l'heure sans le 0                  
        
        $J = explode("-", $JH[0]);//explose la date
        $jour_resa = date("N", mktime(0, 0, 0, $J[1], $J[2], $J[0]));//récupère le numéro du jour      
        
        $case_resa = $heure_resa . $jour_resa;//crée un numéro de réservation
       
    }


        for($heure = 8; $heure <= 20; $heure++)//génération lignes des heures
            {                
    ?>  
        <tr>
            <td><p><?php echo $heure . "h";?></p></td>
    <?php
                for($jour = 1; $jour<=5; $jour++)//génération des cellules sous les jours
                    {
                        $case = $heure . $jour;//Crée un numéro pour chaque cellules
    ?>
                        <td><p><?php echo $case?></p></td><!--donne un numéro à chaque cellules -->
    <?php
                    }
    ?>
        </tr>
    <?php
            }    
?>