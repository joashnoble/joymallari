<!DOCTYPE html>
<html>
<head>
	<title>Patient Visiting Record : <?php echo $patient->fullname; ?></title>
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
					<center><b>Visiting Record</b></center>
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
					<td><b>Date Visited</b> : <?php echo $info->visiting_date; ?></td>
					<td colspan="2"><b>Next Visit Date</b> : <?php echo $info->next_visit_date; ?></td>
				</tr>				
			</table>
			<br/>
			<table class="table table-striped table-bordered" style="border-collapse: collapse;" width="100%" cellpadding="5" cellspacing="5">
				<tr>
					<td style="border-bottom: 1px solid lightgray;"><b>Note : </b></td>
				</tr>
				<tr>
					<td>
						<?php echo $info->visiting_note; ?>
						<br/><br/><br/>
					</td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid lightgray;"><b>Diagnostics : </b></td>
				</tr>
				<tr>
					<td>
						<?php echo $info->visiting_diagnostics; ?>
						<br/><br/><br/>
					</td>
				</tr>				
				<tr>
					<td style="border-bottom: 1px solid lightgray;"><b>Findings : </b></td>
				</tr>
				<tr>
					<td>
						<?php echo $info->visiting_findings; ?>
						<br/><br/><br/>
					</td>
				</tr>					
				<tr>
					<td style="border-bottom: 1px solid lightgray;"><b>Treatment : </b></td>
				</tr>
				<tr>
					<td>
						<?php echo $info->treatment; ?>
						<br/><br/><br/>
					</td>
				</tr>					
				<tr>
					<td style="border-bottom: 1px solid lightgray;"><b>Remarks  : </b></td>
				</tr>
				<tr>
					<td>
						<?php echo $info->visiting_remarks; ?>
						<br/><br/><br/>
					</td>
				</tr>					
			</table>
		</div>
	</div>
</body>
</html>