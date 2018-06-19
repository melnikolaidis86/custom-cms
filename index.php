<?php

    //Require main file that includes all classes and functions
    require_once './system/init.php';

    //Init template class
    $template = new Template('./templates/front-page.php');

    //Set template variables
    $template->title = 'SAE FORUM';

    //Displaying template
    echo $template;


