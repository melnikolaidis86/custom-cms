<?php include './includes/header.php'; ?>

    <div class="page-header" style="background-image: url('./assets/img/login-image.jpg');">
        <div class="filter"></div>
        <div class="container">            
            <div class="row">
                <div class="col-lg-4 ml-auto mr-auto">
                    <div class="card card-register">
                        <!-- div to display the error message and the error message type -->
                        <?php displayMessage(); ?>
                        <h3 class="title text-dark">Recover Password</h3>
                        <form class="register-form" method="post" action="<?php echo BASE_URI . 'recover.php'; ?>">
                            <label>Enter your e-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">

                            <button type="submit" name="recover" class="btn btn-dark btn-block btn-round">Send Verification E-mail</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include './includes/footer.php'; ?>
