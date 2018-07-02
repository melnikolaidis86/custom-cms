<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="./assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo $title ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="./assets/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>
	<link href="./assets/css/main.css" rel="stylesheet" />

	<!--     Fonts and icons     -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />

    <script src="./assets/js/ckeditor/ckeditor.js"/></script>

</head>
<body>

    <?php if(isset($no_navigation) && $no_navigation == true)   : ?>


    <?php else : ?>

    <nav class="navbar navbar-expand-md fixed-top navbar-default bg-dark">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand text-warning" href="<?php echo BASE_URI; ?>">SAE Forum</a>
                <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?php echo BASE_URI; ?>" class="nav-link"><i class="nc-icon nc-paper"></i>  Topics</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="modal" data-target="#searchModal" class="nav-link"><i class="nc-icon nc-zoom-split"></i>  Search...</a>
                    </li>

                    <?php if(isset($_SESSION['user_id'])) : ?>

                        <li class="nav-item">
                            <a href="<?php echo BASE_URI; ?>create.php" class="btn btn-info">New Topic</a>
                        </li>
                        <li class="nav-item">
                            <button data-toggle="modal" data-target="#logoutModal" role="button" class="btn btn-warning">Logout</button>
                        </li>

                    <?php else : ?>

                        <li class="nav-item">
                            <a href="<?php echo BASE_URI; ?>login.php" class="btn btn-info">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URI; ?>register.php" class="btn btn-warning">Register</a>
                        </li>

                    <?php endif; ?> 

                </ul>
            </div>
        </div>
    </nav>

    <?php endif; ?>

    
    <div class="wrapper">