<?php

    //Require main file that includes all classes and functions
    require_once './system/init.php';

    //Require models
    require_once './system/models/topic.php';

    //Checking if user is logged in
    if(!isset($_POST['user_id']))  {

        redirect(BASE_URI);
    } else {

        //Intasiate models
        $topic = new Topic();

        if(isset($_POST['newTopic'])) {

            $data = array();

            $newCategory= $_POST['newCategory'];

            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['topic'];
            $data['user_id'] = $_SESSION['user_id'];

            //Check if a new category has to be created and return the new category id
            if(isset($newCategory) && $newCategory != '') {

                if($newCategoryId = $topic->create_new_category($newCategory)) {
            
                    $data['category_id'] = $newCategoryId;
                }
            } else {

                $data['category_id'] = $_POST['category'];
            }

            //Create new topic
            if($topic->create_new_topic($data)) {
                redirect(BASE_URI, 'Your topic is now published. Thank you!');
            } else {
                redirect('./create.php', 'Something went wrong. Please try again', 'error');
            }
        }
    }

    //Init template class
    $template = new Template('./templates/create.php');

    //Set template variables
    $template->title = 'SAE FORUM';
    
    //Displaying template
    echo $template;