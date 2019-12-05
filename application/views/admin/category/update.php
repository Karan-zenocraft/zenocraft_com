<div class="content-frm">
    <!-- Contact form -->
    <form action="" method="post" name="add_user" enctype="multipart/form-data">
        <div class="form-cw">
            <h2>Update Category</h2>
            <div class="clear"></div>
        </div>

        <div class="input-group">
            <input type="text" name="title" value="<?php echo !empty($category->title) ? $category->title : $postData['title']; ?>" placeholder="Category Title">
            <?php echo form_error('title', '<p class="field-error">', '</p>'); ?>
        </div>
        <input type="submit" name="categorySubmit" class="frm-submit" value="Submit">
    </form>
</div>