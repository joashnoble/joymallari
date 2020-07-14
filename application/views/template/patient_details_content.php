<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="patient-panel-content">
		<div class="pd">
			<div class="row">	
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="panel panel-default">
						 	<div class="panel-heading">
						 		<i class="fa fa-user"></i> <b class="uppercase">Patient Information</b>
						 		<div style="float: right;">
							 		<a href="Ref_patient/transaction/print-patient?id=<?php echo $patient->ref_patient_id; ?>&type=preview" target="_blank" type="button" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Print">
							 			<i class="fa fa-print"></i> Print
							 		</a>			
									<a href="Ref_patient/transaction/export-patient?id=<?php echo $patient->ref_patient_id; ?>" type="button" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Export to Excel">
							 			<i class="fa fa-file-excel-o"></i> Excel
							 		</a>			 			
						 		</div>
						 	</div>
						    <div class="panel-body">
								<div class="row">
									<div class="col-md-8">
								    	<b>Patient Name :</b> <?php echo $patient->fullname; ?><br/>
										<b>Birthdate :</b> <?php echo $patient->bdate; ?><br/>
										<b>Gender :</b> <?php echo $patient->patient_sex; ?><br/>
										<b>Civil Status :</b> <?php echo $patient->civil_status; ?>
									</div>
									<div class="col-md-4">
										<b>Height :</b> <?php echo ($patient->patient_height==""? 'N/A' : $patient->patient_height); ?> <br/>
										<b>Weight :</b> <?php echo ($patient->weight==""? 'N/A' : $patient->weight); ?> <br/>
										<b>Blood Type :</b> <?php echo ($patient->blood_type==""? 'N/A' : $patient->blood_type); ?><br/>
										<b>Age :</b> <?php echo ($patient->patient_age==""? 'N/A' : $patient->patient_age); ?> yrs old<br/>
									</div>									
								</div>
								<hr><br/>
								<i class="fa fa-home"></i> <b class="uppercase">Address Information</b><br/>
								<?php echo ($patient->address==""? 'N/A' : $patient->address); ?>
						    </div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-user"></i> <b class="uppercase"> Guardian Information</b>
							</div>
							<div class="panel-body">
						    	<b>Guardian Name :</b> <?php echo ($patient->guardian_name==""? 'N/A' : $patient->guardian_name); ?><br/>
								<b>Relationship :</b> <?php echo ($patient->relationship_name==""? 'N/A' : $patient->relationship_name); ?>
								<hr><br/>
								<b class="uppercase"><i class="fa fa-phone"></i> Guardian Contact Information</b><br/>
									<b>Mobile # :</b> <?php echo ($patient->guardian_mobile==""? 'N/A' : $patient->guardian_mobile); ?><br/>
									<b>Telephone # :</b> <?php echo ($patient->guardian_telephone==""? 'N/A' : $patient->guardian_telephone); ?><br/>
									<b>Address :</b> <?php echo ($patient->guardian_address==""? 'N/A' : $patient->guardian_address); ?><br/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-default">
						 	<div class="panel-heading">
						 		<i class="fa fa-medkit"></i> <b class="uppercase">Medical Information</b>
						 	</div>
						    <div class="panel-body">
								<b><i class="fa fa-file-o"></i> NOTES :</b><br/>
								 <?php echo ($patient->ref_note==""? 'N/A' : $patient->ref_note); ?>
						    	<!-- <b>Attending Physc :</b> <?php echo ($patient->attending_physc==""? 'N/A' : $patient->attending_physc); ?><br/> -->
<!-- 								<b>Dry Weight # :</b> <?php echo ($patient->dry_weight==""? 'N/A' : $patient->dry_weight); ?><br/>
								<b>Pre HD Weight # :</b> <?php echo ($patient->pre_hd_weight==""? 'N/A' : $patient->pre_hd_weight); ?><br/>
								<b>Pre Post HD Weight # :</b> <?php echo ($patient->pre_post_hd_weight==""? 'N/A' : $patient->pre_post_hd_weight); ?><br/>
								<b>Weight Gain :</b> <?php echo ($patient->weight_gain==""? 'N/A' : $patient->weight_gain); ?><br/> -->
						    </div>
						 </div>
						<div class="panel panel-default">
						 	<div class="panel-heading">
						 		<i class="fa fa-phone"></i> <b class="uppercase">Contact Information</b>
						 	</div>
						    <div class="panel-body">
						    	<b>Email :</b> <?php echo ($patient->email==""? 'N/A' : $patient->email); ?><br/>
								<b>Telphone # :</b> <?php echo ($patient->telephone==""? 'N/A' : $patient->telephone); ?><br/>
								<b>Mobile # :</b> <?php echo ($patient->mobile==""? 'N/A' : $patient->mobile); ?><br/>
						    </div>
						</div>
						<div class="panel panel-default">
						 	<div class="panel-heading">
						 		<i class="fa fa-building"></i> <b class="uppercase">Work Information</b>
						 	</div>
						    <div class="panel-body">
						    	<b>Occupation  :</b> <?php echo ($patient->occupation==""? 'N/A' : $patient->occupation); ?><br/>
								<b>Company Name :</b> <?php echo ($patient->company_name==""? 'N/A' : $patient->company_name); ?>
						    </div>
						  </div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</body>
</html>