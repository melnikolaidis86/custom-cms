<?php

    //Require main file that includes all classes and functions
    require_once './system/init.php';

    //Require models
    require_once './system/models/topic.php';

    //Intasiate models
    $topic = new Topic();

    //Init template class
    $template = new Template('./templates/edit.php');

    //Set template variables
    $template->title = 'SAE FORUM';

    if(isset($_GET['id'])) {

        $topic_id = $_GET['id'];

        $template->topic = $topic->get_topic($topic_id);

    } else {

        redirect(BASE_URI);
    }

    //Displaying template
    echo $template;