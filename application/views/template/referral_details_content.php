<!DOCTYPE html>
<html>
<head>
	<title>Patient Referral : <?php echo $patient->fullname; ?></title>
	<style type="text/css">
		table{
			font: calibri;
		}
	</style>
</head>
<body>
	<?php if($type=='pdf'){ include 'elements/header_2.php'; ?>
	<hr style="border: 2px solid lightgray!important;">
	<?php } ?>
	<div class="row">
		<div class="col-md-12">
			<table width="100%" style="border-collapse: collapse;font-family: calibri;">
				<tr>
					<td width="70%"><b>Name</b> : <u><?php echo $patient->fullname; ?></u></td>
					<td width="30%"><b>Age/Sex</b> : <u><?php echo $patient->patient_age; ?></u>/<u><?php echo $patient->patient_sex; ?></u></td>
				</tr>
				<tr>
					<td><b>Address</b> : <u><?php echo $patient->address; ?></u></td>
					<td><b>Date</b> : <u><?php echo $info->referral_date; ?></u></td>
				</tr>				
			</table>
			<br/><br/>
			<table width="100%" style="border-collapse: collapse;font-family: calibri;">
				<tr>
					<td>
						<center>
							<h3><b>REFERRAL LETTER</b></h3>
						</center>
					</td>
				</tr>
			</table>
			<br/><br/>
			<table width="100%" style="border-collapse: collapse;font-family: calibri;">
				<tr>
					<td><b>To :</b> </td>
				</tr>
				<tr>
					<td>
						<?php echo $info->referral_doctors; ?>
						<br/><br/><br/>
					</td>
				</tr>
				<tr>
					<td>
						Respectfully referring <b style="text-transform: uppercase;"><u><?php echo $patient->fullname; ?></u></b> for evaluation and co-management.<br/>
					</td>
				</tr>
				<tr>
					<td><br/>
						<b>Diagnosis :</b>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $info->referral_diagnostics; ?>
						<br/><br/><br/>
					</td>
				</tr>

				<tr>
					<td>
						<b>Remarks :</b>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $info->remarks; ?>
						<br/><br/><br/>
					</td>
				</tr>				
			</table>
			<?php if($type=='pdf'){?>
			<br/><br/>
			<table width="100%" style="border-collapse: collapse;font-family: calibri;">
					<tr>
						<td width="35%" valign="bottom">
							<center><?php echo $info->appointment_date; ?></center>
						</td>
						<td width="30%"></td>
						<td rowspan="3" width="35%">
							<?php include 'stamp_report.php'; ?>
						</td>
					</tr>	
					<tr>
						<td valign="top" style="border-top: 1px solid lightgray;">
							<center>Your next appointment will be on</center>
						</td>
					</tr>
			</table>
			<?php }?>
		</div>
	</div>
</body>
</html>