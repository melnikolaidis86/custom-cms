<?php include './includes/header.php'; ?>
    
<div style="background-image: url('./assets/img/daniel-olahh.jpg'); background-position: center; background-size: cover; height: 350px;">
    <div class="filter"></div>

</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
        <h3 class="mb-3 font-italic bg-light py-3 text-center">
            Topics
        </h3>

        <hr>

        <?php foreach($topics as $topic) : ?>

        <div class="card flex-md-row mt-3 mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-info"><?php echo $topic->category_name; ?></strong>
                <h3 class="mb-3">
                    <a class="text-dark" href="<?php echo BASE_URI; ?>topic.php?id=<?php echo $topic->id; ?>"><?php echo $topic->title; ?></a>
                </h3>
                <p class="card-text mb-auto"><?php echo getExcerpt($topic->description); ?></p>
            </div>
            <div class="card-img-right flex-auto d-none px-2 d-md-block bg-light" style="width: 200px; min-width:80px; height: 250px;">
                <img src="./assets/img/faces/joe-gardner-2.jpg" class="img-circle img-no-padding img-responsive" alt="Rounded Image">
                <div class="my-1 mx-auto text-muted">2014<i class="nc-icon nc-single-02 ml-1"></i></div>
                <div class="mb-1 mx-auto text-muted">18:05 07-06-2018<i class="nc-icon nc-watch-time ml-1"></i></div>
            </div>
        </div>

        <?php endforeach; ?>

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

