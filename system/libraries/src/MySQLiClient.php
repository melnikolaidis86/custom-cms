<?php

//MySQLiClient class extending the Database class
class MySQLiClient extends Database
{
    //Construct method setting connection params
    public function __construct($host, $db_name, $db_user, $db_password)
    {
        parent::__construct($host, $db_name, $db_user, $db_password);
    }
    
    //Connection Method
    public function connect()
    {
        $this->_handler = new mysqli($this->host, $this->db_user, $this->db_password, $this->db_name);
        return $this;
    }

    //Fetching the query results as an object
    public function get()
    {
        return json_decode(json_encode($this->statement->fetch_all(MYSQLI_ASSOC)));
    }
}