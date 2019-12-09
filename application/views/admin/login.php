<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Login</title>

<?php echo link_tag('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>
<?php echo link_tag('assets/vendor/fontawesome-free/css/all.min.css'); ?>
<?php echo link_tag('assets/css/sb-admin.css'); ?>

  </head>
    
    
    <style>
        body{background-image:linear-gradient(120deg, #174477 0%, #fff 100%);webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-image: -webkit-linear-gradient(330deg, #174477 0%, #595959 100%);}
        .card-body{padding: 60px 30px;}
        .card-login {max-width: 30rem;}
        .card{border-radius: 10px;}
        .form-label-group input:focus, .form-label-group input:hover{outline: none;box-shadow: none;transition: 0.4s all}
        .form-group {margin-bottom: 30px;}
        .card-body form .d-block.small{float: right;margin-top: 5px;}
        .btn-primary{background-color: #212529;border-color: #212529;}
        .btn-primary:hover{background-color: transparent;border-color: #212529;color: #212529};transition: 0.4s all
        .btn-primary.focus, .btn-primary:focus{box-shadow: none!important;transition: 0.4s all}
        .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle{color: #212529;background-color: transparent;border-color: #212529;}
        .card-body form .d-block.small{color: #212529;letter-spacing: 2px;margin-top: 5px;}
        .card-body form .d-block.small:hover{text-decoration: none}
        .form-control:focus{border-color: #212529;transition: 0.4s all}
        .card.card-login.mx-auto.mt-5{margin-top: 135px!important;}
        .btn-primary.focus, .btn-primary:focus{box-shadow: none!important;}
        .card-body .navbar-brand.mr-1{margin: auto;letter-spacing: 2px;font-weight: bold;color: #212529;
    text-align: center;
    display: block;
    margin-bottom: 20px;}
        .form-label-group > label{letter-spacing: 2px;}
        .btn.btn-primary.btn-block{letter-spacing: 2px;}
    </style>

  <body>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
<!--        <div class="card-header">Admin Login</div>-->
        <!---- Error Message ---->


        <div class="card-body">
            
            
            <a class="navbar-brand mr-1" href="/zenocraft_com/admin/Dashboard">Zenocraft Admin</a>
            
<?php echo form_open('admin/login'); ?>
            <div class="form-group">
              <div class="form-label-group">
<?php echo form_input(['name' => 'username', 'id' => 'username', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('username')]); ?>
<?php echo form_label('Enter Username', 'username'); ?>
<?php echo form_error('username', "<div style='color:red;font-size:12px'>", "</div>"); ?>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
<?php echo form_password(['name' => 'password', 'id' => 'password', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('password')]); ?>
<?php echo form_label('Password', 'password'); ?>
<?php echo form_error('password', "<div style='color:red;font-size:12px'>", "</div>"); ?>
              </div>
            </div>

 <?php echo form_submit(['name' => 'login', 'value' => 'Login', 'class' => 'btn btn-primary btn-block']); ?>
  <a class="d-block small" href="<?php echo site_url('Home'); ?>">Back to Home page</a>
<?php echo form_close(); ?>

            <?php if ($this->session->flashdata('error')) {?>
<p style="color: red;font-size: 12px;margin-bottom: 0;position: absolute;bottom: 30px;left: 0;right: 0;margin: auto;" align="center"><?php echo $this->session->flashdata('error'); ?></p>

<?php }?>
            
        </div>
          
          
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  </body>

</html>
