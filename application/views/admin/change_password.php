    <style>

        .col-md-10{margin: auto;}
</style>      
          <hr>
<!---- Success Message ---->
<?php if ($this->session->flashdata('success')) {?>
<p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>

<?php }?>

<!---- Error Message ---->
<?php if ($this->session->flashdata('error')) {?>
<p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error'); ?></p>
<?php }?>


<div style='box-shadow: 2px 0px 9px 0px #b1afafed;max-width: 45%;margin:auto;padding:30px 0px;margin-top: 33px;'>
 <?php echo form_open('admin/Change_password');  ?>
<h1>Change Password</h1>
     <div class="form-group">
    <div class="form-row">
                <div class="col-md-10">
                  <div class="form-label-group">
<?php echo form_password(['name' => 'currentpassword', 'id' => 'password', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('currentpassword')]); ?>
<?php echo form_label('Current Password', 'currentpassword'); ?>
<?php echo form_error('currentpassword', "<div style='color:red;font-size: 12px;letter-spacing: 2px;'>", "</div>"); ?>
                  </div>
                </div>
              </div>
            </div>

        <div class="form-group">
    <div class="form-row">
                <div class="col-md-10">
                  <div class="form-label-group">
<?php echo form_password(['name' => 'password', 'id' => 'password', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('password')]); ?>
<?php echo form_label('New Password', 'password'); ?>
<?php echo form_error('password', "<div style='color:red;font-size: 12px;letter-spacing: 2px;'>", "</div>"); ?>
                  </div>
                </div>
              </div>
            </div>
      <div class="form-group">
   <div class="form-row">
                <div class="col-md-10">
                  <div class="form-label-group">
<?php echo form_password(['name' => 'confirmpassword', 'id' => 'confirmpassword', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('confirmpassword')]); ?>
<?php echo form_label('Confirm Password', 'confirmpassword'); ?>
<?php echo form_error('confirmpassword', "<div style='color:red;font-size: 12px;letter-spacing: 2px;'>", "</div>"); ?>
                  </div>
                </div>
              </div>
            </div>

      <div class="form-group">
   <div class="form-row">
                <div class="col-md-10">
 <?php echo form_submit(['name' => 'chnagepwd', 'value' => 'Change', 'class' => 'btn btn-primary btn-block']); ?>
</div>
</div>
</div>
 <?php echo form_close(); ?>
</div>