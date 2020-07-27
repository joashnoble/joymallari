<div class="row report_header">
    <div class="col-xs-12">
       <table width="100%">
            <tr>
                <td width="15%">
                    <?php if($data->logo_1_is_show == 1){ ?>
                        <img src="<?php echo base_url($data->logo_1_path); ?>" width="90" height="90" style="float: left;margin-left: 5%;">
                    <?php }?>
                </td>
                <td width="70%">
                    <center>
                        <span style="font-size: 14pt;font-weight: bold;">
                            <?php echo $data->header_title; ?>
                        </span>
                        <br/><?php echo $data->header_info; ?>
                    </center>
                </td>
                <td width="15%">
                    <?php if($data->logo_2_is_show == 1){ ?>
                        <img src="<?php echo base_url($data->logo_2_path); ?>" width="90" height="90" style="float: right;margin-right: 5%;">
                    <?php } ?>
                </td>
            </tr>
        </table>
    </div>
</div>