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

    <div class="row">
        <div class="col">
            <a href="<?= base_url().'HtmltoPDF/index'; ?>">Angalia</a>
            <form method="POST" action="<?= base_url().'Uses_controller/today_uses_summary'; ?>">
                <button class="btn btn-primary w-50" type="submit" name="today_summary">VIEW TODAY'S SUMMARY</button>
            </form>
        </div>
    </div>

    <div class="row"></div><br><br><br><br><br><br>

     <div class="row">
        <div class="col">

        <button class="btn btn-info w-50" type="submit" name="">CUSTOM SUMMARY</button>
        </div>
    </div>

            <form method="POST" action="today_summary">
                <div class="form-row text-center my-4">
                    <div class="col-2"></div>

                    <div class="input-group form-group col-4">
                        <label style="font-weight: bold;">FROM:</label> &nbsp;
                <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                <input type="date" class="form-control" name="start_date" required >
            </div>

            <div class="input-group form-group col-4">
                        <label style="font-weight: bold;">TO:</label> &nbsp;
                <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                <input type="date" class="form-control" name="end_date" required >
            </div>
        </div>

        <div class="form-row">
        <div class="col">
        <button class="btn btn-success" type="submit" name="submit">Submit</button> &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?= base_url().'Admin_controller/admini'; ?>" class="btn btn-danger">Cancel</a>
        </div>
    </div>
    </form>

</div>
</body>
</html>