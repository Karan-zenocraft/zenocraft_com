

<div class="content-frm">
    <!-- Contact form -->
    <form action="" method="post" name="update_technology">
        <div class="form-cw">
            <h2>Update Technology</h2>
            <div class="clear"></div>
        </div>

        <div class="input-group">
            <input type="text" name="technology" value="<?php echo !empty($hire->technology) ? $hire->technology : $postData['technology']; ?>" placeholder="Technology">
            <?php echo form_error('technology', '<p class="field-error">', '</p>'); ?>
        </div>
        <div class="input-group">
        	<textarea name="description" placeholder="Description"><?php echo !empty($hire->description) ? $hire->description : $postData['description']; ?></textarea>

            <?php echo form_error('description', '<p class="field-error">', '</p>'); ?>
        </div>
        <input type="submit" name="hireSubmit" class="frm-submit" value="Submit">
    </form>
</div>