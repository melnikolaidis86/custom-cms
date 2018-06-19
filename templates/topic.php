<?php include './includes/header.php'; ?>

<div style="background-image: url('./assets/img/daniel-olahh.jpg'); background-position: center; background-size: cover; height: 350px;">
    <div class="filter"></div>

</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
        <h3 class="mb-3 font-italic bg-light py-3 text-center">
            Featured Topic
        </h3>

        <hr>

        <div class="card flex-md-row mt-3 mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-info">World</strong>
                <h3 class="mb-3">
                    <a class="text-dark" href="#">Featured post</a>
                </h3>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-img-right flex-auto d-none px-2 d-md-block bg-light" style="width: 200px; height: 250px;">
                <img src="./assets/img/faces/joe-gardner-2.jpg" class="img-circle img-no-padding img-responsive" alt="Rounded Image">
                <div class="my-1 mx-auto text-muted">2014<i class="nc-icon nc-single-02 ml-1"></i></div>
                <div class="mb-1 mx-auto text-muted">18:05 07-06-2018<i class="nc-icon nc-watch-time ml-1"></i></div>
            </div>
        </div>

        <div class="card flex-md-row mt-3 mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <h3 class="mb-3">
                    <a class="text-dark" href="#">Meletis Nikolaidis</a>
                </h3>
                <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, explicabo recusandae? Voluptates repudiandae maiores iusto?</p>
            </div>
            <div class="card-img-right flex-auto d-none px-2 d-md-block bg-light" style="width: 200px; height: 250px;">
                <img src="./assets/img/faces/joe-gardner-2.jpg" class="img-circle img-no-padding img-responsive" alt="Rounded Image">
                <div class="mb-1 mx-auto text-muted">18:05 07-06-2018<i class="nc-icon nc-watch-time ml-1"></i></div>
            </div>
        </div>

        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <h3 class="mb-3">
                    <a class="text-dark" href="#">Maria Griela</a>
                </h3>
                <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, explicabo recusandae? Voluptates repudiandae maiores iusto?</p>
            </div>
            <div class="card-img-right flex-auto d-none px-2 d-md-block bg-light" style="width: 200px; height: 250px;">
                <img src="./assets/img/faces/clem-onojeghuo-3.jpg" class="img-circle img-no-padding img-responsive" alt="Rounded Image">
                <div class="mb-1 mx-auto text-muted">18:05 07-06-2018<i class="nc-icon nc-watch-time ml-1"></i></div>
            </div>
        </div>

        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <h3 class="mb-3">
                    <a class="text-dark" href="#">Maria Griela</a>
                </h3>
                <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, explicabo recusandae? Voluptates repudiandae maiores iusto?</p>
            </div>
            <div class="card-img-right flex-auto d-none px-2 d-md-block bg-light" style="width: 200px; height: 250px;">
                <img src="./assets/img/faces/clem-onojeghuo-3.jpg" class="img-circle img-no-padding img-responsive" alt="Rounded Image">
                <div class="mb-1 mx-auto text-muted">18:05 07-06-2018<i class="nc-icon nc-watch-time ml-1"></i></div>
            </div>
        </div>


        <h3 class="mb-3 font-italic bg-light py-3 text-center">
            Leave a reply
        </h3>

        <div class="form-group">
            <textarea class="form-control" name="ckEditor" id="ckEditor" rows="10" cols="80"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-outline-info my-3 d-block ml-auto">Submit your reply</button>
        </div>

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