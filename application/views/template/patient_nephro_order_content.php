<!DOCTYPE html>
<html>
<head>
	<title>Patient Nephro Order</title>
	<style type="text/css">
		.bottom{
			border-bottom: 1px solid black; 
		}
		.tbl-padding{
			padding-left: 50px;
		}
	</style>
</head>
<body>
	<?php include 'elements/header_1.php'; ?>
	<br/>
	<div class="padding">
		<table width="100%">
			<tr>
				<td valign="top" width="10%">Name : </td>
				<td valign="top" width="40%" class="bottom">
					<strong><?php echo $info->fullname; ?></strong>
				</td>
				<td valign="top" align="right">
					Age/Sex : 
					<span class="bottom"><?php echo $info->patient_age; ?></span> / 
					<span class="bottom"><?php echo $info->sex; ?></span>
				</td>
			</tr>
			<tr>
				<td valign="top" width="10%">Diagnosis : </td>
				<td valign="top" width="25%" class="bottom">
					<?php echo $info->nephro_diagnosis; ?>
				</td>
				<td valign="top" align="right">
					Dry Weight : 
					<span class="bottom"><?php echo $info->dry_weight; ?></span>
				</td>
			</tr>
			<tr>
				<td valign="top">Date : </td>
				<td valign="top" class="bottom">
					<?php echo date('m/d/Y', strtotime($info->nephro_order_date)); ?>
				</td>
				<td colspan="4"></td>
			</tr>
		</table>
		<br/>
	    <center>
	    	<h4 class="text-uppercase" style="font-family:tahoma;font-size:13pt;font-weight:bold;">
	        	Nephrologist's Orders
	    	</h4>
	    </center>
		<br/>

		<table width="100%">
			<?php if($info->inc_freq_3x > 0){ ?>
				<tr>
					<td>Increase frequency to 3 x a week</td>
				</tr>
			<?php }?>
			<?php if($info->upd_medical_sheet > 0){ ?>
				<tr>
					<td>Update Medical Sheet</td>
				</tr>
			<?php }?>
			<?php if($info->shift_recormon_500 > 0){ ?>
				<tr>
					<td class="tbl-padding">
						Shift to Recormon 5000 u sc route at 
						<?php if($info->shift_recormon_500_1x > 0){ ?> 1x a week <?php }?>
						<?php if($info->shift_recormon_500_2x > 0){ ?> 2x a week <?php }?>
						<?php if($info->shift_recormon_500_3x > 0){ ?> 3x a week <?php }?>
					</td>
				</tr>
			<?php }?>
			<?php if($info->shift_eprex_4000 > 0){ ?>
				<tr>
					<td class="tbl-padding">
						Shift to Eprex 4000 u SC at 
						<?php if($info->shift_eprex_4000_1x > 0){ ?> 1x a week <?php }?>
						<?php if($info->shift_eprex_4000_2x > 0){ ?> 2x a week <?php }?>
						<?php if($info->shift_eprex_4000_3x > 0){ ?> 3x a week <?php }?>
					</td>
				</tr>
			<?php }?>
			<?php if($info->shift_eposino_4000u > 0){ ?>
				<tr>
					<td class="tbl-padding">
						Shift to Eposino 4000u SC at 
						<?php if($info->shift_eposino_4000u_1x > 0){ ?> 1x a week <?php }?>
						<?php if($info->shift_eposino_4000u_2x > 0){ ?> 2x a week <?php }?>
						<?php if($info->shift_eposino_4000u_3x > 0){ ?> 3x a week <?php }?>
					</td>
				</tr>
			<?php }?>
			<?php if($info->shift_eposino_4000u > 0){ ?>
				<tr>
					<td class="tbl-padding">
						 Shift to Eposino 6000u SC at 
						 <?php if($info->shift_eposino_6000u_1x > 0){ ?> 1x a week <?php }?>
						 <?php if($info->shift_eposino_6000u_2x > 0){ ?> 2x a week <?php }?>
					</td>
				</tr>
			<?php }?>
			<?php if($info->iv_sc_1month > 0){ ?>
				<tr>
					<td class="tbl-padding">IV Iron sucrose 100 mg once a month</td>
				</tr>
			<?php }?>
			<?php if($info->iv_sc_2weeks > 0){ ?>
				<tr>
					<td class="tbl-padding">IV Iron sucrose 100 mg q 2 weeks (discontinue oral iron)</td>
				</tr>
			<?php }?>
			<?php if($info->iv_sc_10doses > 0){ ?>
				<tr>
					<td class="tbl-padding">IV Iron sucrose 100 mg q week for 10 doses then every 2 weeks (discontinue oral iron)</td>
				</tr>
			<?php }?>
			<?php if($info->upd_medication > 0){ ?>
				<tr>
					<td class="tbl-padding">update all medications as indicated in new prescription given to patient</td>
				</tr>
			<?php }?>
			<?php if($info->sen_nurse_cann_avf > 0){ ?>
				<tr>
					<td>Senior nurse to cannulate AVF at all times</td>
				</tr>
			<?php }?>
			<?php if($info->rem_int_jug_catheter > 0){ ?>
				<tr>
					<td>May remove internal jugular catheter after 4 successful 2 needle cannulation using gauge 16 AV Fistula needle</td>
				</tr>
			<?php }?>
			<?php if($info->rest_avf_2weeks > 0){ ?>
				<tr>
					<td>Rest AVF for 2 weeks before recannulation</td>
				</tr>
			<?php }?>
			<?php if($info->mod_anticoag > 0){ ?>
				<tr>
					<td>Modify anticoagulation as follows:</td>
				</tr>
			<?php }?>
			<?php if($info->no_heparin > 0){ ?>
				<tr>
					<td class="tbl-padding">
						No heparin for <?php echo $info->no_heparin_for; ?>
						weeks prior <?php echo $info->weeks_prior; ?>
					</td>
				</tr>
			<?php }?>
			<?php if($info->no_heparin2 > 0){ ?>
				<tr>
					<td class="tbl-padding">
						No heparin for <?php echo $info->no_heparin_for2; ?>
						weeks after <?php echo $info->weeks_after; ?>
					</td>
				</tr>
			<?php }?>
			<?php if($info->give_uhf > 0){ ?>
				<tr>
					<td class="tbl-padding">
						Give UHF <?php echo $info->give_uhf_units; ?>
						units bolus then <?php echo $info->give_uhf_units_bolus; ?>
					</td>
				</tr>
			<?php }?>
			<?php if($info->heparin_free_dialysis > 0){ ?>
				<tr>
					<td class="tbl-padding">Heparin Free Dialysis</td>
				</tr>
			<?php }?>
			<?php if($info->no_heparin_last_hr > 0){ ?>
				<tr>
					<td class="tbl-padding">No Heparin on last hour of dialysis</td>
				</tr>
			<?php }?>
			<?php if($info->hold_oral_anticoagulant_1wk_prior > 0){ ?>
				<tr>
					<td class="tbl-padding">Hold oral anticoagulant (aspirin, clopidogrel, warfarin, etc) 1 week prior to operation</td>
				</tr>
			<?php }?>
			<?php if($info->hold_oral_anticoagulant_1wk_post > 0){ ?>
				<tr>
					<td class="tbl-padding">Hold oral anticoagulant (aspirin, clopidogrel, warfarin, etc) 1 week post operation</td>
				</tr>
			<?php }?>
			<?php if($info->qb_post_dilution > 0){ ?>
				<tr>
					<td>QB 350-450 mL/min QD 800 mL/min post dilution HDF with 40 L Substitution Fluid</td>
				</tr>
			<?php }?>
			<?php if($info->qb_pre_dilution > 0){ ?>
				<tr>
					<td>QB 350-450 mL/min QD 800 mL/min pre dilution HDF with 40 L Substitution Fluid</td>
				</tr>
			<?php }?>
			<?php if($info->qb_low_flux_dialyzer > 0){ ?>
				<tr>
					<td>QB 350 mL/min QD 500 mL/min Low Flux Dialyzer</td>
				</tr>
			<?php }?>
			<?php if($info->qb_hi_flux_dialyzer > 0){ ?>
				<tr>
					<td>QB 350 mL/min QD 800 mL/min Hi Flux Dialyzer</td>
				</tr>
			<?php }?>
			<?php if($info->gentamycin_lock > 0){ ?>
				<tr>
					<td>Gentamycin lock 20 mg/port (antibiotic lock) after each dialysis</td>
				</tr>
			<?php }?>
			<?php if($info->ampicillin_lock > 0){ ?>
				<tr>
					<td>Ampicillin lock 250 mg/port (antibiotic lock) after each dialysis</td>
				</tr>
			<?php }?>
			<?php if($info->citrate_lock_4 > 0){ ?>
				<tr>
					<td>Citrate lock 4% as antibiotic lock</td>
				</tr>
			<?php }?>
			<?php if($info->citrate_lock_30 > 0){ ?>
				<tr>
					<td>Citrate lock 30% as antibiotic lock</td>
				</tr>
			<?php }?>
			<?php if($info->monthly_body_comp_analysis > 0){ ?>
				<tr>
					<td>Monthly in Body Composition Analysis (In Body Scan/ Maltron BIA, etc)</td>
				</tr>
			<?php }?>
			<?php if($info->please_do_monthly > 0){ ?>
				<tr>
					<td>Please do monthly labs on or before <?php echo $info->on_or_before; ?></td>
				</tr>
			<?php }?>
			<?php if($info->others_orders > 0){ ?>
				<tr>
					<td>Other orders</td>
				</tr>
				<tr>
					<td class="tbl-padding"><?php echo $info->more_details1; ?></td>
				</tr>
				<tr>
					<td class="tbl-padding"><?php echo $info->more_details2; ?></td>
				</tr>
			<?php }?>
		</table>

		<br/><br/><br/>

		<table width="100%">
			<tr>
				<td valign="top" width="40%">
					<table width="100%">
						<tr>
							<td width="30%"><strong>Noted by :</strong> </td>
							<td class="bottom"></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<?php if($stamp_data->is_show_print == 1){ ?>
								<br/>
								<div style="border: 1px solid lightgray;padding: 5px; border-radius: .5em;font-size: 8pt; line-height: 1.1;font-family: calibri;">
								    <center>
								        <span style="text-transform: uppercase;font-weight: bold;font-size: 8.5pt;"><?php echo $stamp_data->stamp_title;?></span><br>
								        <?php echo $stamp_data->stamp_info;?><br>
								        PRC Lic. # <?php echo $stamp_data->prc_lic_no; ?><br>
								        PHIC Accreditation # <?php echo $stamp_data->phic_accre_no; ?><br>
								        PTR # <?php echo $stamp_data->ptr_no; ?><br>
								        S2 # <?php echo $stamp_data->s2_no; ?><br>
								    </center>
								</div>
								<?php } ?>
							</td>
						</tr>
					</table>
				</td>
				<td valign="top" width="5%">&nbsp;</td>
				<td valign="top" width="55%">
					<?php if($info->cartoon_lungs > 0){ ?>
						<div style="border: 1px solid lightgray; padding: 5px;border-radius: .3em;">
							<table width="100%">
								<tr>
									<td width="40%">
										<center>
											<img src="<?php echo base_url('assets/img/cartoon-lungs.png'); ?>" style="width: 150px; height: 150px;">
										</center>
									</td>
									<td width="60%">
										<table width="100%">
											<?php if($info->plural_effusion_both_lungs > 0){ ?>
												<tr>
													<td>
														<i class="fa fa-check-circle"></i> Pleural Effusion both lungs
													</td>
												</tr>
											<?php } ?>
											<?php if($info->plural_effusion_left_lung > 0){ ?>
												<tr>
													<td>
														<i class="fa fa-check-circle"></i> Pleural Effusion left lung
													</td>
												</tr>
											<?php } ?>
											<?php if($info->plural_effusion_right_lung > 0){ ?>
												<tr>
													<td>
														<i class="fa fa-check-circle"></i> Pleural Effusion right lung
													</td>
												</tr>
											<?php } ?>
											<tr>
												<td>
													<br/>
													<?php echo $info->cartoon_lungs_remarks; ?>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					<?php } ?>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>