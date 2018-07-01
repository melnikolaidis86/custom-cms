<?php

    class comment extends Connection
    {
        public function create_comment($data) 
        {
            //Insert Query
            $this->db->query("INSERT INTO comments (post_id, user_id, text) 
                            VALUES (:post_id, :user_id, :text)");

            //Bind Values
            $this->db->bind(':post_id', $data['post_id']);
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':text', $data['text']);

            //Execute
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function update_comment($comment_id, $text)
        {
           //Insert Query
            $this->db->query("UPDATE comments 
                            SET text = :text  
                            WHERE comment_id = :comment_id");

            //Bind Values
            $this->db->bind(':text', $text);
            $this->db->bind(':comment_id', $comment_id);

            //Execute
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function delete_comment($comment_id)
        {
           //Insert Query
            $this->db->query("DELETE FROM comments WHERE comment_id = :comment_id");

            //Bind Values
            $this->db->bind(':comment_id', $comment_id);

            //Execute
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }