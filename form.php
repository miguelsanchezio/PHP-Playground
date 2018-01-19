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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="POST">
    <input type="text" name="username" placeholder"username">
    <input type="password" name="password" placeholder"password">
    <input type="submit" name="submit">
</form>
    
</body>
</html>