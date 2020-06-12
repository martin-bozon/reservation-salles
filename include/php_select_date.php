<?php
if(isset($_GET["date_debut"]))
    {
        $date_debut = $_GET["date_debut"];

        if($date_debut ==1)
            {
                $date_select = date( 'Y-m-d', strtotime('monday this week'));
            }
        if($date_debut ==2)
            {
                $date_select = date( 'Y-m-d', strtotime('tuesday this week'));
            }
        if($date_debut ==3)
            {
                $date_select = date( 'Y-m-d', strtotime('wednesday this week'));
            }
        if($date_debut ==4)
            {
                $date_select = date( 'Y-m-d', strtotime('thursday this week'));
            }
        if($date_debut ==5)
            {
                $date_select = date( 'Y-m-d', strtotime('friday this week'));
            }
        ?>
            <input type="date" id="debut" name="debut_date" min = "<?php echo date('Y-m-d')?>" value="<?php echo $date_select;?>" required>
        <?php
    }
    else    
    {
        ?>
        <input type="date" id="debut" name="debut_date" min = "<?php echo date('Y-m-d')?>"/>
        <?php
    }
?>