<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Add Title" name="title">
  </div>
  <div class="form-group">
    <label for="title">Body</label>
    <textarea class="form-control" placeholder="Add Body" name="body" rows="2"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>