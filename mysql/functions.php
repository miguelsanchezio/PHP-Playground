<?php include "db.php"; ?>

<?php

function createRows() {
    if(isset($_POST['submit'])) {
        global $connection;

        $username = $_POST['username'];
        $password =  $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $hashFormat = "$2y$10$";
        $salt = "83cd913dc13cb319d1b391nd191398db193";
        $hash_and_salt = $hashFormat . $salt;
        $password = crypt($password, $hash_and_salt);

        $query = "INSERT INTO user(username, password) ";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query failed" . mysqli_error());
        } else {
            echo "Record created";
        }
    }
}

function readRows() {
    global $connection;
    
    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query failed" . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}

function showAllData() {
    global $connection;
    
    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query failed" . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];

        echo "<option value='$id'>$id</option>";
    }
}

function updateTable() {
    if(isset($_POST['submit'])) { 
        global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE user SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("Query failed" . mysqli_error($connection));
        } else {
            echo "Record updated";
        }
    }
}

function deleteRows() {
    if(isset($_POST['submit'])) {
        global $connection;
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM user ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("Query failed. " . mysqli_error($connection));
        } else {
            echo "Record deleted";
        }
    }
}

?>