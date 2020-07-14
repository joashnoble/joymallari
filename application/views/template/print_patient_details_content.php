<!DOCTYPE html>
<html>
<head>
	<title><?php echo $patient->fullname; ?></title>
</head>
<body>
	<table width="100%">
		<tr>
			<td width="10%">
				<img src="<?php echo base_url('assets/img/logo/psn_logo.png'); ?>" width="90" height="90" style="float: left;margin-left: 5%;">
			</td>
			<td width="80%">
				<center>
					<span style="font-size: 14pt;font-weight: bold;">
						JOY D. MALLARI - DE LARA, MD, FPCP, FPSNM
					</span>
					<br/>Internal Medicine - Nephrology (Kidney Specialist)
				</center>
			</td>
			<td width="10%">
				<img src="<?php echo base_url('assets/img/logo/nkti_logo.jpg'); ?>" width="90" height="90" style="float: right;margin-right: 5%;">
			</td>
		</tr>
	</table>
	<br/>
	<table width="100%">
		<tr>
			<td colspan="2" style="border-bottom: 1px solid lightgray;">	
				<span style="text-transform: uppercase;"><b>Patient Information</b></span>
			</td>
		</tr>
		<tr>
			<td width="60%">Patient Name : <?php echo $patient->fullname; ?></td>
			<td width="40%">Height : <?php echo $patient->patient_height; ?></td>
		</tr>
		<tr>
			<td>Birthday : <?php echo $patient->bdate; ?></td>
			<td>Weight : <?php echo $patient->weight; ?></td>
		</tr>
		<tr>
			<td>Gender : <?php echo $patient->patient_sex; ?></td>
			<td>Blood Type : <?php echo $patient->blood_type; ?></td>
		</tr>
		<tr>
			<td>Civil Status : <?php echo $patient->civil_status; ?></td>
			<td>Age : <?php echo $patient->patient_age; ?> yrs old</td>
		</tr>
	</table>
	<br/>
	<table width="100%">
		<tr>
			<td width="50%" style="border-bottom: 1px solid lightgray;">
				<span style="text-transform: uppercase;"><b>Contact Information</b></span>
			</td>
			<td width="50%" style="border-bottom: 1px solid lightgray;">
				<span style="text-transform: uppercase;"><b>Work Information</b></span>
			</td>
		</tr>
		<tr>
			<td>Email : <?php echo $patient->email; ?></td>
			<td>Occupation : <?php echo $patient->occupation; ?></td>
		</tr>
		<tr>
			<td>Telephone # : <?php echo $patient->telephone; ?></td>
			<td>Company : <?php echo $patient->company_name; ?></td>
		</tr>
		<tr>
			<td>Mobilel # : <?php echo $patient->mobile; ?></td>
			<td></td>
		</tr>
	</table>
	<br/>
	<table width="100%">
		<tr>
			<td colspan="2" style="border-bottom: 1px solid lightgray;">
				<span style="text-transform: uppercase;"><b>Address Information</b></span>
			</td>
		</tr>
		<tr>
			<td><?php echo $patient->address; ?></td>
		</tr>
	</table>	
	<br/>
	<table width="100%">
		<tr>
			<td colspan="2" style="border-bottom: 1px solid lightgray;">
				<span style="text-transform: uppercase;"><b>Medical Note</b></span>
			</td>
		</tr>
		<tr>
			<td><?php echo $patient->ref_note; ?></td>
		</tr>
	</table>	
	<br/>
	<table width="100%">
		<tr>
			<td style="border-bottom: 1px solid lightgray;">
				<span style="text-transform: uppercase;"><b>Guardian Information</b></span>
			</td>
		</tr>
		<tr>
			<td>Guardian Name : <?php echo $patient->guardian_name; ?></td>
		</tr>
		<tr>
			<td>Relationship : <?php echo $patient->relationship_name; ?></td>
		</tr>
		<tr>
			<td>Mobile # :  <?php echo $patient->guardian_mobile; ?></td>
		</tr>
		<tr>
			<td>Telephone # : <?php echo $patient->guardian_telephone; ?></td>
		</tr>
		<tr>
			<td>Address : <?php echo $patient->guardian_address; ?></td>
		</tr>
	</table>		
</body>
</html>