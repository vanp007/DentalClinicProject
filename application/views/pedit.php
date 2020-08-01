<?php 
	include"header.php";
	
 ?>


<div class="container">
	<div class="row text-center my-4">
		<div class="col-12">
			<h1 style="font-weight: bolder; font-size: 50px; color: #03A13B">Update Patient Details</h1>
		</div></div>

		<form action="<?= base_url().'patients_controller/pregistration'; ?>" method="post">

			<?php  
			if($patients_data->num_rows() > 0)
			{
				
				foreach($patients_data->result() as $patient)
				 {
					
			?>

			<div class="form-row">
				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-calendar"></i></span>
					</div>
					<input value="<?= $patient->regDate ?>" class="form-control border-primary" type="date" name="regDate">
					<span class="text-danger"><?= form_error("regDate"); ?></span>

				</div>
			</div>

			<div class="form-row my-4">
				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-user"></i></span>
					</div>
					<input value="<?= $patient->fname ?>" class="form-control border-primary" type="text" name="fname" placeholder="First Name">
					<span class="text-danger"><?= form_error("fname"); ?></span>

				</div>

				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-user"></i></span>
					</div>
					<input value="<?= $patient->mname ?>" class="form-control border-primary" type="text" name="mname" placeholder="Middle Name">
					<span class="text-danger"><?= form_error("mname"); ?></span>

				</div>

				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-user"></i></span>
					</div>
					<input value="<?= $patient->lname ?>" class="form-control border-primary" type="text" name="lname" placeholder="Last Name">
					<span class="text-danger"><?= form_error("lname"); ?></span>
				</div>
			</div>

			<div class="form-row my-4">
				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-transgender"></i></span>
					</div>
					<input  value="<?= $patient->gender ?>" class="form-control border-primary" type="text" name="gender">
					<span class="text-danger"><?= form_error("gender"); ?></span>
				</div>

				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-address-card"></i></span>
					</div>
					<input value="<?= $patient->address ?>" class="form-control border-primary" type="text" name="address" placeholder="Address">
					<span class="text-danger"><?= form_error("address"); ?></span>
				</div>

				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-phone"></i></span>
					</div>
					<input value="<?= $patient->contact ?>" class="form-control border-primary" type="text" name="contact" placeholder="Contacts">
					<span class="text-danger"><?= form_error("contact"); ?></span>
				</div>
			</div>

			<div class="form-row my-4">
				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-ambulance"></i></span>
					</div>
					<input value="<?= $patient->treatment ?>" class="form-control border-primary" type="text" name="treatment" placeholder="treatment">
					<span class="text-danger"><?= form_error("treatment"); ?></span>
				</div>

				<div class=" input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-dollar-sign"></i></span>
					</div>
					<input value="<?= $patient->cost ?>" class="form-control border-primary" type="number" name="cost" placeholder="Cost">
					<span class="text-danger"><?= form_error("cost"); ?></span>
				</div>
			</div>

			<div class="form-row text-center">
				<div class="form-group col-6">
					<a href="<?= base_url().'patients_controller/viewAllpatients'; ?>" class="btn btn-danger w-75">Cancel</a>
				</div>

				<div class="form-group col-6">
					<input type="hidden" name="hidden_id" value="<?= $patient->id ?>" >
					<button class="btn btn-success w-75" type="submit" value="update" name="update">Update</button>
				</div>
			</div>

			

			<div class="form-row text-center">
				<div class="col">
				<a href="<?= base_url().'patients_controller/viewAllpatients'; ?>" class="btn btn-primary w-75">View Patients</a>
			</div>
			</div>

			<?php
				}
			}else{
				redirect(base_url().'patients_controller/viewAllpatients');
			}
			?>

		</form>
		

</div>
</body>
</html>