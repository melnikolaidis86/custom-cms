<?php

    //Require main file that includes all classes and functions
    require_once './system/init.php';

    //Require models
    require_once './system/models/topic.php';

    //Intasiate models
    $topic = new Topic();
    
    if(isset($_POST['deleteTopic'])) {

        $data['topic_id'] = $_POST['topicId'];
        $data['user_id'] = $_POST['userId'];

        print_r($data);

        //Delete Comment
        $topic->delete_topic($data);

    }

