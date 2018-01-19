<?php

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password =  $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');
    if($connection) {
        echo 'We are connected';
    } else {
        die("Database connection failed");
    }

    // if($username && $password) {
    //     echo $username . " " . $password;
    // } else {
    //     echo "Fields cannot be blank";
    // }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" name="submit">
            </form>
        </div>
    </div>
    
</body>
</html>