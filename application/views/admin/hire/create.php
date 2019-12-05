<div class="content-frm">
    <!-- Contact form -->
    <form action="" method="post" name="add_technology">
        <div class="form-cw">
            <h2>Add Technology</h2>
            <div class="clear"></div>
        </div>

        <div class="input-group">
            <input type="text" name="technology" value="<?php echo !empty($postData['technology']) ? $postData['technology'] : ''; ?>" placeholder="Technology">
            <?php echo form_error('technology', '<p class="field-error">', '</p>'); ?>
        </div>
        <div class="input-group">
        	<textarea name="description" value="<?php echo !empty($postData['description']) ? $postData['description'] : ''; ?>" placeholder="Project Description"></textarea>

            <?php echo form_error('description', '<p class="field-error">', '</p>'); ?>
        </div>
        <input type="submit" name="hireSubmit" class="frm-submit" value="Submit">
    </form>
</div>