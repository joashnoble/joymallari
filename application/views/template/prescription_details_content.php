<!DOCTYPE html>
<html>
<head>
	<title>Patient Prescription : <?php echo $patient->fullname; ?></title>
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
					<center><b>PRESCRIPTION</b></center>
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
					<td colspan="2"><b>Prescription No #</b> : <?php echo $info->prescription_code; ?></td>
					<td><b>Date</b> : <?php echo $info->date_prescribed; ?></td>
				</tr>
				<tr>
					<td width="60%"><b>Patient Name</b> : <?php echo $patient->fullname; ?></td>
					<td><b>Age</b> : <?php echo $patient->patient_age; ?></td>
					<td><b>Sex</b> : <?php echo $patient->patient_sex; ?></td>
				</tr>
			</table>
			<br/>
			<table class="table table-striped table-bordered" style="border-collapse: collapse;border: 1px solid lightgray;font-size: 10pt;" width="100%" cellpadding="5" cellspacing="5">
				<tr>
					<td style="border: 1px solid lightgray;"><b>Medication</b></td>
					<td style="border: 1px solid lightgray;"><b>QTY</b></td>
					<td style="border: 1px solid lightgray;"><b>AM</b></td>
					<td style="border: 1px solid lightgray;"><b>NN</b></td>
					<td style="border: 1px solid lightgray;"><b>PM</b></td>
					<td style="border: 1px solid lightgray;"><b>Bedtime</b></td>
					<td style="border: 1px solid lightgray;"><b>Remarks</b></td>
				</tr>
				<?php foreach ($items as $row) {?>
					<tr>
						<td style="border: 1px solid lightgray;"><?php echo $row->medication; ?></td>
						<td style="border: 1px solid lightgray;"><?php echo $row->qty; ?></td>
						<td style="border: 1px solid lightgray;"><?php echo $row->Am; ?></td>
						<td style="border: 1px solid lightgray;"><?php echo $row->Nn; ?></td>
						<td style="border: 1px solid lightgray;"><?php echo $row->Pm; ?></td>
						<td style="border: 1px solid lightgray;"><?php echo $row->Bedtime; ?></td>
						<td style="border: 1px solid lightgray;"><?php echo $row->remarks; ?></td>
					</tr>
				<?php } ?>
			</table>
			<?php if($type=='pdf'){?>
			<br/><br/>
			<table width="100%" style="border-collapse: collapse;">	
					<tr>
						<td valign="top" width="65%">
							Note: Do not change prescribed brand without my consent<br/>
							Next Appointment on : <?php echo $info->appointment_date; ?>
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