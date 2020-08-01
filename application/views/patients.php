<?php 
	include"header.php";
 ?>

<div class="container-fluid">

	<div class="card">
		<div class="card-header">
			<h2>All Patients</h2>
			<div class="text-right">
			<h2 style="font-weight: bolder; font-size:20px; color:teal;"><i class="fa fa-user" style="font-size: 36px; color:teal;"></i>Welcome - <?= $this->session->userdata('username'); ?></h2>
			<span style="font-weight: bolder; font-size:20px; color:teal;"><i class="fa fa-home"></i><a style="color:teal;" href="<?= base_url().'admin_controller/admini'; ?>">HOME</a> &nbsp;&nbsp;<i class="fa fa-power-off"></i><a style="color:teal;" href="<?= base_url().'welcome/logout'; ?>">Logout</a></span>
		</div>
		</div>

		<div class="card-body">
			<span class="text-danger"><?= $this->session->flashdata('response'); ?></span>
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>DATE</th>
					<th>FIRST NAME</th>
					<th>MIDDLE NAME</th>
					<th>LAST NAME</th>
					<th>GENDER</th>
					<th>ADDRESS</th>
					<th>CONTACT</th>
					<th>TREATMENT</th>
					<th>AMOUNT PAID</th>
					<th>ACTION</th>
				</tr>

				<?php if ($patients->num_rows() > 0): ?>
				<?php foreach ($patients->result() as $patient): ?>
					<tr>
						<td><?= $patient->id; ?></td>
						<td><?= $patient->regDate; ?></td>
						<td><?= $patient->fname; ?></td>
						<td><?= $patient->mname; ?></td>
						<td><?= $patient->lname; ?></td>
						<td><?= $patient->gender; ?></td>
						<td><?= $patient->address; ?></td>
						<td><?= $patient->contact; ?></td>
						<td><?= $patient->treatment; ?></td>
						<td><?= $patient->cost; ?></td>
						<td>
							<a href="<?= base_url().'patients_controller/pedit'; ?>/<?= $patient->id; ?>" class="btn btn-info">Edit</a>
							<a href="<?= base_url().'patients_controller/pdelete'; ?>/<?= $patient->id; ?>" class="btn btn-danger">Delete</a>
							
						</td>
					</tr>

				<?php endforeach ?>
				<?php endif ?>
		
			</table>
		</div>
	</div>

</div>