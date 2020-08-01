<?php 
	include"header.php";
 ?>


<div class="container">
	<div class="row my-4">
		<div class="col-9 text-left">
			<h1 style="font-weight: bolder; font-size: 50px; color: #03A13B">Patient Registration</h1>
		</div>

		<div class="col-3">
			<h2 style="font-weight: bolder; font-size:20px; color:teal;"><i class="fa fa-user" style="font-size: 36px; color:teal;"></i>Welcome - <?= $this->session->userdata('username'); ?></h2>
			<span style="font-weight: bolder; font-size:20px; color:teal;"><i class="fa fa-power-off"></i><a style="color:teal;" href="<?= base_url().'welcome/logout'; ?>">Logout</a></span>
		</div>


	</div>


		<form action="<?= base_url().'patients_controller/pregistration'; ?>" method="post">
			<?php if($this->uri->segment(2) == "inserted")
					{
						echo '<p class="text-success">Patient Registered Successfully</p>';
					}

			 ?>
			<div class="form-row">
				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-calendar"></i></span>
					</div>
					<input class="form-control border-primary" type="date" name="regDate">
					<span class="text-danger"><?= form_error("regDate"); ?></span>
				</div>
				
			</div>

			<div class="form-row my-4">
				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-user"></i></span>
					</div>
					<input class="form-control border-primary" type="text" name="fname" placeholder="First Name">
					<span class="text-danger"><?= form_error("fname"); ?></span>
				</div>

				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-user"></i></span>
					</div>
					<input class="form-control border-primary" type="text" name="mname" placeholder="Middle Name">
					<span class="text-danger"><?= form_error("mname"); ?></span>
				</div>

				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-user"></i></span>
					</div>
					<input class="form-control border-primary" type="text" name="lname" placeholder="Last Name">
					<span class="text-danger"><?= form_error("lname"); ?></span>
				</div>
			</div>

			<div class="form-row my-4">
				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-transgender"></i></span>
					</div>
					<select class="form-control border-primary" name="gender">
						<option selected>--Select Gender--</option>
						<option>Female</option>
						<option>Male</option>
						
					</select>
					
				</div><span class="text-danger"><?= form_error("gender"); ?></span>

				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-address-card"></i></span>
					</div>
					<input class="form-control border-primary" type="text" name="address" placeholder="Address">
					<span class="text-danger"><?= form_error("address"); ?></span>
				</div>

				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-phone"></i></span>
					</div>
					<input class="form-control border-primary" type="text" name="contact" placeholder="Contacts">
					<span class="text-danger"><?= form_error("contact"); ?></span>
				</div>
			</div>

			<div class="form-row my-4">
				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-ambulance"></i></span>
					</div>
					<input class="form-control border-primary" type="text" name="treatment" placeholder="treatment">
					<span class="text-danger"><?= form_error("treatment"); ?></span>
				</div>

				<div class=" input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-dollar-sign"></i></span>
					</div>
					<input class="form-control border-primary" type="number" name="cost" placeholder="Cost">
					<span class="text-danger"><?= form_error("cost"); ?></span>
				</div>
			</div>

			<div class="form-row text-center">
				<div class="form-group col-6">
					<a href="<?= base_url().'admin_controller/admini'; ?>" class="btn btn-danger w-75">Cancel</a>
				</div>

				<div class="form-group col-6">
					<button class="btn btn-success w-75" type="submit" value="submit" name="submit">Submit</button>
				</div>
			</div>

			<div class="form-row text-center">
				<div class="col">
				<a href="<?= base_url().'patients_controller/viewAllpatients'; ?>" class="btn btn-primary w-75">View Patients</a>
			</div>
			</div>

		</form>
		

</div>



</body>
</html>