<?php if($stamp_data->is_show_print == 1){ ?>
	<table style="border-collapse: collapse;border: 1px solid lightgray;border-radius: .5em!important;font-size: 8pt;" width="100%">
		<tr>
			<td>
				<center>
					<span style="text-transform: uppercase;font-weight: bold;"><?php echo $stamp_data->stamp_title;?></span><br/>
					<?php echo $stamp_data->stamp_info;?><br/>
					PRC Lic. # <?php echo $stamp_data->prc_lic_no; ?><br/>
					PHIC Accreditation # <?php echo $stamp_data->phic_accre_no; ?><br/>
					PTR # <?php echo $stamp_data->ptr_no; ?><br/>
					S2 # <?php echo $stamp_data->s2_no; ?>
				</center>
			</td>
		</tr>
	</table>
<?php }?>