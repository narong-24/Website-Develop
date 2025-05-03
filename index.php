<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        
    // Create connection
  
    

        if(isset($_POST) && !empty($_POST)){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $full_name = $fname." ".$lname;
            $gender =$_POST['gender'];
            $age =$_POST['age'];
        
            try {
                $conn = new PDO("mysql:host=$servername;dbname=my_db", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO tbl_student(student_name, student_gender,student_age)VALUES('".$full_name."', '".$gender."', '".$age."')";
                $conn->exec($sql);
                echo "Inserted successfully";
            } catch(PDOException $e) {
                echo $sql.'<br>'.$e->getMessage();
        
            }
        }
    ?>
    <form action="" method="post">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <label for="age">Age:</label><br>
        <input type="text" id="age" name="age"><br><br>
        <select name="cars" id="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
        <input type="submit" value="Submit">
    </form> 

    <script>
         
    </script>
</body>
</html>
