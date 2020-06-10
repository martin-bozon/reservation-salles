<?php   
        for($heure = 8; $heure <= 20; $heure++)
            {                
    ?>  
        <tr>
            <td><p><?php echo $heure . "h";?></p></td>
    <?php
                for($jour = 1; $jour<=5; $jour++)
                    {
    ?>
                        <td><p>dispo</p></td>
    <?php
                    }
    ?>
        </tr>
    <?php
            }    
?>