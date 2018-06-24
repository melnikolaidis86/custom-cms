<?php

    class User extends Connection

    {
        public function get_user($user_id) 
        {
            $this->db->query("SELECT * FROM users WHERE users.user_id = {$user_id}");

            $user = $this->db->single();

            return $user;
        }

        public function get_user_topics_count($user_id) 
        {
            $this->db->query("SELECT topics.id FROM users
                            INNER JOIN topics ON topics.user_id = users.user_id
                            WHERE users.user_id = {$user_id}");

            $topics_count = $this->db->rowCount();

            return $topics_count;

        }

        public function get_user_comments_count($user_id) 
        {
            $this->db->query("SELECT comments.comment_id FROM users
                            INNER JOIN comments ON comments.user_id = users.user_id
                            WHERE users.user_id = {$user_id}");

            $topics_count = $this->db->rowCount();

            return $topics_count;

        }

        public function authenticate_user($username, $password) 
        {
            $this->db->query("SELECT users.user_id, users.username, users.email, users.password FROM users
                                WHERE users.username = '{$username}' OR users.email = '{$username}'");
    
            $user = $this->db->single();
    
            if($password == $user->password) {
    
                return $user->user_id;
            } else {
    
                return false;
            }
    
        }
    }