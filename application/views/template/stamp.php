<?php if($stamp_data->is_show_print == 1){ ?>
<div style="border: 1px solid lightgray;padding: 5px; border-radius: .5em;">
    <center>
        <span style="text-transform: uppercase;font-weight: bold;"><?php echo $stamp_data->stamp_title;?></span><br>
        <span><?php echo $stamp_data->stamp_info;?></span><br>
        <small>PRC Lic. # <?php echo $stamp_data->prc_lic_no; ?></small><br>
        <small>PHIC Accreditation # <?php echo $stamp_data->phic_accre_no; ?></small><br>
        <small>PTR # <?php echo $stamp_data->ptr_no; ?></small><br>
        <small>S2 # <?php echo $stamp_data->s2_no; ?></small><br>
    </center>
</div>
<?php } ?>