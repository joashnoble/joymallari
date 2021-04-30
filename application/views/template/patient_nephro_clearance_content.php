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
					<span class="bottom"><?php echo date('m/d/Y', strtotime($info->nephro_clearance_date)); ?></span>
				</td>
			</tr>
		</table>
		<br/>
	    <center>
	    	<h4 class="text-uppercase" style="font-family:tahoma;font-size:13pt;font-weight:bold;">
	        	Nephrology Clearance
	    	</h4>
	    </center>
		<br/>

		<table width="100%">
			<?php if($info->contemplated_surgery_renal > 0){ ?>
				<tr>
					<td>May go ahead with contemplated surgery renal wise</td>
				</tr>
			<?php }?>
			<?php if($info->no_nsaids_cox2 > 0){ ?>
				<tr>
					<td class="tbl-padding">No NSAIDs and COX 2 inhibitors as plain reliever</td>
				</tr>
			<?php }?>
			<?php if($info->avoid_fluid_overload > 0){ ?>
				<tr>
					<td class="tbl-padding">Avoid fluid overload</td>
				</tr>
			<?php }?>
			<?php if($info->no_ace_inhi_arb > 0){ ?>
				<tr>
					<td class="tbl-padding">No ACE Inhibitors or ARB as antihypertensive</td>
				</tr>
			<?php }?>
			<?php if($info->np_potassium_iv_fluid > 0){ ?>
				<tr>
					<td class="tbl-padding">No potassium containing IV fluid</td>
				</tr>
			<?php }?>
		</table>
		<br/>

		<table width="100%">
			<?php if($info->contemplates_ct_scan > 0){ ?>
				<tr>
					<td>May go ahead with contemplated CT Scan with contrast</td>
				</tr>
			<?php }?>
			<?php if($info->use_non_ionic_isoosmolar > 0){ ?>
				<tr>
					<td class="tbl-padding">Please use non ionic isoosmolar contrast (GE Visipaque) less than 100 mL</td>
				</tr>
			<?php }?>
			<?php if($info->give_n_acetylcysteine > 0){ ?>
				<tr>
					<td class="tbl-padding">Give N Acetylcysteine 600 mg 2x a day 2 days before and after CT Scan</td>
				</tr>
			<?php }?>
			<?php if($info->give_trimetazidine > 0){ ?>
				<tr>
					<td class="tbl-padding">Give Trimetazidine 35 mg 2x a day 2 days before and after CT Scan</td>
				</tr>
			<?php }?>
			<?php if($info->oral_hydration_2l_day > 0){ ?>
				<tr>
					<td class="tbl-padding">Oral hydration at least 2 liters per day</td>
				</tr>
			<?php }?>
			<?php if($info->repeate_creatinine_2d_ctscan > 0){ ?>
				<tr>
					<td class="tbl-padding">Repeat Creatinine 2 days after CT Scan</td>
				</tr>
			<?php }?>
			<?php if($info->for_cystatin_c_ctscan > 0){ ?>
				<tr>
					<td class="tbl-padding">For Cystatin C immediately after CT Scan</td>
				</tr>
			<?php }?>
			<?php if($info->urine_ngal_ctscan > 0){ ?>
				<tr>
					<td class="tbl-padding">Urine NGAL immediately after CT Scan</td>
				</tr>
			<?php }?>
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