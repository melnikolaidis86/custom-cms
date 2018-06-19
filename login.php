<?php

    //Require main file that includes all classes and functions 
    require_once './system/init.php';

    //Init template class
    $template = new Template('./templates/login.php');

    //Set template variables
    $template->title = 'LOG IN';

    //Displaying template
    echo $template;