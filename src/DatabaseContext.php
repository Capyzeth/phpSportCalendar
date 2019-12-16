<?php


namespace DBC;

//... handles the connection to the database
class DatabaseContext
{
    private $connection = null;

    public function openConnection(){
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPw = "";
        $dbName = "sporteventdatabase";
        $this -> connection = mysqli_connect($dbServername, $dbUsername, $dbPw, $dbName);
        return $this -> connection;
    }

    public function closeConnection(){
        $this -> connection -> close();
        $this -> connection = null;
    }

}