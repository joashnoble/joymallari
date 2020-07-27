<!DOCTYPE html>
<html>
<head>
	<title>Patient Clinical Database : <?php echo $patient->fullname; ?></title>
	<style type="text/css">
		table{
			font: calibri;
		}
	</style>
</head>
<body>
	<?php if($type=='pdf'){ include 'elements/header_2.php'; ?>
	<hr style="border: 2px solid lightgray!important;">
	<div class="row">
		<table width="100%">
			<tr>
				<td>
					<center><b>Clinical Database</b></center>
				</td>
			</tr>
		</table>
	</div>
	<br>
	<?php } ?>
	<div class="row">
		<div class="col-md-12">
			<table width="100%" style="border-collapse: collapse;">
				<tr>
					<td width="60%"><b>Patient Name</b> : <?php echo $patient->fullname; ?></td>
					<td><b>Age</b> : <?php echo $patient->patient_age; ?></td>
					<td><b>Sex</b> : <?php echo $patient->patient_sex; ?></td>
				</tr>
				<tr>
					<td colspan="3"><b>Date</b> : <?php echo $info->date_created; ?></td>
				</tr>				
			</table>
			<br/>
			<table class="table table-striped table-bordered" style="border-collapse: collapse;" width="100%" cellpadding="5" cellspacing="5">
				<tr>
					<td style="border-bottom: 1px solid lightgray;"><b>Diagnostics : </b></td>
				</tr>
				<tr>
					<td>
						<?php echo $info->clinical_diagnostics; ?>
						<br/><br/><br/>
					</td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid lightgray;"><b>Treatment : </b></td>
				</tr>
				<tr>
					<td>
						<?php echo $info->clinical_treatment; ?>
						<br/><br/><br/>
					</td>
				</tr>								
				<tr>
					<td style="border-bottom: 1px solid lightgray;"><b>Medication : </b></td>
				</tr>
				<tr>
					<td>
						<?php echo $info->clinical_medication; ?>
						<br/><br/><br/>
					</td>
				</tr>					
					
				<tr>
					<td style="border-bottom: 1px solid lightgray;"><b>Remarks  : </b></td>
				</tr>
				<tr>
					<td>
						<?php echo $info->clinical_remarks; ?>
						<br/><br/><br/>
					</td>
				</tr>					
			</table>
		</div>
	</div>
</body>
</html>