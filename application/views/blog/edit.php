<h3>Edit Post</h3>
<a href="<?php echo base_url('blog/index'); ?>" class="btn btn-default">Back</a>

<form action="<?php echo base_url('blog/update') ?>" method="post" class="form-horizontal">

    <input type="hidden" name="txt_hidden_id" value="<?= $blog->id ?>">
    <div class="form-group">
        <label for="title" class="col-md-2 text-right">Title</label>
        <div class="col-md-10">
            <input type="text" name="txt_title" class="form-control" value="<?= $blog->title ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-md-2 text-right">Description</label>
        <div class="col-md-10">
            <textarea name="txt_description" class="form-control" required><?= $blog->description ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="last_updated" class="col-md-2 text-right">Updated at: </label>
        <div class="col-md-10">
            <?= $blog->updated_at ?>
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-md-2 text-right"></label>
        <div class="col-md-10">
            <input type="submit" name="btn_save" class="btn btn-primary" value="Update">
        </div>
    </div>

</form>
