<?php

class Db {
    var $connection;

    function Db($config) {
        $this->connection = mysqli_connect("localhost", $config->username, $config->password);

        if (!$this->connection) {
            die("database problem");
        }

        mysqli_select_db($this->connection, $config->database);
        mysqli_query($this->connection, "set names utf8");

    }

    function query($query) {
        $result = mysqli_query($this->connection, $query);

        if (!$result) {
            die("query problem");
        }

        return $result;
    }

    function fetch_row($result) {
        return mysqli_fetch_assoc($result);
    }
}

?>