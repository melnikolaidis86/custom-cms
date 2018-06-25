<?php include './includes/header.php'; ?>
    
<div style="background-image: url('./assets/img/daniel-olahh.jpg'); background-position: center; background-size: cover; height: 350px;">
    <div class="filter"></div>

</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
        <h3 class="mb-3 font-italic bg-light py-3 text-center">
            <?php echo $page_title; ?>
        </h3>

        <hr>


        <?php if($topics) : ?>

        <?php foreach($topics as $topic) : ?>

            <div class="card flex-md-row mt-3 mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-info"><?php echo $topic->category_name; ?></strong>
                    <h3 class="mb-3">
                        <a class="text-dark" href="<?php echo BASE_URI; ?>topic.php?id=<?php echo $topic->id; ?>"><?php echo $topic->title; ?></a>
                    </h3>
                    <p class="card-text mb-auto"><?php echo getExcerpt($topic->description); ?></p>
                    <p class="pt-3"><?php echo formatDate($topic->created_at); ?><i class="nc-icon nc-watch-time ml-1 text-info"></i></p>
                    <p>Comments :<span class="badge badge-info text-white ml-3"><?php echo count_comments($topic->id); ?></span></p>
                    <p>Author : <strong><a href="<?php echo BASE_URI . '?user_id='. $topic->user_id; ?>"><?php echo $topic->full_name; ?></a></strong></p>
                </div>
                <div class="card-img-right flex-auto d-none px-2 d-md-block bg-light" style="width: 200px; min-width:80px; height: 250px;">
                    <img src="./assets/img/faces/<?php echo $topic->image; ?>" class="img-circle img-no-padding img-responsive" alt="Rounded Image">

                    <?php if(isset($_SESSION['user_id']) && $topic->user_id == $_SESSION['user_id']) : ?>
                        <a name="" id="" class="btn btn-info d-block mt-2" href="#" role="button">Edit</a>
                        <a name="" id="" class="btn btn-danger d-block mt-2" href="#" role="button">Delete</a>
                    <?php endif; ?>

                </div>
            </div>

        <?php endforeach; ?>

        <?php else : ?>

            <p class="mt-5 text-muted text-center">No topics yet...</p>


        <?php endif; ?>

        <div class="row">
            <ul class="pagination mx-auto">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>

        <?php include './includes/sidebar.php'; ?>

    </div>

</main>

<?php include './includes/footer.php'; ?>

