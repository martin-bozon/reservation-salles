<?php
    if(isset($_GET["heure_debut"]))
        {
            for($heure_fin = 9; $heure_fin<=20; $heure_fin++)
                {
                    if($heure_fin < 10)
                        {
                            ?>
                            <option value="<?php echo "0" . $heure_fin . ":00";?>" <?php if ($heure_fin == $_GET["heure_debut"]+1){echo "selected";} ?>><?php echo "0" . $heure_fin . ":00";?></option>
                            <?php   
                        }
                    else
                        {
                            ?>
                            <option value="<?php echo $heure_fin . ":00";?>" <?php if ($heure_fin == $_GET["heure_debut"]+1){echo "selected";} ?>><?php echo $heure_fin . ":00";?></option>
                            <?php 
                        }
                }
        }
    else
        {
            for($heure_fin = 9; $heure_fin<=20; $heure_fin++)
                {
                    if($heure_fin < 10)
                        {
                            ?>
                            <option value="<?php echo "0" . $heure_fin . ":00";?>"><?php echo "0" . $heure_fin . ":00";?></option>
                            <?php   
                        }
                    else
                        {
                            ?>
                            <option value="<?php echo $heure_fin . ":00";?>"><?php echo $heure_fin . ":00";?></option>
                            <?php 
                        }
                }
        }
?>