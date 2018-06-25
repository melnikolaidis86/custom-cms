<?php

    //A custom redirect function
    function redirect($page = false, $message = null, $message_type = null) {

        if(is_string($page)) {
            $location = $page;
        } else {
            $location = $_SERVER['SCRIPT_NAME'];
        }

        //Check for message
        if($message != null) {
            //Set message
            $_SESSION['message'] = $message;
        }

        //Check message type
        if($message_type != null) {
            //Set messate type
            $_SESSION['message_type'] = $message_type;
        }

        //Redirect
        header('Location: ' . $location);
        exit();
    }

    //A custom function to display Session Messages
    function displayMessage() {

        if(!empty($_SESSION['message'])) {

            //Assign message var
            $message = $_SESSION['message'];

            if(!empty($_SESSION['message_type'])) {

                //Assign Type Var
                $message_type = $_SESSION['message_type'];
                
                //Create output
                if($message_type == 'error') {
                    echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">' . $message . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                } else {
                    echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">' . $message . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                }
            }

            //Unset Message
            unset($_SESSION['message']);
            unset($_SESSION['messate_type']);
        } else {

            echo '';
        }
    }