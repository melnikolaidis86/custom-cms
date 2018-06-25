<?php

    //Require main file that includes all classes and functions 
    require_once './system/init.php';
    
    //Require models
    require_once './system/models/user.php';

    //Creating instance of the User model class
    $user = new User();

    //Init template class
    $template = new Template('./templates/login.php');

    //Set template variables
    $template->title = 'LOG IN';

    //Authentication user and allow login if authentication is successful
    if(isset($_POST['log_in'])) {

        $user_id = $user->authenticate_user($_POST['email'], $_POST['password']);

        if($user_id) {

            $_SESSION['user_id'] = $user_id;

            redirect(BASE_URI);
        } else {

            redirect(BASE_URI . 'login.php', 'Username or password does not belong to valid user. Please check your credentials' , 'error');

        }
    
    }   

    //Displaying template
    echo $template;