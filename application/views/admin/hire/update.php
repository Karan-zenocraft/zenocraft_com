

<div class="content-frm">
    <!-- Contact form -->
    <form action="" method="post" name="update_technology">
        <div class="form-cw">
            <h2>Update Technology</h2>
            <div class="clear"></div>
        </div>

        <div class="input-group">
            <input type="number" name="rate" value="<?php echo !empty($hire->rate) ? $hire->rate : $postData['rate']; ?>" placeholder="Rate">
            <?php echo form_error('rate', '<p class="field-error">', '</p>'); ?>
        </div>
        <div class="input-group">
        	<textarea name="description" placeholder="Description"><?php echo !empty($hire->description) ? $hire->description : $postData['description']; ?></textarea>

            <?php echo form_error('description', '<p class="field-error">', '</p>'); ?>
        </div>
        <input type="submit" name="hireSubmit" class="frm-submit" value="Submit">
    </form>
</div>