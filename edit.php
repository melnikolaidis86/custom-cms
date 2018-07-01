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

        if($topic->get_topic($topic_id)->user_id != $_SESSION['user_id']) {

            redirect(BASE_URI); //Redirect if current topic doesn't belong to user logged in
        }

         //Displaying template
        echo $template;
    }

    if(isset($_POST['editTopic'])) {

        $newCategory= $_POST['newCategory'];

        $data['title'] = $_POST['title'];
        $data['description'] = $_POST['topic'];
        $data['user_id'] = $_POST['user_id'];
        $data['id'] = $_POST['topic_id'];

        //Check if a new category has to be created and return the new category id
        if(isset($newCategory) && $newCategory != '') {

            if($newCategoryId = $topic->create_new_category($newCategory)) {
        
                $data['category_id'] = $newCategoryId;
            }
        } else {

            $data['category_id'] = $_POST['category'];
        }

        //Edit topic
        if($topic->update_topic($data)) {
            redirect(BASE_URI, 'Your topic is now published. Thank you!');
        } else {
            redirect('./create.php', 'Something went wrong. Please try again', 'error');
        }
    }
    
    if(isset($_POST['deleteTopic'])) {

        $topic_id = $_POST['topicId'];
        $user_id = $_POST['userId'];

        //Delete Comment
        $topic->delete_topic($topic_id, $user_id);

        redirect(BASE_URI);
    }

