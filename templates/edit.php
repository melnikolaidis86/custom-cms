<?php include './includes/header.php'; ?>

<div style="background-image: url('./assets/img/daniel-olahh.jpg'); background-position: center; background-size: cover; height: 250px;">
    <div class="filter"></div>

</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
        <h3 class="font-italic bg-light py-3 text-center">
            Edit Topic
        </h3>

        <hr>

        <form role="form" action="<?php echo BASE_URI; ?>edit.php" method="post">
            <div class="form-group">
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" class="form-control" name="title" value="<?php echo $topic->title; ?>">
                </div>
                <div class="form-group">
                    <div class="form-group">
                      <label for="selectCategory">Category</label>
                      <select class="form-control" name="category" id="selectCategory">
                        <option value="" disabled>Choose Category</option>
                        <option value="newCategory">New Category</option>

                        <?php if(get_all_categories()) : ?>
                            <?php foreach(get_all_categories() as $category) : ?>

                            <option <?php echo $topic->category_id == $category->category_id ? 'selected' : ''; ?> value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>

                            <?php endforeach; ?>
                        <?php endif; ?>

                      </select>
                    </div>
                    <div class="form-group" id="newCategory">
                        <label for="">New category</label>
                        <input type="text" class="form-control" name="newCategory" placeholder="Category Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Topic</label>
                    <textarea class="form-control" name="topic" id="ckEditor" rows="10" cols="80"><?php echo $topic->description; ?></textarea>
                    <input type="hidden" name="topic_id" value="<?php echo $topic->id; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $topic->user_id; ?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="editTopic" class="btn btn-outline-info my-3 d-block ml-auto">Edit your topic</button>
                </div>
            </div>
        </form>

        <script>
            // Replace the <textarea id="editor"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'ckEditor' );
        </script>

    
        </div>

        <?php include './includes/sidebar.php'; ?>

    </div>

</main>

<?php include './includes/footer.php'; ?>