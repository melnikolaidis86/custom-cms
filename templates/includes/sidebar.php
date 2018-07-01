<aside class="col-md-4 blog-sidebar">

    <div class="p-3">
        <h4 class="font-italic mb-3 bg-light py-3 text-center">Categories</h4>
        <ol class="list-group list-group-flush mb-0">
            <?php foreach(get_all_categories() as $category) : ?>
                <li class="list-group-item"><a href="<?php echo BASE_URI; ?>?category=<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?><span class="ml-3 badge badge-info"><?php echo $category->topics_count; ?></span></a></li>
            <?php endforeach; ?>
        </ol>
    </div>

    <div class="p-3 d-none d-md-block">
        <h4 class="font-italic mb-3 bg-light py-3 text-center">Popular Users</h4>
        <ol class="list-group list-group-flush mb-0">
            <?php foreach(get_popular_users() as $user) : ?>
                <li class="list-group-item"><a href="<?php echo BASE_URI; ?>?category=<?php echo urlencode($user->full_name); ?>"><?php echo $user->full_name; ?><span class="ml-3 badge badge-info"><?php echo $user->topics_count; ?></span></a></li>
            <?php endforeach; ?>
        </ol>
    </div>

</aside>