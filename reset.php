<?php 

//Require main file that includes all classes and functions 
require_once './system/init.php';

//Require models
require_once './system/models/user.php';

//Creating instance of the User model class
$user = new User();
$validate = new Validation();

//Get template and assign variables
$template = new Template('templates/reset.php');

//Assign variables
$template->title = "Reset Password";
$template->no_navigation = true;

if(isset($_GET['recovery'])) {

    $recovery_hash = urldecode($_GET['recovery']);

    if($user_valid = $user->validate_user($recovery_hash)) {

        $template->user_id = $user_valid->user_id;
        $template->recovery_hash = $recovery_hash;

        echo $template;

    } else {

        redirect(BASE_URI);
    }

}

if(isset($_POST['reset'])) {

    $data = array();

    $data['user_id'] = $_POST['user_id'];
    $data['password'] = $_POST['password'];
    $data['confirm_password'] = $_POST['confirm_password'];

    $recovery_hash = $_POST['recovery_hash'];


    if($validate->passwordsMatch($data['password'], $data['confirm_password'])) {

        $user->update_password($data);
        $user->clear_recovery_hash($data);

        redirect(BASE_URI, 'Your password is updated successfully!');

    } else {

        redirect('./reset.php?recovery=' . $recovery_hash , 'Your passwords did not match'. 'error');
    }
}





