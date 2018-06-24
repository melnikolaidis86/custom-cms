<?php

    abstract class Connection {

        protected  $db;

        public function __construct()
        {
            $this->db = (new PDOClient(DB_DRIVER, DB_HOST, DB_NAME, DB_USER, DB_PASSWORD, DB_ENCODE))->connect();
        }

    }