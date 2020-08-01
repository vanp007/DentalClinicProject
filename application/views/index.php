<?php 
  include"header.php";
  defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

    <div class="container">
    <div class="row login-logo">
        <div class="col-6 text-center py-4">
            <h1></h1><br><br><br>
            <h1 style="color: #199608; font-weight: bolder; font-size: 45px;"><u> W E L C O M E</u></h1>
            <h1 class="h-4">Abcde Dental Clinic</h1>
        </div>

         <div class="col-1" style="border-left:1px solid #232020;height:370px"></div>

        <div class="col-5 text-center">
            <img src="<?= base_url(); ?>assets/images/login.png" width="100px" height="100px" class="" alt="..." >

    <form method="post" action="<?php echo base_url(); ?>welcome/loginValidation" class="text-right my-2">
  <div class="input-group form-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fa fa-user"></i></span>
    </div>
  <input type="text" class="form-control" name="username" placeholder="Enter username"><br>
  <span class="text-danger"><?= form_error('username'); ?></span>
  </div>

  <div class="input-group form-group">
    <div class="input-group-prepend">
    <span class="input-group-text" ><i class="fa fa-key"></i></span>
    </div>
    <input type="password" name="password" class="form-control" placeholder="Password"><br>
    <span class="text-danger"><?= form_error('password'); ?></span>
  </div>

 <button type="submit" class="btn btn-primary" name="login">Login</button>
 <span class="text-danger"><?= $this->session->flashdata('error'); ?></span>
  <!--a href="/admini" class="btn btn-primary ">Login</a-->
</form>
</div>
        </div>


    </div>

</body>
</html>