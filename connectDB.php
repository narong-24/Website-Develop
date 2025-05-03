<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
    try {
        $conn = new PDO("mysql:host=$servername;dbname=my_db", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO tbl_student(student_name, student_gender,student_age)VALUES('Lucy', 'female',40)";
        $conn->exec($sql);
        echo "Inserted successfully";
    } catch(PDOException $e) {
        echo $sql.'<br>'.$e->getMessage();

    }
    $conn = null;

?>