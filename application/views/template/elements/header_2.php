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
        <table width="100%" style="font-size: 7pt;font-family:tahoma;">
            <tr>
                <td valign="top" align="right" width="35%">
                    <b class="text-uppercase">Dizon-Mallari Medical Clinic</b><br/>
                    092 Hi way San Pablo, Mexico, Pampanga<br>
                    Clinic hours Mon thru Fridays (except Wed) 9-11am<br>
                    Tel # 09156285228 / 09556457206 / (045) 4353646
                </td>
                <td valign="top" align="center" width="30%">
                    <b class="text-uppercase">V.L MAKABALI MEMORIAL HOSPITAL</b><br/>
                    Medical Arts Building RM 2113<br>
                    Wednesdays and Fridays 3-5 pm<br>
                    Tel # (045) 4361275 / 09267200990
                </td>
                <td valign="top" align="left" width="35%">
                    <b class="text-uppercase">GREEN CITY MEDICAL CENTER</b><br/>
                    San Fernando, Pampanga RM 9<br>
                    Tuesday &amp; Thursday 3-5pm<br/>
                    Tel # (045) 4361275 / 09267200990
                </td>
            </tr>
        </table> <br/>
        <table width="100%" style="font-size: 7pt;font-family:tahoma;">
            <tr>
                <td valign="top" align="right" style="padding-right: 10px;" width="50%">
                     <b class="text-uppercase">PAMPANGA MEDICAL SPECIALIST HOSPITAL</b><br>
                        San Antonio, Guagua, Pampanga<br>
                        Clinic hours: Mon 3pm RM 123<br>
                        Tel # 09463301837
                </td>
                <td valign="top" align="left" style="padding-left: 10px;" width="50%">
                    <b class="text-uppercase">PAMPANGA PREMIER MEDICAL CENTER</b><br/>
                    Km55 MacArthur Highway, Sampaloc, Apalit, Pampanga<br>
                    Clinic hours: Wed 10am - 12nn RM 11<br>
                    Tel # 09328728040                    
                </td>
            </tr>
        </table>
    </div>
</div>