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

    //Checking to display posts if category id exists
    if(isset($_GET['category'])) {

        $category_id = $_GET['category'];

        $template->topics = $topic->get_topics_per_category($category_id);
        $template->page_title = $topic->get_category_name($category_id)->category_name;

    } else if(isset($_GET['user'])) {

        $user = urldecode($_GET['user']);
        
        $template->topics = $topic->get_topics_per_user($user);
        $template->page_title = $user;

    } else {

        $template->topics = $topic->get_all_topics();
        $template->page_title = 'ALL TOPICS';
    }

    //Displaying template
    echo $template;





