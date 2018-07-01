<?php
 
    function count_comments($topic_id)
    {
        $connection = (new MySQLiClient(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD))->connect();

        $comments_count = $connection->select("SELECT comments.comment_id as comments_count FROM `comments`
                                            INNER JOIN topics on comments.post_id = topics.id
                                            WHERE topics.id = {$topic_id}")->rowCount();

        return $comments_count;
    }

    function get_all_categories()
    {
        $connection = (new MySQLiClient(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD))->connect();

        $categories = $connection->select("SELECT categories.*, count(topics.id) as topics_count FROM categories 
                                        LEFT JOIN topics ON topics.category_id = categories.category_id
                                        GROUP BY category_id
                                        ORDER BY topics_count DESC
                                        LIMIT 5")->get();

        return $categories;
    }

    function get_popular_users()
    {
        $connection = (new MySQLiClient(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD))->connect();

        $users = $connection->select("SELECT users.*, count(topics.id) AS topics_count FROM users
                                LEFT JOIN topics ON users.user_id = topics.user_id
                                GROUP BY users.username
                                ORDER BY topics_count DESC
                                LIMIT 5")->get();

        return $users;

    }

    


