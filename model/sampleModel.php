<?php
// This is a Sample Model

class Sample
{
    var $conn;

    public function setDB($conn)
    {
        $this->conn = $conn; //Variable Example
    }

    public function getSomething($userId) // Example DB request
    {
        $records = $this->conn->prepare('SELECT something FROM somewhere WHERE id = :id');
        $records->bindParam(':id', $userId);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        if (count($results) > 0) {
            return $results;
        } else {
            return "Error";
        }
    }

    public function sayHi() //Example Function
    {
        return "Hello World";
    }
}

global $app;
$app = new Sample(); //Creating the "app" variable to pass it into controller