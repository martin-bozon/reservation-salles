<?php
    if(isset($_GET["date_debut"]))
        {
            ?>
            <input type="date" id="fin" name="fin_date" min = "<?php echo date('Y-m-d')?>" value="<?php echo $date_select;?>" required>
            <small>Créneau d'une heure !</small>
            <?php
        }
    else   
        {
            ?>
            <input type="date" id="fin" name="fin_date" min = "<?php echo date('Y-m-d')?>"/>
            <small>Créneau d'une heure !</small>
            <?php
        }
?>