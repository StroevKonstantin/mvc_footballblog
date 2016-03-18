<div class="container">

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('footballnews/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" class="form-control"/><br />

    <label for="title">URL</label>
    <input type="input" name="chpu" class="form-control"/><br />

    <label for="text">Text</label>
    <textarea name="text" class="form-control" rows="10"></textarea><br />

    <input type="submit" name="submit" value="Create news item" class="btn btn-primary"/>

</form>

</div>