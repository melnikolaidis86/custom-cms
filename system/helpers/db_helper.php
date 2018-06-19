<?php
 
    //Function to fetch all categories
    function get_all_categories() {

        //Calling a connection with database through the mysliClient
        $mysqli = (new MySQLiClient(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD))->connect();

        //Setting charset to UTF8 through the connection with the database
        $mysqli_connection = $mysqli->getConnection();
        mysqli_set_charset($mysqli_connection, DB_ENCODE);
        
        return $mysqli->select("SELECT * FROM categories")->get();
    }

    //Function to fetch a specific category
    // function get_the_category_by_id($category_id) {

    //     //Calling a connection with database through the mysliClient
    //     $mysqli = (new MySQLiClient(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD))->connect();

    //     //Setting charset to UTF8 through the connection with the database
    //     $mysqli_connection = $mysqli->getConnection();
    //     mysqli_set_charset($mysqli_connection, DB_ENCODE);
        
    //     return $mysqli->select("SELECT * FROM categories
    //                                 WHERE categories.id = {$category_id}")->get();
    // }