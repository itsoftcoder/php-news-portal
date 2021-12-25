<?php

class Database
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "news";

    public $conn = false;

    public function __construct()
    {
        $this->conn = $this->connected();
    }


    public function connected()
    {
        try {
            return mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }
}


// $database = new Database;

// class Query extends Database{

//     public function table($table){
//         $sql = "CREATE TABLE $table (
//             id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//             firstname VARCHAR(30) NOT NULL,
//             username VARCHAR(30) NOT NULL,
//             email VARCHAR(50),
//             reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//             )";
            
//             if (mysqli_query($this->conn, $sql)) {
//               echo "Table $table created successfully";
//             } else {
//               echo "Error creating table: " . mysqli_error($this->conn);
//             }
            
//             mysqli_close($this->conn);
//     }
// }

// $query = new Query();

// $query->table('users');


