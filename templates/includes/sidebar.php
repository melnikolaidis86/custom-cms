<aside class="col-md-4 blog-sidebar">

    <div class="p-3">
        <h4 class="font-italic mb-3 bg-light py-3 text-center">Categories</h4>
        <ol class="list-group list-group-flush mb-0">
            <?php foreach($categories as $category) : ?>
                <li class="list-group-item"><a href="<?php echo BASE_URI; ?>?category=<?php echo $category->id; ?>"><?php echo $category->category_name; ?></a></li>
            <?php endforeach; ?>
        </ol>
    </div>

    <div class="p-3 d-none d-md-block">
        <h4 class="font-italic mb-3 bg-light py-3 text-center">Archives</h4>
        <ol class="list-group list-group-flush mb-0">
            <li class="list-group-item"><a href="#">March 2014</a></li>
            <li class="list-group-item"><a href="#">February 2014</a></li>
            <li class="list-group-item"><a href="#">January 2014</a></li>
            <li class="list-group-item"><a href="#">December 2013</a></li>
            <li class="list-group-item"><a href="#">November 2013</a></li>
            <li class="list-group-item"><a href="#">October 2013</a></li>
        </ol>
    </div>

</aside>