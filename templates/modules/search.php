<?php

//Require main file that includes all classes and functions
require_once './../../system/init.php';

//Require models
require_once './../../system/models/topic.php';

//Intasiate models
$topic = new Topic();

//Checking for post input
if(isset($_POST['search'])) {

    $search = $_POST['search'];

    $result = $topic->search_for_posts($search);
 
}

?>

<!-- if result display with the appropriate format -->
<?php if(isset($result)) : ?>

    <?php if($result) : ?>

     <ul class="list-group list-group-flush">

        <?php foreach($result as $topic) : ?>

            <li class="list-group-item"><a href="<?php echo BASE_URI; ?>topic.php?id=<?php echo $topic->id; ?>"><?php echo $topic->title; ?></a><span class="text-muted"> in <?php echo $topic->category_name; ?></span></li>

        <?php endforeach; ?>

     </ul>

    <?php endif; ?>

<?php else : ?>

    <p class="m-3 text-muted">No results found...</p>

<?php endif; ?>





    

