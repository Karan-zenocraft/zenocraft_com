

<div class="content-frm">
    <!-- Contact form -->
    <form action="" method="post" name="add_user">
        <div class="form-cw">
            <h2>Add User</h2>
            <div class="clear"></div>
        </div>

        <div class="input-group">
            <input type="text" name="firstName" value="<?php echo !empty($postData['firstName']) ? $postData['firstName'] : ''; ?>" placeholder="First Name">
            <?php echo form_error('firstName', '<p class="field-error">', '</p>'); ?>
        </div>

        <div class="input-group">
            <input type="text" name="lastName" value="<?php echo !empty($postData['lastName']) ? $postData['lastName'] : ''; ?>" placeholder="Last Name">
            <?php echo form_error('lastName', '<p class="field-error">', '</p>'); ?>
        </div>


        <div class="input-group">
            <input type="text" name="emailId" value="<?php echo !empty($postData['emailId']) ? $postData['emailId'] : ''; ?>" placeholder="Email">
            <?php echo form_error('emailId', '<p class="field-error">', '</p>'); ?>
        </div>

        <div class="input-group">
            <input type="password" name="userPassword" value="<?php echo !empty($postData['userPassword']) ? $postData['userPassword'] : ''; ?>" placeholder="Password">
            <?php echo form_error('userPassword', '<p class="field-error">', '</p>'); ?>
        </div>

            <div class="input-group">
            <input type="text" name="mobileNumber" value="<?php echo !empty($postData['mobileNumber']) ? $postData['mobileNumber'] : ''; ?>" placeholder="Mobile Number">
            <?php echo form_error('mobileNumber', '<p class="field-error">', '</p>'); ?>
        </div>


        <input type="submit" name="userSubmit" class="frm-submit" value="Submit">
    </form>
</div>