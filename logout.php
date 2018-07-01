<?php

    //Require main file that includes all classes and functions
    require_once './system/init.php';
    
    if(isset($_POST['logout'])) {

        unset($_SESSION['user_id']);
        session_destroy();
    }
