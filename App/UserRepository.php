<?php

class UserRepository
{
    private $conn;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "test";
        $database = "user_registration";

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function registerUser($username, $email, $password)
    {
        $sqlQuery = "INSERT INTO `users`(`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password')";
        return $this->conn->query($sqlQuery);
    }

    public function loginUser()
    {

    }

    public function getUser()
    {

    }

    public function getUsers()
    {

    }

    public function editUser()
    {

    }

    public function deleteUser()
    {

    }
}
