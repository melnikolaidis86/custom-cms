<?php include './includes/header.php'; ?>

    <div class="page-header" style="background-image: url('./assets/img/login-image.jpg');">
        <div class="filter"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ml-auto mr-auto">
                    <div class="card card-register">
                        <h3 class="title">Welcome</h3>
                        <form class="register-form">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email">

                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                            <button class="btn btn-danger btn-block btn-round">Log in</button>
                        </form>
                        <div class="forgot">
                            <a href="#" class="btn btn-link btn-danger">Forgot password?</a>
                        </div>
                        <div class="forgot">
                            <a href="#" class="btn btn-link btn-dark">Not a member? Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include './includes/footer.php'; ?>
