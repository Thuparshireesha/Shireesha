<?php

include_once('adminpage.php');
 
$conn = "";
  
try {
    $servername = "localhost:3306";
    $dbname = "madhavi";
    $username = "root";
    $password = "";
  
    $conn = new PDO(
        "mysql:host=$servername; dbname=madhavi",
        $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
?>