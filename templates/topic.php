<?php include './includes/header.php'; ?>

<div style="background-image: url('./assets/img/daniel-olahh.jpg'); background-position: center; background-size: cover; height: 350px;">
    <div class="filter"></div>

</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
        <h3 class="mb-3 font-italic bg-light py-3 text-center">
            <?php echo $topic->title; ?>
        </h3>

        <hr>

        <div class="row"> 
            <div class="col-md-12">
                <p class="p-3"><?php echo $topic->description; ?></p>
            </div>
            <div class="col-md-4">
                <h4 class="p-3"><a href="<?php echo BASE_URI . '?user='. urlencode($topic->full_name); ?>"><?php echo $topic->full_name; ?></a></h4>
                <a href="<?php echo BASE_URI . '?user='. urlencode($topic->full_name); ?>"><img src="./assets/img/faces/<?php echo $topic->image; ?>" class="img-circle p-4 img-responsive" alt="Rounded Image"></a>
            </div>
            <div class="col-md-8">
                <div class="d-flex justify-content-end align-items-end p-3" style="height: 300px">
                    <div class="description">
                        <p>Posted on: <strong class="ml-3 text-warning"><?php echo formatDate($topic->created_at); ?></strong></p>
                        <p>Category: <a href="<?php echo BASE_URI; ?>?category=<?php echo $topic->category_id; ?>" class="ml-3 text-warning"><?php echo $topic->category_name; ?></a></p>
                        <p>Comments<span class="badge badge-warning text-white ml-3"><?php echo count_comments($topic->id); ?></span></p>

                        <?php if(isset($_SESSION['user_id']) && $topic->user_id == $_SESSION['user_id']) : ?>

                        <div class="editButtons">
                            <a class="btn btn-info text-white mt-2" href="<?php echo BASE_URI . 'edit.php?id=' . $topic->id; ?>" role="button">Edit</a>
                            <a class="btn btn-danger text-white mt-2" data-toggle="modal" data-target="#deleteTopicModal" role="button">Delete</a>
                            <input type="hidden" id="topicId" value="<?php echo $topic->id; ?>">
                            <input type="hidden" id="userId" value="<?php echo $topic->user_id; ?>">
                        </div>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>

        <h3 class="mb-3 font-italic bg-light py-3 text-center">
            Comments
        </h3>

        <hr>

        <?php if($comments) : ?>
            <?php foreach($comments as $comment) : ?>
            
            <div class="card flex-md-row mt-3 mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <h3 class="mb-3">
                        <a class="text-dark" href="<?php echo BASE_URI; ?>?user=<?php echo $comment->user_id; ?>"><?php echo $comment->full_name; ?></a>
                    </h3>
                    <p class="card-text mb-auto"><?php echo $comment->text; ?></p>
                    <p><?php echo formatDate($comment->created_at); ?><i class="nc-icon nc-watch-time ml-1 text-warning"></i></p>
                </div>
                <div class="card-img-right flex-auto d-none px-2 d-md-block bg-light" style="width: 120px; height: 250px;">
                    <img src="./assets/img/faces/<?php echo $comment->image; ?>" class="img-circle img-no-padding img-responsive" alt="Rounded Image">

                    <?php if(isset($_SESSION['user_id']) && $comment->user_id == $_SESSION['user_id']) : ?>

                    <a class="btn btn-warning text-white d-block mt-2" data-toggle="modal" data-target="#editModal" role="button">Edit</a>
                    <a class="btn btn-danger text-white d-block mt-2" data-toggle="modal" data-target="#deleteModal" role="button">Delete</a>
                    <input type="hidden" id="commentId" value="<?php echo $comment->comment_id; ?>">

                    <?php endif; ?>
                </div>
            </div>  

            <?php endforeach; ?>
        <?php else : ?>

            <div class="row">
                <p class="text-muted p-5">There are no comments yet...</p>
            </div>

        <?php endif; ?>


        <?php if(isset($_SESSION['user_id'])) : ?>
            <h3 class="mb-3 font-italic bg-light py-3 text-center">
                Leave a reply
            </h3>

            <form method="post" action="<?php echo BASE_URI; ?>comment.php">
                <div class="form-group">
                    <textarea class="form-control" name="comment" rows="10" cols="80"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="topic_id" value="<?php echo $topic->id; ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-warning my-3 d-block ml-auto" name="new_comment">Submit your reply</button>
                </div>
            </form>

        <?php endif; ?>

        <!-- <div class="row">
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
        </div> -->
    
        </div>

        <?php include './includes/sidebar.php'; ?>

    </div>

</main>

<?php include './includes/footer.php'; ?>