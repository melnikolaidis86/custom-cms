<?php

    //Require main file that includes all classes and functions
    require_once './system/init.php';

    //Require models
    require_once './system/models/comment.php';

    //Intasiate models
    $comment = new Comment();

    if(isset($_POST['new_comment'])) {

        $data = array();

        $data['post_id'] = $_POST['topic_id'];
        $data['user_id'] = $_SESSION['user_id'];
        $data['text'] = $_POST['comment'];

        //Create Comment
        if($comment->create_comment($data)) {
            redirect(BASE_URI . 'topic?id=' . $data['post_id']);
        } 

    }

    if(isset($_POST['editComment'])) {

        $commnet_id = $_POST['commentId'];
        $comment_text = $_POST['commentText'];

        //Edit Comment
        $comment->update_comment($commnet_id, $comment_text);
        
    }
    
    if(isset($_POST['deleteComment'])) {

        $commnet_id = $_POST['commentId'];

        //Delete Comment
        $comment->delete_comment($commnet_id);
        
    }