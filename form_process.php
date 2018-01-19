<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_POST['submit'])) {

    $name = ["Miguel", "Maria", "Steph", "Grant", "Max"];
    $min = 5;
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $min) {
        echo "Username has to be longer than five";
    }

    if(!in_array($username, $name)) {
        echo "Unauthorized";
    } else {
        echo "Welcome";
    }
}

?>
    
</body>
</html>