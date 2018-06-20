<?php

    //Require main file that includes all classes and functions
    require_once './system/init.php';

    //Require models
    require_once './system/models/topic.php';

    //Intasiate models
    $topic = new Topic();

    //Init template class
    $template = new Template('./templates/front-page.php');

    //Set template variables
    $template->title = 'SAE FORUM';
    $template->topics = $topic->get_all_topics();
    $template->categories = $topic->get_all_categories();

    //Displaying template
    echo $template;


