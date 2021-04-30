<!DOCTYPE html>
<html>
<head>
	<title>Patient Nephro Clearance</title>
	<style type="text/css">
		.bottom{
			border-bottom: 1px solid black; 
		}
		.tbl-padding{
			padding-left: 50px;
		}
		.tbl-padding1{
			padding-left: 70px;
		}
		.tbl-padding2{
			padding-left: 30px;
		}
	</style>
</head>
<body>
	<?php include 'elements/header_2.php'; ?>
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
				<td valign="top">Address : </td>
				<td valign="top" class="bottom">
					<?php echo $info->address; ?>
				</td>
				<td valign="top" align="right">
					Date : 
					<span class="bottom"><?php echo date('m/d/Y', strtotime($info->admitting_order_date)); ?></span>
				</td>
			</tr>
		</table>
		<br/>
	    <center>
	    	<h4 class="text-uppercase" style="font-family:tahoma;font-size:13pt;font-weight:bold;">
	        	Admitting Order
	    	</h4>
	    </center>
		<br/>

		<table width="100%">
			<?php if( ($info->cb_icu + $info->cb_room) > 0 ){ ?>
			<tr>
				<td>
					> Please admit to 
					<?php if($info->cb_icu > 0){?>
						ICU
					<?php } ?>
					<?php if($info->cb_room > 0){?>
						Room of choice under my service.
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>
					Secure consent for admission &amp; management
				</td>
			</tr>
			<?php } ?>

			<?php if($info->txt_mon_vsq != null || $info->txt_mon_vsq != ""){ ?>
			<tr>
				<td>
					Monitor VS q 
					<?php echo $info->txt_mon_vsq; ?>
					hours
				</td>
			</tr>
			<?php } ?>

			<?php if($info->txt_mon_10 != null || $info->txt_mon_10 != ""){ ?>
				<tr>
					<td>
						Monitor 1 &amp; 0 q
						<?php echo $info->txt_mon_10; ?>
						hours
					</td>
				</tr>
			<?php } ?>

			<?php if( ($info->cb_low_fat_salt_diet + $info->cb_daib_renal_diet + $info->cb_renal_diet) > 0 ){ ?>

				<tr>
					<td>Diet :</td>
				</tr>
				
				<?php if($info->cb_low_fat_salt_diet > 0){?>
					<tr><td> Low salt, low fat diet </td></tr>
				<?php } ?>

				<?php if($info->cb_daib_renal_diet > 0){?>
					<tr>
						<td>Diabetic Renal Diet</td>
					</tr>
					<tr>
						<td class="tbl-padding">
							TCR : <?php echo $info->txt_drdtcr_kcal_day; ?> kcal/day divided into
						</td>
					</tr>
					<?php if($info->cb_drdtc_na_day > 0){ ?> 
						<tr>
							<td class="tbl-padding1">
								<?php echo $info->txt_drdtc_na_day; ?> Na/day
							</td>
						</tr>
					<?php } ?>
					<?php if($info->cb_drdtc_gk_day > 0){ ?> 
						<tr>
							<td class="tbl-padding1">
							<?php echo $info->txt_drdtc_gk_day; ?> g K/day
							</td>
						</tr>
					<?php } ?>

					<?php if($info->cb_drdtc_l_fluids_day > 0){ ?> 
						<tr>
							<td class="tbl-padding1">
							<?php echo $info->txt_drdtc_l_fluids_day; ?> L fluids/day
							</td>
						</tr>
					<?php } ?>

					<?php if($info->cb_drdtc_g_protein > 0){ ?> 
						<tr>
							<td class="tbl-padding1">
							<?php echo $info->txt_drdtc_g_protein; ?> g Protein/day
							</td>
						</tr>
					<?php } ?>

					<?php if($info->cb_drdtc_g_phosp_day > 0){ ?> 
						<tr>
							<td class="tbl-padding1">
							<?php echo $info->txt_drdtc_g_phosp_day; ?> g Phosphorous/day
							</td>
						</tr>
					<?php } ?>

					<?php if($info->cb_drdtc_g_fats > 0){ ?> 
						<tr>
							<td class="tbl-padding1">
							<?php echo $info->txt_drdtc_g_fats; ?> g Fats/day
							</td>
						</tr>
					<?php } ?>

					<?php if($info->cb_drdtc_g_cho > 0){ ?> 
						<tr>
							<td class="tbl-padding1">
							<?php echo $info->txt_drdtc_g_cho; ?> g Carbohydrates/day
							</td>
						</tr>
					<?php } ?>

				<?php } ?>

				<?php if($info->cb_renal_diet > 0){ ?>

					<tr><td>Renal Diet</td></tr>
					<tr>
						<td class="tbl-padding">
							TCR : 
							<?php echo $info->txt_rdtcr_kcal_day; ?>
							kcal/day divided into
						</td>
					</tr>

					<?php if($info->cb_rdtc_na_day > 0){ ?>
						<tr><td class="tbl-padding1"><?php echo $info->txt_rdtc_na_day; ?> Na/day</td></tr>
					<?php } ?>

					<?php if($info->cb_rdtc_gk_day > 0){ ?>
						<tr><td class="tbl-padding1"><?php echo $info->txt_rdtc_gk_day; ?> g K/day</td></tr>
					<?php } ?>

					<?php if($info->cb_rdtc_l_fluids_day > 0){ ?>
						<tr><td class="tbl-padding1"><?php echo $info->txt_rdtc_l_fluids_day; ?> L fluids/day</td></tr>
					<?php } ?>

					<?php if($info->cb_rdtc_g_protein > 0){ ?>
						<tr><td class="tbl-padding1"><?php echo $info->txt_rdtc_g_protein; ?> g Protein/day</td></tr>
					<?php } ?>

					<?php if($info->cb_rdtc_g_phosp_day > 0){ ?>
						<tr><td class="tbl-padding1"><?php echo $info->txt_rdtc_g_phosp_day; ?> g Phosphorous/day</td></tr>
					<?php } ?>

					<?php if($info->cb_rdtc_g_fats > 0){ ?>
						<tr><td class="tbl-padding1"><?php echo $info->txt_rdtc_g_fats; ?> g Fats/day</td></tr>
					<?php } ?>

					<?php if($info->cb_rdtc_g_cho > 0){ ?>
						<tr><td class="tbl-padding1"><?php echo $info->txt_rdtc_g_cho; ?> g Carbohydrates/day</td></tr>
					<?php } ?>

				<?php } ?>

			<?php } ?>

			<?php if( ($info->cb_chronic_kds + $info->cb_diag_others) > 0 ){ ?>

				<tr><td>Diagnosis :</td></tr>

				<?php if($info->cb_chronic_kds > 0){ ?>
					<tr>
						<td>
							Chronic Kidney Disease Stage
							<?php echo $info->txt_chronic_kds; ?>
							secondary to
							<?php if($info->cb_chronic_kds_dmn > 0){ ?> DM Nephropathy <?php } ?>
							<?php if($info->cb_chronic_kds_un > 0){ ?> Urate Nephropathy <?php } ?>
							<?php if($info->cb_chronic_kds_hn > 0){ ?> Hypertensive Nephropathy <?php } ?>
							<?php if($info->cb_chronic_kds_others > 0){ ?> 
								<?php echo $info->txt_chronic_kds_others; ?>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_diag_others > 0){ ?>
					<tr><td><?php echo $info->txt_diag_others; ?></td></tr>
				<?php } ?>

			<?php } ?>

		</table>
		<br>
		<table width="100%">
			<?php if(($info->cb_diag_hm_cbc + $info->cb_diag_hm_ph_bsmear + $info->cb_diag_chem_bun_prepost + $info->cb_diag_chem_bun + $info->cb_diag_chem_creatinine + $info->cb_diag_chem_na + $info->cb_diag_chem_k + $info->cb_diag_chem_fbs + $info->cb_diag_chem_ion_calc + $info->cb_diag_chem_phosporus + $info->cb_diag_chem_albumin + $info->cb_diag_chem_uricacid + $info->cb_diag_chem_lipidprofile + $info->cb_diag_chem_sgpt + $info->cb_diag_chem_specify + $info->cb_diag_imag_12lecg + $info->cb_diag_imag_cxrpa + $info->cb_diag_imag_kubxray + $info->cb_diag_imag_ctstronogram + $info->cb_diag_imag_kubultrasound + $info->cb_diag_imag_prosultra + $info->cb_diag_imag_abdomen + $info->cb_diag_imag_decho_plain + $info->cb_diag_imag_ct_angiography + $info->cb_diag_imag_decho_doppler + $info->cb_diag_imag_renal_duplex + $info->cb_diag_imag_others + $info->cb_diag_renal_gfr + $info->cb_diag_urine_routine_analysis + $info->cb_diag_urine_rbc_morph + $info->cb_diag_urine_random + $info->cb_diag_urine_afb + $info->cb_diag_urine_total_protein + $info->cb_diag_urine_clearance + $info->cb_diag_urine_creatinine_ratio + $info->cb_diag_urine_cytology) > 0){ ?>
				<tr>
					<td><strong>Diagnostics :</strong></td>
				</tr>
			<?php } ?>
			<?php if( ($info->cb_diag_hm_cbc + $info->cb_diag_hm_ph_bsmear) > 0){ ?>

				<tr><td class="tbl-padding2"><strong>Hematology</strong></td></tr>

				<?php if($info->cb_diag_hm_cbc > 0){ ?>
					<tr><td class="tbl-padding">CBC with PC</td></tr>
				<?php }?>

				<?php if($info->cb_diag_hm_ph_bsmear > 0){ ?>
					<tr><td class="tbl-padding">Peripheral Blood Smear</td></tr>
				<?php }?>

			<?php } ?>

			<?php if(($info->cb_diag_chem_bun_prepost + $info->cb_diag_chem_bun + $info->cb_diag_chem_creatinine + $info->cb_diag_chem_na + $info->cb_diag_chem_k + $info->cb_diag_chem_fbs + $info->cb_diag_chem_ion_calc + $info->cb_diag_chem_phosporus + $info->cb_diag_chem_albumin + $info->cb_diag_chem_uricacid + $info->cb_diag_chem_lipidprofile + $info->cb_diag_chem_sgpt + $info->cb_diag_chem_specify) > 0){ ?>

				<tr><td class="tbl-padding2"><strong>CHEMISTRY</strong></td></tr>

				<?php if($info->cb_diag_chem_bun_prepost > 0){ ?>
					<tr><td class="tbl-padding">BUN (Pre and Post HD)</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_chem_bun > 0){ ?>
					<tr><td class="tbl-padding">BUN</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_chem_creatinine > 0){ ?>
					<tr><td class="tbl-padding">Creatinine</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_chem_na > 0){ ?>
					<tr><td class="tbl-padding">Na</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_chem_k > 0){ ?>
					<tr><td class="tbl-padding">K</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_chem_fbs > 0){ ?>
					<tr><td class="tbl-padding">FBS</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_chem_ion_calc > 0){ ?>
					<tr><td class="tbl-padding">Ionized Calcium</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_chem_phosporus > 0){ ?>
					<tr><td class="tbl-padding">Phosphorus</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_chem_albumin > 0){ ?>
					<tr><td class="tbl-padding">Albumin</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_chem_uricacid > 0){ ?>
					<tr><td class="tbl-padding">Uric Acid</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_chem_lipidprofile > 0){ ?>
					<tr><td class="tbl-padding">Lipid Profile</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_chem_sgpt > 0){ ?>
					<tr><td class="tbl-padding">SGPT</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_chem_specify > 0){ ?>
					<tr><td class="tbl-padding"><?php echo $info->txt_diag_chem_specify; ?></td></tr>
				<?php } ?>

			<?php } ?>

			<?php if( ($info->cb_diag_imag_12lecg + $info->cb_diag_imag_cxrpa + $info->cb_diag_imag_kubxray + $info->cb_diag_imag_ctstronogram + $info->cb_diag_imag_kubultrasound + $info->cb_diag_imag_prosultra + $info->cb_diag_imag_abdomen + $info->cb_diag_imag_decho_plain + $info->cb_diag_imag_ct_angiography + $info->cb_diag_imag_decho_doppler + $info->cb_diag_imag_renal_duplex + $info->cb_diag_imag_others) > 0){ ?>

				<tr><td class="tbl-padding2"><strong>IMAGING STUDIES</strong></td></tr>

				<?php if($info->cb_diag_imag_12lecg > 0){ ?>
					<tr><td class="tbl-padding">12 L ECG</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_imag_kubxray > 0){ ?>
					<tr><td class="tbl-padding">KUB XRAY</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_imag_kubultrasound > 0){ ?>
					<tr><td class="tbl-padding">KUB Ultrasound</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_imag_abdomen > 0){ ?>
					<tr><td class="tbl-padding">Ultrasound of WAB</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_imag_ct_angiography > 0){ ?>
					<tr><td class="tbl-padding">CT angiography</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_imag_renal_duplex > 0){ ?>
					<tr><td class="tbl-padding">Renal Duplex Scan</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_imag_cxrpa > 0){ ?>
					<tr><td class="tbl-padding">CXR PA</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_imag_ctstronogram > 0){ ?>
					<tr><td class="tbl-padding">CT STONOGRAM</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_imag_prosultra > 0){ ?>
					<tr><td class="tbl-padding">Prostate Ultrasound</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_imag_decho_plain > 0){ ?>
					<tr><td class="tbl-padding">2 Dechocardiography (Plain)</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_imag_decho_doppler > 0){ ?>
					<tr><td class="tbl-padding">2 Dechocardiography (with doppler)</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_imag_others > 0){ ?>
					<tr><td class="tbl-padding"><?php echo $info->txt_diag_imag_others; ?></td></tr>
				<?php } ?>

			<?php } ?>

			<?php if($info->cb_diag_renal_gfr > 0){ ?>
				<tr><td class="tbl-padding2"><strong>RENAL FUNCTION TEST</strong></td></tr>
				<tr><td class="tbl-padding">Nuclear GFR Scan</td></tr>
			<?php } ?>

			<?php if($info->cb_diag_urine_routine_analysis + $info->cb_diag_urine_rbc_morph + $info->cb_diag_urine_random + $info->cb_diag_urine_afb + $info->cb_diag_urine_total_protein + $info->cb_diag_urine_clearance + $info->cb_diag_urine_creatinine_ratio + $info->cb_diag_urine_cytology){ ?>

				<tr><td class="tbl-padding2"><strong>URINE EXAMS</strong></td></tr>

				<?php if($info->cb_diag_urine_routine_analysis > 0){?>
					<tr><td class="tbl-padding">Routine Urinalysis</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_urine_rbc_morph > 0){?>
					<tr><td class="tbl-padding">Urine RBC morphology</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_urine_random > 0){?>
					<tr><td class="tbl-padding">Random Urine Protein</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_urine_afb > 0){?>
					<tr><td class="tbl-padding">Urine AFB</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_urine_total_protein > 0){?>
					<tr><td class="tbl-padding">24 hour urine total protein</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_urine_clearance > 0){?>
					<tr><td class="tbl-padding">24 hour creatinine clearance</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_urine_creatinine_ratio > 0){?>
					<tr><td class="tbl-padding">Urine Albumin Creatinine Ratio</td></tr>
				<?php } ?>

				<?php if($info->cb_diag_urine_cytology > 0){?>
					<tr><td class="tbl-padding">Urine Cytology</td></tr>
				<?php } ?>

			<?php } ?>
		</table>
		<br/>
		<table width="100%">
			<?php if($info->cb_thera_oxy_inha > 0){ ?>
				<tr>
					<td>
						<strong>Therapeutics :</strong>

						Oxygen Inhalation via 
						<?php echo $info->txt_thera_oxy_inha; ?>
						<?php if($info->cb_thera_nasal_cannula > 0){ ?>
							Nasal Cannula 
							<?php if($info->cb_thera_lpm > 0){ ?> 
								<?php echo $info->txt_thera_lpm; ?>
								Lpm 
							<?php } ?>
							<?php if($info->cb_thera_perc_fi02 > 0){ ?> 
								%FiO2
							<?php } ?>
						<?php } ?>
						<?php if($info->cb_thera_venturi_mask){ ?> Venturi Mask <?php } ?>
						<?php if($info->cb_thera_others){ echo $info->txt_thera_others; } ?>
					</td>
				</tr>
			<?php } ?>
		</table>
		<table width="100%">
			<?php if($info->cb_ivfluid > 0){ ?>
				<tr>
					<td>
						<strong>IV Fluid :</strong>

						<?php if($info->cb_ivfluid_nss_1l > 0){ ?> 
							PNSS 1L x 
							<?php echo $info->txt_ivfluid_nss_1l_rate; ?>
						<?php } ?>

						<?php if($info->cb_ivfluid_ds_0_3_nacl > 0){ ?> 
							D5 0.3 NaCl x
							<?php echo $info->txt_ivfluid_ds_0_3_nacl_rate; ?>
						<?php } ?>

						<?php if($info->cb_ivfluid_ds_0_9_nacl > 0){ ?> 
							D5 0.9 NaCl x
							<?php echo $info->txt_ivfluid_ds_0_9_nacl_rate; ?>
						<?php } ?>

						<?php if($info->cb_ivfluid_ds_water_500ml > 0){ ?> 
							D5 Water 50ml x
							<?php echo $info->txt_ivfluid_ds_water_500ml_rate; ?>
						<?php } ?>

						<?php if($info->cb_ivfluid_ds_water_1L > 0){ ?> 
							D5 Water 1L x
							<?php echo $info->txt_ivfluid_ds_water_1L_rate; ?>
						<?php } ?>

						<?php if($info->cb_ivfluid_ds_nm_1l > 0){ ?> 
							D5 NM 1L x
							<?php echo $info->txt_ivfluid_ds_nm_1l_rate; ?>
						<?php } ?>

						<?php if($info->cb_ivfluid_10_cc_hr){ ?> 10 cc/hr <?php } ?>
						<?php if($info->cb_ivfluid_20_cc_hr){ ?> 20 cc/hr <?php } ?>
						<?php if($info->cb_ivfluid_40_cc_hr){ ?> 40 cc/hr <?php } ?>
						<?php if($info->cb_ivfluid_60_cc_hr){ ?> 60 cc/hr <?php } ?>
						<?php if($info->cb_ivfluid_80_cc_hr){ ?> 80 cc/hr <?php } ?>
						<?php if($info->cb_ivfluid_100_cc_hr){ ?> 100 cc/hr <?php } ?>
						<?php if($info->cb_ivfluid_120_cc_hr){ ?> 120 cc/hr <?php } ?>
						<?php if($info->cb_ivfluid_150_cc_hr){ ?> 150 cc/hr <?php } ?>

					</td>
				</tr>
			<?php } ?>
		</table>
		<table width="100%">
			<?php if($info->cb_ivfluid_insert_helplock > 0){ ?>
				<tr><td>Insert heplock</td></tr>
			<?php } ?>
		</table>

		<?php if( ($info->cb_med_cal_carbo + $info->cb_med_sevelamer + $info->cb_med_calcitriol + $info->cb_med_clopidogrel + $info->cb_med_ferrous + $info->cb_med_folic_acid + $info->cb_med_vitamin_c + $info->cb_med_vitamin_b_complex + $info->cb_med_amlodipine + $info->cb_med_felodipine + $info->cb_med_nifedipine + $info->cb_med_diltiazcm + $info->cb_med_irbesartan + $info->cb_med_losartan + $info->cb_med_telmisartan + $info->cb_med_valsartan + $info->cb_med_ketosteril + $info->cb_med_kremezin + $info->cb_med_atenolol + $info->cb_med_carvedilol + $info->cb_med_metoprolol + $info->cb_med_clonidine + $info->cb_med_atorvastatin + $info->cb_med_fluvastatin + $info->cb_med_simvastatin + $info->cb_med_lanoxin + $info->cb_med_allopurinol + $info->cb_med_gliclazide + $info->cb_med_metformin + $info->cb_med_renvela + $info->cb_med_exforge + $info->cb_med_twynsta + $info->cb_med_lacipil + $info->cb_med_insulin_glargine + $info->cb_med_linagliptin + $info->cb_med_vildaglitpin + $info->cb_med_glipizide) > 0 ){ ?>

			<table width="100%">
				<tr>
					<td><strong>Oral Medications :</strong></td>
				</tr>
			</table>

			<table width="100%">
				<?php if($info->cb_med_cal_carbo > 0){ ?>
				<tr>
					<td>
						Calcium carbonate 500mg 
						<?php if($info->cb_med_cal_carbo_od > 0){ ?> OD <?php } ?> 
						<?php if($info->cb_med_cal_carbo_bid > 0){ ?> BID <?php } ?> 
						<?php if($info->cb_med_cal_carbo_tid > 0){ ?> TID <?php } ?> 
					</td>
				</tr>
				<?php } ?>

				<?php if($info->cb_med_sevelamer > 0){ ?>
					<tr>
						<td>
							Sevelamer carbonate 600mg 
							<?php if($info->cb_med_sevelamer_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_sevelamer_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_sevelamer_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_calcitriol > 0){ ?>
					<tr>
						<td>
							Calcitriol 
							<?php echo $info->txt_med_calcitriol_mg; ?> 
							<?php if($info->cb_med_calcitriol_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_calcitriol_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_calcitriol_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_clopidogrel > 0){ ?>
					<tr>
						<td>
							Clopidogrel 75mg 
							<?php if($info->cb_med_clopidogrel_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_clopidogrel_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_clopidogrel_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_ferrous > 0){ ?>
					<tr>
						<td>
							Ferrous sulfate 75mg 
							<?php echo $info->txt_med_ferrous_mg; ?> 
							<?php if($info->cb_med_ferrous_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_ferrous_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_ferrous_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_folic_acid > 0){ ?>
					<tr>
						<td>
							Folic Acid 5mg 
							<?php if($info->cb_med_folic_acid_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_folic_acid_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_folic_acid_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>
				
				<?php if($info->cb_med_vitamin_c > 0){ ?>
					<tr>
						<td>
							Vitamin C 500mg 
							<?php if($info->cb_med_vitamin_c_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_vitamin_c_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_vitamin_c_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>
				
				<?php if($info->cb_med_vitamin_b_complex > 0){ ?>
					<tr>
						<td>
							Vitamin b complex 1 tablet 
							<?php if($info->cb_med_vitamin_b_complex_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_vitamin_b_complex_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_vitamin_b_complex_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>
				
				<?php if($info->cb_med_amlodipine > 0){ ?>
					<tr>
						<td>
							Amlodipine 
							<?php echo $info->txt_med_amlodipine_mg; ?> mg 
							<?php if($info->cb_med_amlodipine_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_amlodipine_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_amlodipine_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>
				
				<?php if($info->cb_med_felodipine > 0){ ?>
					<tr>
						<td>
							Felodipine 
							<?php echo $info->txt_med_felodipine_mg; ?> mg 
							<?php if($info->cb_med_felodipine_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_amlodipine_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_amlodipine_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_nifedipine > 0){ ?>
					<tr>
						<td>
							Nitedipine 
							<?php echo $info->txt_med_nifedipine_mg; ?> mg 
							<?php if($info->cb_med_nifedipine_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_nifedipine_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_nifedipine_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_diltiazcm > 0){ ?>
					<tr>
						<td>
							Diltiazem 
							<?php echo $info->txt_med_diltiazcm_mg; ?> mg 
							<?php if($info->cb_med_diltiazcm_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_diltiazcm_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_diltiazcm_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_irbesartan > 0){ ?>
					<tr>
						<td>
							Irbesartan 
							<?php echo $info->txt_med_irbesartan_mg; ?> mg 
							<?php if($info->cb_med_irbesartan_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_irbesartan_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_irbesartan_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_losartan > 0){ ?>
					<tr>
						<td>
							Losartan 
							<?php echo $info->txt_med_losartan_mg; ?> mg 
							<?php if($info->cb_med_losartan_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_losartan_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_losartan_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_telmisartan > 0){ ?>
					<tr>
						<td>
							Telmisartan 
							<?php echo $info->txt_med_telmisartan_mg; ?> mg 
							<?php if($info->cb_med_telmisartan_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_telmisartan_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_telmisartan_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_valsartan > 0){ ?>
					<tr>
						<td>
							Valsartan 
							<?php echo $info->txt_med_valsartan_mg; ?> mg 
							<?php if($info->cb_med_valsartan_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_valsartan_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_valsartan_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_ketosteril > 0){ ?>
					<tr>
						<td>
							Ketosteril 600mg 
							<?php echo $info->txt_med_ketosteril_tab; ?> tab
							<?php if($info->cb_med_ketosteril_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_ketosteril_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_ketosteril_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_kremezin > 0){ ?>
					<tr>
						<td>
							Kremezin 2g sachet 
							<?php echo $info->txt_med_kremezin_sachet; ?> 
							<?php if($info->cb_med_kremezin_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_kremezin_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_kremezin_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_perindopril > 0){ ?>
					<tr>
						<td>
							Perindopril 
							<?php echo $info->txt_med_perindopril_mg; ?> mg 
							<?php if($info->cb_med_perindopril_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_perindopril_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_perindopril_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_atenolol > 0){ ?>
					<tr>
						<td>
							Atenolol 
							<?php echo $info->txt_med_atenolol_mg; ?> mg 
							<?php if($info->cb_med_atenolol_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_atenolol_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_atenolol_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_carvedilol > 0){ ?>
					<tr>
						<td>
							Carvedilol  
							<?php echo $info->txt_med_carvedilol_mg; ?> mg 
							<?php if($info->cb_med_carvedilol_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_carvedilol_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_carvedilol_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->txt_med_metoprolol_mg > 0){ ?>
					<tr>
						<td>
							Metoprolol   
							<?php echo $info->txt_med_metoprolol_mg; ?> mg 
							<?php if($info->cb_med_metoprolol_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_metoprolol_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_metoprolol_tid > 0){ ?> TID <?php } ?> 
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_clonidine > 0){ ?>
					<tr>
						<td>
							Clonidine    
							<?php echo $info->txt_med_clonidine_mg; ?> mg 
							<?php if($info->cb_med_clonidine_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_clonidine_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_clonidine_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_atorvastatin > 0){ ?>
					<tr>
						<td>
							Atorvastatin     
							<?php echo $info->txt_med_atorvastatin_mg; ?> mg 
							<?php if($info->cb_med_atorvastatin_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_atorvastatin_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_atorvastatin_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_fluvastatin > 0){ ?>
					<tr>
						<td>
							Fluvastatin    
							<?php echo $info->txt_med_fluvastatin_mg; ?> mg 
							<?php if($info->cb_med_fluvastatin_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_fluvastatin_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_fluvastatin_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_simvastatin > 0){ ?>
					<tr>
						<td>
							Simvastatin      
							<?php echo $info->txt_med_simvastatin_mg; ?> mg 
							<?php if($info->cb_med_simvastatin_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_simvastatin_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_simvastatin_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_lanoxin > 0){ ?>
					<tr>
						<td>
							Lanoxin     
							<?php echo $info->txt_med_lanoxin_mg; ?> mg 
							<?php if($info->cb_med_lanoxin_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_lanoxin_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_lanoxin_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_allopurinol > 0){ ?>
					<tr>
						<td>
							Allopurinol       
							<?php echo $info->txt_med_allopurinol_mg; ?> mg 
							<?php if($info->cb_med_allopurinol_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_allopurinol_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_allopurinol_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_gliclazide > 0){ ?>
					<tr>
						<td>
							Gliclazide       
							<?php echo $info->txt_med_gliclazide_mg; ?> mg 
							<?php if($info->cb_med_gliclazide_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_gliclazide_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_gliclazide_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_metformin > 0){ ?>
					<tr>
						<td>
							Metformin      
							<?php echo $info->txt_med_metformin_mg; ?> mg 
							<?php if($info->cb_med_metformin_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_metformin_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_metformin_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_renvela > 0){ ?>
					<tr>
						<td>
							Renvela     
							<?php echo $info->txt_med_renvela_mg; ?> mg 
							<?php if($info->cb_med_renvela_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_renvela_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_renvela_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_exforge > 0){ ?>
					<tr>
						<td>
							Exforge         
							<?php echo $info->txt_med_exforge_mg; ?> mg 
							<?php if($info->cb_med_exforge_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_exforge_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_exforge_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_twynsta > 0){ ?>
					<tr>
						<td>
							Twynsta          
							<?php echo $info->txt_med_twynsta_mg; ?> mg 
							<?php if($info->cb_med_twynsta_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_twynsta_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_twynsta_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_lacipil > 0){ ?>
					<tr>
						<td>
							Lacipil           
							<?php echo $info->txt_med_lacipil_mg; ?> mg 
							<?php if($info->cb_med_lacipil_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_lacipil_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_lacipil_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_insulin_glargine > 0){ ?>
					<tr>
						<td>
							Insulin glargine            
							<?php echo $info->txt_med_insulin_glargine_units; ?> units 
							<?php if($info->cb_med_insulin_glargine_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_insulin_glargine_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_insulin_glargine_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_linagliptin > 0){ ?>
					<tr>
						<td>
							Linagliptin 5mg      
							<?php if($info->cb_med_linagliptin_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_linagliptin_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_linagliptin_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_vildaglitpin > 0){ ?>
					<tr>
						<td>
							Vildagliptin 50mg      
							<?php if($info->cb_med_vildaglitpin_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_vildaglitpin_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_vildaglitpin_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if($info->cb_med_glipizide > 0){ ?>
					<tr>
						<td>
							Glipizide 50mg 
							<?php if($info->cb_med_glipizide_od > 0){ ?> OD <?php } ?> 
							<?php if($info->cb_med_glipizide_bid > 0){ ?> BID <?php } ?> 
							<?php if($info->cb_med_glipizide_tid > 0){ ?> TID <?php } ?>
						</td>
					</tr>
				<?php } ?>
			</table>

		<?php } ?>

		<table width="100%">
			
			<?php if($info->cb_emer_hemo > 0){ ?>
				<tr><td>For Emergency Hemodialysis once with consent</td></tr>
			<?php } ?>

			<?php if($info->cb_emer_refer_to > 0 ){ ?>
				<tr>
					<td>
						Refer to
						<?php if($info->cb_emer_dr_1 > 0 ){ ?> Dr. Steven Charo <?php } ?>
						<?php if($info->cb_emer_dr_2 > 0 ){ ?> Dr. Arnel Ayro <?php } ?>
						<?php if($info->cb_emer_dr_3 > 0 ){ ?> Dr. Patrick Maglaya <?php } ?>
					</td>
				</tr>
			<?php } ?>

			<?php if($info->cb_emer_dialysis > 0){ ?>
				<tr>
					<td>
						Emergency Dialysis Prescription <br/>
						Bicarbonate Bath <br/>
						Duration : <?php echo $info->txt_emer_dialysis_hrs; ?>
					</td>
				</tr>
			<?php } ?>

			<?php if( ($info->cb_no_heparin + $info->cb_lmwh + $info->cb_unfractionated + $info->cb_standard_u_hr + $info->cb_hepa_u_hr) > 0 ){ ?>
				<tr>
					<td><strong>Anticoagulant : </strong></td>
				</tr>
				<tr>
					<td class="tbl-padding">
						<?php if($info->cb_no_heparin > 0){ ?> No Heparin <br/> <?php } ?>
						<?php if($info->cb_lmwh > 0){ ?> LMWH <?php echo $info->txt_lmwh_cc; ?> cc <br/> <?php } ?>
						<?php if($info->cb_unfractionated > 0){ ?> Unfractionated Heparin Dose <br/> <?php } ?>
						<?php if($info->cb_standard_u_hr > 0){ ?> Standard Dose : 2000 'U' then <?php echo $info->txt_standard_u_hr; ?> 'U'/hr <br/> <?php } ?>
						<?php if($info->cb_hepa_u_hr > 0){ ?> Tight Heparization : 1000 'U' then <?php echo $info->txt_hepa_u_hr; ?> 'U'/hr <br/> <?php } ?>
					</td>
				</tr>
			<?php } ?>

			<?php if( ($info->cb_f6_dialyzer + $info->cb_f7_dialyzer + $info->cb_f8_dialyzer + $info->cb_lops_15 + $info->cb_lops_18 + $info->cb_lops_20 + $info->cb_others_dialyzer) > 0 ){ ?>

				<tr>
					<td><strong>Dialyzer : </strong></td>
				</tr>

				<?php if( ($info->cb_f6_dialyzer + $info->cb_f7_dialyzer + $info->cb_f8_dialyzer + $info->cb_lops_15 + $info->cb_lops_18 + $info->cb_lops_20 + $info->cb_others_dialyzer) > 0 ){ ?>
					<tr>
						<td class="tbl-padding">
							Low Flux Dialyzer
						</td>
					</tr>
					<tr>
						<td class="tbl-padding1">
							<?php if($info->cb_f6_dialyzer > 0){ ?> F6 dialyzer <br/> <?php } ?>
							<?php if($info->cb_f7_dialyzer > 0){ ?>F7 dialyzer <br/> <?php } ?>
							<?php if($info->cb_f8_dialyzer > 0){ ?>F8 dialyzer <br/> <?php } ?>
							<?php if($info->cb_lops_15 > 0){ ?>LOPS 15 <br/> <?php } ?>
							<?php if($info->cb_lops_18 > 0){ ?>LOPS 18 <br/> <?php } ?>
							<?php if($info->cb_lops_20 > 0){ ?>LOPS 20 <br/> <?php } ?>
							<?php if($info->cb_others_dialyzer > 0){ ?>
								<?php echo $info->txt_others_dialyzer; ?>
								<br/> 
							<?php } ?>
						</td>
					</tr>
				<?php } ?>

				<?php if( ($info->cb_h480s + $info->cb_hf120s + $info->cb_h1ps18 + $info->cb_h1ps20) > 0){ ?>

					<tr>
						<td class="tbl-padding">
							Hiflux Dialyzer
						</td>
					</tr>
					<tr>
						<td class="tbl-padding1">
							<?php if($info->cb_h480s > 0){ ?> HF80s <br/> <?php } ?>
							<?php if($info->cb_hf120s > 0){ ?> HF120s <br/> <?php } ?>
							<?php if($info->cb_h1ps18 > 0){ ?> HIPS 18 <br/> <?php } ?>
							<?php if($info->cb_h1ps20 > 0){ ?> HIPS 20 <br/> <?php } ?>
						</td>
					</tr>

				<?php } ?>

			<?php } ?>

			<?php if($info->cb_refer_to_dr > 0){ ?>
			<tr>
				<td>
					Refer to
					<?php echo $info->txt_refer_to_dr; ?>
					for evaluation & comanagement
				</td>
			</tr>
			<?php } ?>

			<?php if($info->cb_others > 0){ ?>
				<tr><td><?php echo $info->txt_others; ?></td></tr>
			<?php } ?>

			<?php if($info->cb_inform_admitted > 0){ ?>
				<tr><td>Inform me once admitted</td></tr>
			<?php } ?>

			<?php if($info->cb_mrod_db > 0){ ?>
				<tr><td>MROD to do database</td></tr>
			<?php } ?>
		</table>

		<br/>
		<table width="100%">
			<tr>
				<td width="65%"></td>
				<td valign="top" align="right" width="35%">
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
	</div>
</body>
</html>