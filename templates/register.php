<?php include './includes/header.php'; ?>

<div class="page-header" style="background-image: url('./assets/img/login-image.jpg');">
    <div class="filter"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 ml-auto mr-auto">
                <div class="card card-register">
                    <h3 class="title">Register</h3>
                    <form enctype="multipart/form-data" class="register-form">

                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Full Name">

                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username">

                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email">

                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">

                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm Password">

                        <label>Upload Avatar</label>
                        <input type="file" size="32" name="image_field" value="">

                        <button class="btn btn-danger btn-block btn-round">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './includes/footer.php'; ?>