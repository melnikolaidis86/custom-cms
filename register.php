<?php

    //Require main file that includes all classes and functions 
    require_once './system/init.php';

    //Init template class
    $template = new Template('./templates/register.php');

    //Set template variables
    $template->title = 'REGISTER';

    //Displaying template
    echo $template;