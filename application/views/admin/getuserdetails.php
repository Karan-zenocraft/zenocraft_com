  <h3><?php echo $ud->firstName; ?> <?php echo $ud->lastName; ?>'s Profile</h3>
          <hr>
<!---- Success Message ---->
 <form action="" method="post" name="add_user">
        <div class="form-cw">
            <h2>Add User</h2>
            <div class="clear"></div>
        </div>

        <div class="input-group">
            <input type="text" name="firstName" value="<?php echo !empty($ud->firstName) ? $ud->firstName : $postData['firstName'] ?>">
            <?php echo form_error('firstName', '<p class="field-error">', '</p>'); ?>
        </div>

        <div class="input-group">
            <input type="text" name="lastName" value="<?php echo !empty($ud->lastName) ? $ud->lastName : $postData['lastName']; ?>">
            <?php echo form_error('lastName', '<p class="field-error">', '</p>'); ?>
        </div>


        <div class="input-group">
            <input type="text" name="emailId" value="<?php echo !empty($ud->emailId) ? $ud->emailId : $postData['emailId']; ?>">
            <?php echo form_error('emailId', '<p class="field-error">', '</p>'); ?>
        </div>


            <div class="input-group">
            <input type="text" name="mobileNumber" value="<?php echo !empty($ud->mobileNumber) ? $ud->mobileNumber : $postData['mobileNumber']; ?>">
            <?php echo form_error('mobileNumber', '<p class="field-error">', '</p>'); ?>
        </div>


        <input type="submit" name="userSubmit" class="frm-submit" value="Submit">
    </form>