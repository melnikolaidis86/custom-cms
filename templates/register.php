<?php include './includes/header.php'; ?>

<div class="page-header" style="background-image: url('./assets/img/login-image.jpg');">
    <div class="filter"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 ml-auto mr-auto">
                <div class="card card-register">
                <!-- div to display the error message and the error message type -->
                <?php displayMessage(); ?>
                    <h3 class="title">Register</h3>
                    <form enctype="multipart/form-data" method="post" action="<?php echo BASE_URI . 'register.php'; ?>" class="register-form">

                        <label>Full Name</label>
                        <input type="text" name="full_name" class="form-control" placeholder="Full Name">

                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">

                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">

                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">

                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">

                        <label>Upload Avatar</label>
                        <input type="file" size="32" name="avatar" value="">

                        <button type="submit" name="register" class="btn btn-danger btn-block btn-round">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './includes/footer.php'; ?>