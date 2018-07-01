<?php include './includes/header.php'; ?>

    <div class="page-header" style="background-image: url('./assets/img/login-image.jpg');">
        <div class="filter"></div>
        <div class="container">            
            <div class="row">
                <div class="col-lg-4 ml-auto mr-auto">
                    <div class="card card-register">
                        <!-- div to display the error message and the error message type -->
                        <?php displayMessage(); ?>
                        <h3 class="title text-dark">Reset Password</h3>
                        <form class="register-form" method="post" action="<?php echo BASE_URI . 'reset.php'; ?>">
                            <label>Enter your password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <label>Confirm your password</label>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                            <input type="hidden" name="recovery_hash" value="<?php echo $recovery_hash; ?>">

                            <button type="submit" name="reset" class="btn btn-dark btn-block btn-round">Reset Your Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include './includes/footer.php'; ?>
