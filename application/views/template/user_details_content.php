<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	    .user-panel-content{
	      background-color: #F0F0F0;
	      color: black;
	      padding-top: 20px;
	    }
	    div.p-header{
	    	text-transform: uppercase; 
	    	background: lightgray;
	    	padding: 10px;
	    	width: 100%;
	    	font-weight: bold;
	    	border: 1px solid lightgray;
	    }
	    .uppercase{
	    	text-transform: uppercase;
	    }
	</style>
</head>
<body>
	<div class="user-panel-content">
		<div class="pd">
			<div class="row">	
				<div class="col-md-12">
					<div class="col-md-2">
						 <div class="panel panel-default">
							<div class="panel-body">
								<center>
									<img src="<?php echo $user->photo_path; ?>" style="width: 152px;height: 152px;">
								</center>
							</div>
						 </div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-user"></i> <b class="uppercase">User Information</b>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
								    	<b>Name :</b> <?php echo $user->full_name; ?><br/>
								    	<b>Birthday :</b> <?php echo $user->user_bdate; ?><br/>
										<hr><br/>
										<b>Username :</b> [<?php echo $user->user_name; ?>]<br/>
										<b>User Group :</b> [<?php echo $user->user_group; ?>]<br/>
									</div>							
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-phone"></i> <b class="uppercase">Contact Information</b>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
								    	<b>Email :</b> <?php echo $user->user_email; ?><br/>
										<b>Mobile # :</b> <?php echo $user->user_mobile; ?><br/>
										<b>Telephone # :</b> <?php echo $user->user_telephone; ?><br/>
										<hr><br/>
										<b><i class="fa fa-home"></i> Address :</b> <?php echo $user->user_address; ?>
									</div>							
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>