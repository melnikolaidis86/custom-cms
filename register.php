<?php

    //Require main file that includes all classes and functions 
    require_once './system/init.php';

    //Require models
    require_once './system/models/user.php';

    //Intasiate models
    $user = new User();

    if(isset($_POST['register'])) {

        $data = array();
        $data['full_name'] = $_POST['full_name'];
        $data['username'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        $data['confirm_password'] = $_POST['confirm_password'];

        //Upload Avatar Image
        if($user->uploadAvatar()){
            $data['avatar'] = $_FILES['avatar']['name'];
        } else {
            $data['avatar'] = 'placeholder.jpg';
        }

        //Register User
        if($user->register($data)) {
            redirect(BASE_URI, 'Thank you for your registration, you can low log in!');
        } else {
            redirect('./register.php', 'Something went wrong with registration', 'error');
        }

    }

    //Init template class
    $template = new Template('./templates/register.php');

    //Set template variables
    $template->title = 'REGISTER';

    //Displaying template
    echo $template;