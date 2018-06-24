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

        public function get_topics($category_id)
        {
            $topics = $this->db->select("SELECT topics.id, topics.title, topics.description, topics.created_at, categories.category_name, 
                                        users.user_id, users.full_name, users.image FROM topics 
                                        INNER JOIN categories on topics.category_id = categories.category_id
                                        INNER JOIN users on topics.user_id = users.user_id
                                        WHERE categories.category_id = {$category_id}
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

    }