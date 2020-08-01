<?php 
    include"header.php";
 ?>


<div class="container text-center">
	<div class="row my-4">
		<div class="col-9 text-left">
			<h1 style="font-weight: bolder; font-size: 50px; color: #03A13B">Daily Summary</h1>
		</div>

        <div class="col-3">
            <h2 style="font-weight: bolder; font-size:20px; color:teal;"><i class="fa fa-user" style="font-size: 36px; color:teal;"></i>Welcome - <?= $this->session->userdata('username'); ?></h2>
            <span style="font-weight: bolder; font-size:20px; color:teal;"><i class="fa fa-power-off"></i><a style="color:teal;" href="<?= base_url().'welcome/logout'; ?>">Logout</a></span>
        </div>
	</div>

	<div class="card-body">
		<table class="table table-striped table-bordered">
			<tr>
				<th>DATE</th>
				<th>DESCRIPTION</th>
				<th>AMOUNT</th>
			</tr>
			<?php if($uses->num_rows()>0): ?>
			<?php foreach ($uses->result() as $use): ?>
				<tr>
					<td><?= $use->date; ?></td>
					<td><?= $use->description; ?></td>
					<td><?= $use->amount; ?></td>
				</tr>
				
			<?php endforeach ?>

		<?php endif ?>
	</table>
	<a href="<?= base_url().'HtmltoPDF/pdfdetails'; ?>">Print</a>
	<a href="<?= base_url().'Admin_controller/admini'; ?>"><button class="btn btn-info"><<< BACK</button></a>
</div>