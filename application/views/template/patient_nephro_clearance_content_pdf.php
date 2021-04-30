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
		table{
			font-family: calibri;
		}
	</style>
</head>
<body>
	<?php include 'elements/header_2.php'; ?>
	<br/>
	<div class="padding">
		<table width="100%" style="font-size: 10pt;">
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

	    <table width="100%">
	    	<tr>
	    		<td align="center" style="font-family:tahoma;font-size:13pt;font-weight:bold;">
			        	NEPHROLOGY CLEARANCE
	    		</td>
	    	</tr>
	    </table>

		<br/>

		<table width="100%" style="font-size: 10pt;">
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
		
		<table width="100%" style="font-size: 10pt;">
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
		<table width="100%" style="border-collapse: collapse;font-family: calibri;">	
				<tr>
					<td valign="top" width="65%">
					</td>
					<td rowspan="2" width="35%">
						<?php include 'stamp_report.php'; ?>
					</td>
				</tr>
		</table>
	</div>
</body>
</html>