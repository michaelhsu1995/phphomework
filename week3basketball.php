<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php

    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $birth = $_POST["birth"];
    $course = $_POST["course"];
    $pmeter = $_POST["pmeter"];
    $tmeter = $_POST["tmeter"];
    $sport = $_POST["sport"];
    
    echo $name;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $birth;
    echo "<br>";
    echo $course;
    echo "<br>";
    echo $pmeter;
    echo "<br>";
    echo $tmeter;
    echo "<br>";
    

    ?>
</body>
</html>
