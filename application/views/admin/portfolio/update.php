<div class="content-frm">
    <!-- Contact form -->
    <form action="" method="post" name="add_user" enctype="multipart/form-data">
        <div class="form-cw">
            <h2>Update Portfolio</h2>
            <div class="clear"></div>
        </div>

        <div class="input-group">
            <input type="text" name="title" value="<?php echo !empty($portfolio->title) ? $portfolio->title : $postData['title']; ?>" placeholder="Project Title">
            <?php echo form_error('title', '<p class="field-error">', '</p>'); ?>
        </div>

        <div class="input-group">

             <?php echo form_dropdown('category', array("" => "--Select Category--") + $categoryList, $portfolio->category); ?>
            <?php echo form_error('category', '<p class="field-error">', '</p>'); ?>
        </div>

        <div class="input-group">
            <input type="text" name="skill" value="<?php echo !empty($portfolio->skill) ? $portfolio->skill : $postData['skill']; ?>" placeholder="Project skill">
            <?php echo form_error('skill', '<p class="field-error">', '</p>'); ?>
        </div>
        <div class="input-group">
        	<textarea name="description" placeholder="Project Description"><?php echo !empty($portfolio->description) ? $portfolio->description : $postData['description']; ?></textarea>

            <?php echo form_error('description', '<p class="field-error">', '</p>'); ?>
        </div>

        <div class="input-group">
            <input type="file" name="image" value="<?php echo !empty($portfolio->image) ? $portfolio->image : $postData['image']; ?>" placeholder="Password">
            <?php echo form_error('image', '<p class="field-error">', '</p>'); ?>
        </div>
        <input type="submit" name="portfolioSubmit" class="frm-submit" value="Submit">
    </form>
</div>