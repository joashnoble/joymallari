<!DOCTYPE html>
<html>
<head>
	<title>Patient Laboratory Request</title>
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
	<?php include 'elements/header_1.php'; ?>
	<br/>
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
				<span class="bottom"><?php echo date('m/d/Y', strtotime($info->lab_report_date)); ?></span>
			</td>
		</tr>
	</table>
	<br/>
    <center>
    	<h4 class="text-uppercase" style="font-family:tahoma;font-size:13pt;font-weight:bold;">
        	Diagnostic Tests
    	</h4>
    </center>
	<br/>

	<table width="100%">


		<?php if($info->hm_cbc > 0 ){ ?>
			<tr><td>CBC with PC</td></tr>
		<?php } ?>

		<?php if($info->hm_ph_bsmear > 0){ ?>
			<tr><td>Peripheral Blood Smear</td></tr>
		<?php } ?>

		<?php if($info->chem_bun_prepost > 0){ ?>
			<tr><td>BUN (Pre and Post HD)</td></tr>
		<?php } ?>

		<?php if($info->chem_bun > 0){ ?>
			<tr><td>BUN</td></tr>
		<?php } ?>

		<?php if($info->chem_creatinine > 0){ ?>
			Creatinine
		<?php } ?>

		<?php if($info->chem_na > 0){ ?>
			<tr><td>Na</td></tr>
		<?php } ?>

		<?php if($info->chem_k > 0){ ?>
			<tr><td>K</td></tr>
		<?php } ?>

		<?php if($info->chem_fbs > 0){ ?>
			<tr><td>FBS</td></tr>
		<?php } ?>

		<?php if($info->chem_ion_calc > 0){ ?>
			<tr><td>Ionized Calcium</td></tr>
		<?php } ?>

		<?php if($info->chem_phosporus > 0){ ?>
			<tr><td>Phosphorus</td></tr>
		<?php } ?>

		<?php if($info->chem_albumin > 0){ ?>
			<tr><td>Albumin</td></tr>
		<?php } ?>

		<?php if($info->chem_uricacid > 0){ ?>
			<tr><td>Uric Acid</td></tr>
		<?php } ?>

		<?php if($info->chem_lipidprofile > 0){ ?>
			<tr><td>Lipid Profile</td></tr>
		<?php } ?>

		<?php if($info->chem_sgpt > 0){ ?>
			<tr><td>SGPT</td></tr>
		<?php } ?>

		<?php if($info->chem_specify > 0){ ?>
			<tr><td><?php echo $info->chem_specify_txt; ?></td></tr>
		<?php } ?>

		<?php if($info->imag_12lecg > 0){ ?>
			<tr><td>12 L ECG</td></tr>
		<?php } ?>

		<?php if($info->imag_kubxray > 0){ ?>
			<tr><td>KUB XRAY</td></tr>
		<?php } ?>

		<?php if($info->imag_kubultrasound > 0){ ?>
			<tr><td>KUB Ultrasound</td></tr>
		<?php } ?>

		<?php if($info->imag_abdomen > 0){ ?>
			<tr><td>Ultrasound of WAB</td></tr>
		<?php } ?>

		<?php if($info->imag_ct_angiography > 0){ ?>
			<tr><td>CT angiography</td></tr>
		<?php } ?>

		<?php if($info->imag_renal_duplex > 0){ ?>
			<tr><td>Renal Duplex Scan</td></tr>
		<?php } ?>

		<?php if($info->imag_cxrpa > 0){ ?>
			<tr><td>CXR PA</td></tr>
		<?php } ?>

		<?php if($info->imag_ctstronogram > 0){ ?>
			<tr><td>CT STONOGRAM</td></tr>
		<?php } ?>

		<?php if($info->imag_prosultra > 0){ ?>
			<tr><td>Prostate Ultrasound</td></tr>
		<?php } ?>

		<?php if($info->imag_decho_plain > 0){ ?>
			<tr><td>2 Dechocardiography (Plain)</td></tr>
		<?php } ?>

		<?php if($info->imag_decho_doppler > 0){ ?>
			<tr><td>2 Dechocardiography (with doppler)</td></tr>
		<?php } ?>

		<?php if($info->imag_others > 0){ ?>
			<tr><td><?php echo $info->imag_others_txt; ?></td></tr>
		<?php } ?>

		<?php if($info->renal_gfr > 0){ ?>
			<tr><td>Nuclear GFR Scan</td></tr>
		<?php } ?>

		<?php if($info->urine_routine_analysis > 0){ ?>
			<tr><td>Routine Urinalysis</td></tr>
		<?php } ?>

		<?php if($info->urine_random > 0){ ?>
			<tr><td>Urine RBC morphology</td></tr>
		<?php } ?>

		<?php if($info->urine_calcium > 0){ ?>
			<tr><td>Random Urine Protein</td></tr>
		<?php } ?>

		<?php if($info->urine_afb > 0){ ?>
			<tr><td>Urine AFB</td></tr>
		<?php } ?>

		<?php if($info->urine_rbc_morph > 0){ ?>
			<tr><td>24 hour urine total protein</td></tr>
		<?php } ?>

		<?php if($info->urine_sodium > 0){ ?>
			<tr><td>24 hour creatinine clearance</td></tr>
		<?php } ?>

		<?php if($info->urine_creatinine_ratio > 0){ ?>
			<tr><td>Urine Albumin Creatinine Ratio</td></tr>
		<?php } ?>

		<?php if($info->urine_cytology > 0){ ?>
			<tr><td>Urine Cytology</td></tr>
		<?php } ?>

	</table>
	<br/>
	<table width="100%">
		<tr>
			<td>
				Please have this test done on/or before
				<?php echo $info->sentence1; ?>
				<?php if($info->sentence2 != null || $info->sentence2 != ""){ ?>
					at <?php echo $info->sentence2; ?>
				<?php } ?>
			</td>
		</tr>
	</table>

	<?php if( ($info->non_fasting + $info->fasting + $info->instruct_others) > 0 ){ ?>
		<table width="100%">
			<tr><td>Instructions:</td></tr>
			<?php if($info->non_fasting > 0){ ?><tr><td>Nonfasting</td></tr><?php } ?>
			<?php if($info->fasting > 0){ ?>
				<tr>
					<td>
						Fasting
						<?php if($info->fasting_6hrs > 0){ ?> 6 Hours <?php } ?>
						<?php if($info->fasting_8hrs > 0){ ?> 8 Hours <?php } ?> 
						<?php if($info->fasting_10hrs > 0){ ?> 10 Hours <?php } ?>
					</td>
				</tr>
			<?php } ?>
			<?php if($info->instruct_others > 0){ ?>
				<tr>
					<td><?php echo $info->instruct_others_txt; ?></td>
				</tr>
			<?php } ?>
		</table>
	<?php } ?>
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
</body>
</html>