<?php 
	include"header.php";

 ?>

<div class="container">
	<div class="row my-4">
		<div class="col-9 text-left">
			<h1 style="font-weight: bolder; font-size: 50px; color: #03A13B;">Admin Panel</h1><br>
		</div>

		<div class="col-3">
			<h2 style="font-weight: bolder; font-size:20px; color:teal;"><i class="fa fa-user" style="font-size: 36px; color:teal;"></i>Welcome - <?= $this->session->userdata('username'); ?></h2>
			<span style="font-weight: bolder; font-size:20px; color:teal;"><i class="fa fa-power-off"></i><a style="color:teal;" href="<?= base_url().'welcome/logout'; ?>">Logout</a></span>
		</div>
	</div>
	<div class="row text-center my-4">
		<div class="col-6 my-4">
			<a href="<?= base_url().'admin_controller/pregistration'; ?>"><button class="btn btn-success btn-lg w-75">REGISTER <br>NEW PATIENT</button></a>
		</div>

		<div class="col-6 my-4">
			<a href="<?= base_url().'admin_controller/uses'; ?>"><button class="btn btn-primary btn-lg w-75">RECORD <br>DAILY USES</button></a>
		</div>
	</div>
	<div class="row text-center my-4">
		<div class="col-6 my-4">
			<a href="<?= base_url().'admin_controller/summary'; ?>"><button style="background-color: purple; color: white;" class="btn btn-lg w-75"> VIEW AND PRINT <br> SUMMARY<br></button></a>
		</div>
				
		<div class="col-6 my-4">
			<a href="<?= base_url().'patients_controller/viewAllpatients'; ?>"><button class="btn btn-info btn-lg w-75">VIEW <br> PATIENTS</button></a>
		</div>
		
	</div>

</div>
</body>
</html>