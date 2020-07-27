<!DOCTYPE html>
<html>
<head>
	<title>Patient Billing : <?php echo $patient->fullname; ?></title>
	<style type="text/css">
		table{
			font: calibri;
		}
	</style>
</head>
<body>
	<?php if($type=='pdf'){ include 'elements/header_1.php'; ?>
	<hr style="border: 2px solid lightgray!important;">
	<div class="row">
		<table width="100%">
			<tr>
				<td>
					<center><b>BILLING</b></center>
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
					<td colspan="2"><b>Billing  No #</b> : <?php echo $info->billing_code; ?></td>
					<td><b>Date</b> : <?php echo $info->billing_date; ?></td>
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
					<td style="border: 1px solid lightgray;"><b>Service</b></td>
					<td style="border: 1px solid lightgray;"><b>QTY</b></td>
					<td style="border: 1px solid lightgray;"><b>Amount</b></td>
					<td style="border: 1px solid lightgray;"><b>Total</b></td>
				</tr>
				<?php foreach ($items as $row) {?>
					<tr>
						<td style="border: 1px solid lightgray;"><?php echo $row->service_desc; ?></td>
						<td style="border: 1px solid lightgray;"><?php echo $row->qty; ?></td>
						<td style="border: 1px solid lightgray;"><?php echo $row->amount; ?></td>
						<td style="border: 1px solid lightgray;"><?php echo $row->total; ?></td>
					</tr>
				<?php } ?>
			</table>
			<?php if($type=='pdf'){?>
			<br/><br/>
			<table width="100%" style="border-collapse: collapse;">	
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