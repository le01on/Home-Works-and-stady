<?php

class PDOConnection
{
    public static function getPDO()
    {
        $host = 'mysql:host=localhost;dbname=courses_db';
        $user = 'root';
        $pass = 'password';
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES\'UTF8\''
        ];
        return new PDO($host, $user, $pass, $options);
    }
}
