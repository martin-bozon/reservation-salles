<?php
if(isset($_GET["heure_debut"]))
    {
        for($heure_select = 8; $heure_select<=19; $heure_select++)
        {                        
            if($heure_select < 10)
                {                                
                    ?>
                    <option value="<?php echo "0" . $heure_select . ":00";?>" <?php if ($heure_select == $_GET["heure_debut"]){echo "selected";} ?>><?php echo "0" . $heure_select . ":00";?></option>
                    <?php                                
                }
            else
                {
                    ?>
                    <option value="<?php echo $heure_select . ":00";?>" <?php if($heure_select == $_GET["heure_debut"]){echo "selected";}?>><?php echo $heure_select . ":00";?></option>
                    <?php
                }                                             
        }
    }
    else
    {   
        for($heure_select = 8; $heure_select<=19; $heure_select++)
            {
                if($heure_select < 10)
                    {
                        ?>
                        <option value="<?php echo "0" .$heure_select . ":00";?>"><?php echo "0" . $heure_select . ":00";?></option>
                        <?php
                    }
                else
                    {
                        ?>
                        <option value="<?php echo $heure_select . ":00";?>"><?php echo $heure_select . ":00";?></option>
                        <?php
                    }                            
            }                    
    }
?>