<?php

class DBClassModel
{
    protected $conn;

    public function db(){
        $this->conn = new mysqli('localhost', 'myuser', '123', 'webdev');
        return $this->conn;
    }
}