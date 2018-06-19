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