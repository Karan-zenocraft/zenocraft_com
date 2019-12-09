
<div class="content-frm">
    <!-- Contact form -->
    <form action="" method="post" name="add_user" enctype="multipart/form-data">
        <div class="form-cw">
            <h2>Add Portfolio</h2>
            <div class="clear"></div>
        </div>

        <div class="input-group">
            <input type="text" name="title" value="<?php echo !empty($postData['title']) ? $postData['title'] : ''; ?>" placeholder="Project Title">
            <?php echo form_error('title', '<p class="field-error">', '</p>'); ?>
        </div>

        <div class="input-group">
           <!--  <input type="text" name="category" value="<?php echo !empty($postData['category']) ? $postData['category'] : ''; ?>" placeholder="Project Category"> -->
           <?php echo form_dropdown('category', array("" => "--Select Category--") + $categoryList); ?>

            <?php echo form_error('category', '<p class="field-error">', '</p>'); ?>
        </div>

        <div class="input-group">
            <input type="text" name="skill" value="<?php echo !empty($postData['skill']) ? $postData['skill'] : ''; ?>" placeholder="Project skill">
            <?php echo form_error('skill', '<p class="field-error">', '</p>'); ?>
        </div>
        <div class="input-group">
        	<textarea name="description" value="<?php echo !empty($postData['description']) ? $postData['description'] : ''; ?>" placeholder="Project Description"></textarea>

            <?php echo form_error('description', '<p class="field-error">', '</p>'); ?>
        </div>

        <div class="input-group">
            <input type="file" name="image" value="<?php echo !empty($postData['image']) ? $postData['image'] : ''; ?>" placeholder="Password">
            <?php echo form_error('image', '<p class="field-error">', '</p>'); ?>
        </div>
        <input type="submit" name="portfolioSubmit" class="frm-submit" value="Submit">
    </form>
</div>