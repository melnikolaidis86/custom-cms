<?php

    //Require main file that includes all classes and functions 
    require_once './system/init.php';

    //Require models
    require_once './system/models/user.php';

    //Create classes and models
    $user = new User();
    $validate = new Validation();

    if(isset($_POST['register'])) {

        $data = array();
        $data['full_name'] = $_POST['full_name'];
        $data['username'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        $data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $data['confirm_password'] = $_POST['confirm_password'];

        //Required fields
        $field_array = array('full_name', 'username', 'email', 'password');

        //Run validation checks
        if($validate->isRequired($field_array)) {

            if($validate->isValidEmail($data['email'])) {

                if($validate->passwordsMatch($data['password'], $data['confirm_password'])) {

                    //Upload Avatar image
                    if($_POST['avatar']) {

                        if($user->uploadAvatar()) {
                            $data['avatar'] = $_FILES['avatar']['name'];
                        }
                    } else {

                        $data['avatar'] = 'placeholder.jpg';
                    }

                    //Register User
                    if($user->register($data)) {
                        redirect(BASE_URI, 'Thank you for your registration, you can low log in!');
                    } else {
                        redirect('./register.php', 'Something went wrong with registration', 'error');
                    }

                } else {

                    redirect('./register.php', 'Your passwords did not match'. 'error');
                } 
            } else {

                redirect('./register.php', 'Please, enter a valid email address', 'error');
            }
        } else {

            redirect('./register.php', 'Please, fill all the required fields and try again', 'error');
        }
    }

    //Init template class
    $template = new Template('./templates/register.php');

    //Set template variables
    $template->title = 'REGISTER';

    //Displaying template
    echo $template;