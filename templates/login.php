<?php include './includes/header.php'; ?>

    <div class="page-header" style="background-image: url('./assets/img/login-image.jpg');">
        <div class="filter"></div>
        <div class="container">            
            <div class="row">
                <div class="col-lg-4 ml-auto mr-auto">
                    <div class="card card-register">
                        <!-- div to display the error message and the error message type -->
                        <?php displayMessage(); ?>
                        <h3 class="title">Welcome</h3>
                        <form class="register-form" method="post" action="<?php echo BASE_URI . 'login.php'; ?>">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">

                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <button type="submit" name="log_in" class="btn btn-danger btn-block btn-round">Log in</button>
                        </form>
                        <div class="forgot">
                            <a href="#" class="btn btn-link btn-danger">Forgot password?</a>
                        </div>
                        <div class="forgot">
                            <a href="<?php echo BASE_URI . 'register.php'; ?>" class="btn btn-link btn-dark">Not a member? Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include './includes/footer.php'; ?>
