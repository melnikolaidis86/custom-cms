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

        //Authentication method for log in
        public function authenticate_user($username, $password) 
        {
            $this->db->query("SELECT users.user_id, users.username, users.email, users.password FROM users
                                WHERE users.username = '{$username}' OR users.email = '{$username}'");
    
            $user = $this->db->single();
    
            if(password_verify($password, $user->password)) {
    
                return $user->user_id;
            } else {
    
                return false;
            }
    
        }

        //Register method for new user registration
        public function register($data) {

            //Insert Query
            $this->db->query("INSERT INTO users (full_name, username, email, password, image)
                                VALUES (:full_name, :username, :email, :password, :image)");

            //Bind Values
            $this->db->bind(':full_name', $data['full_name']);
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', password_hash($data['password'], PASSWORD_DEFAULT));
            $this->db->bind(':image', $data['avatar']);

            //Execute
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }

        }

        //Upload Avatar Method
        public function uploadAvatar()
        {
            $allowedExts = array('gif', 'jpeg', 'jpg', 'png');
            $temp = explode('.', $_FILES['avatar']['name']);
            $extension = end($temp);

            if((($_FILES['avatar']['type'] == 'image/gif')
                    || ($_FILES['avatar']['type'] == 'image/jpeg')
                    || ($_FILES['avatar']['type'] == 'image/jpg')
                    || ($_FILES['avatar']['type'] == 'image/pjpeg')
                    || ($_FILES['avatar']['type'] == 'image/x-png')
                    || ($_FILES['avatar']['type'] == 'image/png'))
                    && ($_FILES['avatar']['size'] < 50000)
                    && in_array($extension, $allowedExts)) {

                    if($_FILES['avatar']['error'] > 0) {
                        redirect('./register.php', $_FILES['avatar']['error'], 'error');
                    } else {
                        if(file_exists('./assets/img/faces/' . $_FILES['avatar']['name'])) {
                            redirect('./register.php', 'File already exists', 'error');
                        } else {
                            move_uploaded_file($_FILES['avatar']['tmp_name'], './assets/img/faces/' . $_FILES['avatar']['name']);

                            return true;
                        }
                    }
                        
                } else {
                    redirect('./register.php', 'Invalid File Type', 'error');
                }
        }
    }