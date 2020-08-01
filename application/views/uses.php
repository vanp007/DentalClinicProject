<?php 
	include"header.php";
 ?>


<div class="container text-center">
	<div class="row my-4">
		<div class="col-9 text-left">
			<h1 style="font-weight: bolder; font-size: 50px; color: #03A13B">Daily Uses Records</h1>
		</div>

		<div class="col-3">
			<h2 style="font-weight: bolder; font-size:20px; color:teal;"><i class="fa fa-user" style="font-size: 36px; color:teal;"></i>Welcome - <?= $this->session->userdata('username'); ?></h2>
			<span style="font-weight: bolder; font-size:20px; color:teal;"><i class="fa fa-power-off"></i><a style="color:teal;" href="<?= base_url().'welcome/logout'; ?>">Logout</a></span>
		</div>
	</div>

<div class="table-responsive-sm">
<table class="table">
    
    <tbody>

	<form action="<?= base_url().'Uses_controller/index'; ?>" method="post" >

<input type="number" autofocus="autofocus" name="query" placeholder="Quantity" class="w-50 text-center" />
<input type="submit" name="kiwango" value="Proceed" class="btn btn-primary" />
<a href="<?= base_url().'admin_controller/admini'; ?>" class="btn btn-danger">Cancel</a><br>
<?php
if($this->uri->segment(2) == 'inserted'){
        		//echo '<p class="text-success"> Uses Recorded Successfully</p>';
        		echo "<script> window.onload = 
                                 function sweet(){
                                    Swal.fire(
                                        '',
                                'Uses Recorded Successfully...!!!!',
                                'success'
                                )}

                                </script>";
        	}
?>
</form>

<?php	
	if (isset($_POST['kiwango'])){


    $query = $_POST['query']; 
	
         
        $query = htmlspecialchars($query); 
		
			 
        if(($query) > 0){

        	echo '<form action="'.base_url().'Uses_controller/usesreg"'.' method="post">';
        	
        	echo"<span style='color: black; font-weight: bold;' class='btn btn-info'>DATE</span><input type='date' name='usesdate' 
        		required />";

        		echo "
					<thead>
					<tr class='bg-primary'>
						<th>S/N</th>
						<th>USES DETAILS</th>
            			<th>COST</th>
        			</tr>
    				</thead>";

			$i=0;
				while($i<$query){
            			
					$s2=($i+1);
					echo "
					<tr class='bg-info'><td colspan=''>$s2.</td><td><input type='text' class='input-group' name='description'  placeholder='Description' required></td><td><input type='text' name='amount'  placeholder='Amount' required></td></tr>";
		
		
					$i++;				  
					}
					echo "<tr><td colspan='3'><input type='reset' name='submit' class='btn btn-secondary' value='Clear' /><input type='submit' name='submit' class='btn btn-success' value='Add Item' /><a href=".'"'.base_url().'admin_controller/uses'.'">'."<input type='button' value='Cancel' class='btn btn-danger' style='margin-left:30%; width:10%;'/></a></td></tr>";
					
			echo "</form>";
		
		}

		
}
?>
		
		
 

	</tbody >
	
	</table>
</div>
</div>
</body>
</html>