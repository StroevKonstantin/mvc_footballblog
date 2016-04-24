<div class="container">

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('footballnews/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" class="form-control"/><br />

    <label for="chpu">URL</label>
    <input type="input" name="chpu" class="form-control"/><br />

    <label for="meta_d">Meta D</label>
    <input type="input" name="meta_d" class="form-control"/><br />

    <label for="meta_k">Meta K</label>
    <input type="input" name="meta_k" class="form-control"/><br />

    <label for="img_url">Url of img</label>
    <input type="input" name="img_url" class="form-control"/><br />

    <label for="small_description">Small description</label>
    <input type="input" name="small_description" class="form-control"/><br />

    <label for="subtitle">Subtitle</label>
    <input type="input" name="subtitle" class="form-control"/><br />

    <label for="source">Source</label>
    <input type="input" name="source" class="form-control"/><br />

    <label for="text">Text</label>
    <textarea name="text" class="form-control" rows="10"></textarea><br />

    <input type="submit" name="submit" value="Create news item" class="btn btn-primary"/>

</form>
<br>

</div>