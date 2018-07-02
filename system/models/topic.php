<?php

    class Topic extends Connection
    {

        public function get_all_topics()
        {
           $topics = $this->db->select('SELECT topics.id, topics.title, topics.description, topics.created_at, categories.category_name, 
                                        users.user_id, users.full_name, users.image FROM topics 
                                        INNER JOIN categories on topics.category_id = categories.category_id
                                        INNER JOIN users on topics.user_id = users.user_id
                                        ORDER BY topics.created_at DESC')->get();

           return $topics;
        }

        public function get_topics_per_category($category_id)
        {
            $topics = $this->db->select("SELECT topics.id, topics.title, topics.description, topics.created_at, categories.category_name, 
                                        users.user_id, users.full_name, users.image FROM topics 
                                        INNER JOIN categories on topics.category_id = categories.category_id
                                        INNER JOIN users on topics.user_id = users.user_id
                                        WHERE categories.category_id = {$category_id}
                                        ORDER BY created_at DESC")->get();

            return $topics;
        }
  
        public function get_topics_per_user($user)
        {
            $topics = $this->db->select("SELECT topics.id, topics.title, topics.description, topics.created_at, categories.category_name, 
                                        users.user_id, users.full_name, users.image FROM topics 
                                        INNER JOIN categories on topics.category_id = categories.category_id
                                        INNER JOIN users on topics.user_id = users.user_id
                                        WHERE users.full_name = '{$user}'
                                        ORDER BY created_at DESC")->get();

            return $topics;
        }

        public function get_topic($topic_id)
        {
            $this->db->query("SELECT topics.id, topics.title, topics.description, topics.created_at, categories.category_name, 
                            categories.category_id, users.user_id, users.full_name, users.image FROM topics 
                            INNER JOIN categories on topics.category_id = categories.category_id
                            INNER JOIN users on topics.user_id = users.user_id
                            WHERE topics.id = {$topic_id}");

            $topic = $this->db->single();

            return $topic;
        }

        public function get_topic_comments($topic_id)
        {
            $comments = $this->db->select("SELECT comments.*, topics.user_id, users.user_id, users.image,
                                    users.full_name FROM comments
                                    INNER JOIN topics ON comments.post_id = topics.id
                                    INNER JOIN users ON users.user_id = comments.user_id
                                    WHERE topics.id = {$topic_id}")->get();

            return $comments;
        }

        public function get_category_name($category_id)
        {
            $this->db->query("SELECT category_name FROM categories
                            WHERE categories.category_id = {$category_id}");

            $category_name = $this->db->single();

            return $category_name;
        }

        public function get_user_name($user_id)
        {
            $this->db->query("SELECT full_name FROM users
                            WHERE users.user_id = {$user_id}");

            $username = $this->db->single();

            return $username;
        }

        public function create_new_topic($data) 
        {
            //Insert Query
            $this->db->query("INSERT INTO topics (user_id, category_id, title, description) 
                            VALUES (:user_id, :category_id, :title, :description)");

            //Bind Values
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':description', $data['description']);

            //Execute
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }

        }

        public function update_topic($data) 
        {
            //Update Query
            $this->db->query("UPDATE topics
                            SET category_id = :category_id,
                                title = :title,
                                description = :description
                            WHERE id = :id AND user_id = :user_id");

            //Bind Values
            $this->db->bind(':id', $data['id']);
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':description', $data['description']);

            //Execute
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }

        }

        public function delete_topic($data)
        {
            //Delete Query
            $this->db->query("DELETE `topics` FROM `topics` 
                            INNER JOIN comments ON comments.user_id = topics.user_id
                            WHERE id = :id AND topics.user_id = :user_id");

            //Bind Values
            $this->db->bind(':id', $data['topic_id']);
            $this->db->bind(':user_id', $data['user_id']);

            //Execute
            if($this->db->execute()) {
                return $this->db->lastInsertId();
            } else {
                return false;
            }
        }

        public function create_new_category($category) 
        {
            //Insert Query
            $this->db->query("INSERT INTO categories (category_name) VALUES (:category)");

            //Bind Values
            $this->db->bind(':category', $category);

            //Execute
            if($this->db->execute()) {
                return $this->db->lastInsertId();
            } else {
                return false;
            }
        } 

        public function search_for_posts($search)
        {
             //Select query
             $this->db->query("SELECT topics.id, topics.title, categories.category_name from topics 
                        INNER JOIN categories on topics.category_id = categories.category_id
                        WHERE topics.title LIKE :search
                        GROUP BY topics.title
                        ORDER By topics.title DESC");

             //Wildcard string
             $wildcard = "%$search%";

             //Bind Values
             $this->db->bind(':search', $wildcard);

             //Execute
             $result = $this->db->resultset();

             return $result;

        }

    }