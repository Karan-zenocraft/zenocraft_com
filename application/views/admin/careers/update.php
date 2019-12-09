

<div class="content-frm">
    <!-- Contact form -->
    <form action="" method="post" name="add_user" enctype="multipart/form-data">
        <div class="form-cw">
            <h2>Update Job</h2>
            <div class="clear"></div>
        </div>

        <div class="input-group">
           <input type="text" name="job_id" value="<?php echo !empty($careers->job_id) ? $careers->job_id : $postData['job_id'] ?>" placeholder="Job Id">


            <?php echo form_error('job_id', '<p class="field-error">', '</p>'); ?>
        </div>
        <div class="input-group">
            <input type="text" name="title" value="<?php echo !empty($careers->title) ? $careers->title : $postData['title']; ?>" placeholder="Job Title">
            <?php echo form_error('title', '<p class="field-error">', '</p>'); ?>
        </div>

        <div class="input-group">
            <input type="text" name="location" value="<?php echo !empty($careers->location) ? $careers->location : $postData['location']; ?>" placeholder="Job location">
            <?php echo form_error('location', '<p class="field-error">', '</p>'); ?>
        </div>
        <div class="input-group">
            <input type="text" name="type" value="<?php echo !empty($careers->type) ? $careers->type : $postData['type']; ?>" placeholder="Password">
            <?php echo form_error('type', '<p class="field-error">', '</p>'); ?>
        </div>
        <div class="input-group">
        	<textarea name="description" placeholder="Job Description"><?php echo !empty($careers->description) ? $careers->description : $postData['description']; ?></textarea>

            <?php echo form_error('description', '<p class="field-error">', '</p>'); ?>
        </div>

        <input type="submit" name="careerSubmit" class="frm-submit" value="Submit">
    </form>
</div>