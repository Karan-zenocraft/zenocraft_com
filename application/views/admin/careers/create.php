

<div class="content-frm">
    <!-- Contact form -->
    <form action="" method="post" name="add_user" enctype="multipart/form-data">
        <div class="form-cw">
            <h2>Add Job</h2>
            <div class="clear"></div>
        </div>

        <div class="input-group">
           <input type="text" name="job_id" value="<?php echo !empty($postData['job_id']) ? $postData['job_id'] : ''; ?>" placeholder="Job Id">


            <?php echo form_error('job_id', '<p class="field-error">', '</p>'); ?>
        </div>
        <div class="input-group">
            <input type="text" name="title" value="<?php echo !empty($postData['title']) ? $postData['title'] : ''; ?>" placeholder="Job Title">
            <?php echo form_error('title', '<p class="field-error">', '</p>'); ?>
        </div>


        <div class="input-group">
            <input type="text" name="location" value="<?php echo !empty($postData['location']) ? $postData['location'] : ''; ?>" placeholder="Job Location">
            <?php echo form_error('location', '<p class="field-error">', '</p>'); ?>
        </div>
        <div class="input-group">
            <input type="text" name="type" value="<?php echo !empty($postData['type']) ? $postData['type'] : ''; ?>" placeholder="Job Type">
            <?php echo form_error('type', '<p class="field-error">', '</p>'); ?>
        </div>
        <div class="input-group">
        	<textarea name="description" value="<?php echo !empty($postData['description']) ? $postData['description'] : ''; ?>" placeholder="Job Description"></textarea>

            <?php echo form_error('description', '<p class="field-error">', '</p>'); ?>
        </div>

        <input type="submit" name="careerSubmit" class="frm-submit" value="Submit">
    </form>
</div>