<?php

    class Topic 
    {
        private $db;

        public function __construct()
        {
            $this->db = (new PDOClient(DB_DRIVER, DB_HOST, DB_NAME, DB_USER, DB_PASSWORD, DB_ENCODE))->connect();
        }

        public function get_all_topics()
        {
           $topics = $this->db->select('SELECT * FROM topics 
                                        INNER JOIN categories on topics.category_id = categories.id
                                        ORDER BY created_at DESC')->get();

           return $topics;
        }

        public function get_all_categories()
        {

            $categories = $this->db->select('SELECT * FROM categories')->get();

            return $categories;
        }

    }