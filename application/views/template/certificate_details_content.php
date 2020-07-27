<!DOCTYPE html>
<html>
<head>
	<title>Patient Medical Certificate : <?php echo $patient->fullname; ?></title>
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
					<td><b>Date</b> : <u><?php echo $info->medical_date; ?></u></td>
				</tr>				
			</table>
			<br/><br/>
			<table width="100%" style="border-collapse: collapse;font-family: calibri;">
				<tr>
					<td>
						<center>
							<h3><b>MEDICAL CERTIFICATE</b></h3>
						</center>
					</td>
				</tr>
			</table>
			<br/><br/>
			<table width="100%" style="border-collapse: collapse;font-family: calibri;">
				<tr>
					<td>
						This is to certify that i have seen and examined <b style="text-transform: uppercase;"><u><?php echo $patient->fullname; ?></u></b>, <?php echo $patient->patient_age; ?> years old, residing at <u><?php echo $patient->address; ?></u>. Patient is diagnosed with:
						<br/><br/>
						<?php echo $info->medical_diagnostics; ?>
						<br/><br/><br/><br/><br/>
					</td>
				</tr>
				<tr>
					<td>
						This certification is issued upon the request of <b style="text-transform: uppercase;"><u><?php echo $patient->fullname; ?></u></b> for whatever purpose it may serve.
					</td>
				</tr>
			</table>
			<?php if($type=='pdf'){?>
			<br/><br/>
			<table width="100%" style="border-collapse: collapse;font-family: calibri;">	
					<tr>
						<td valign="top" width="65%">
						</td>
						<td rowspan="2" width="35%">
							<?php include 'stamp_report.php'; ?>
						</td>
					</tr>
			</table>
			<?php }?>
		</div>
	</div>
</body>
</html>