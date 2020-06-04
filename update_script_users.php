<?php
// Maak contact met de mysqlserver en database
    include ("./connect_db.php");

    include("./functions.php");

    $id = $_POST["id"];
    $username = sanitize($_POST["username"]);
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);
    $handteken = sanitize($_POST["handteken"]);
    $nationaliteit = sanitize($_POST["nationaliteit"]);

    $sql = "UPDATE `users` 
                SET `username` = '$username', 
                    `email` = '$email', 
                    `password` = '$password',
                    `handteken` = '$handteken',
                    `nationaliteit` = '$nationaliteit'  
            WHERE `id` = $id;";

    mysqli_query($conn, $sql);

    header("Location: ./index.php?content=users")
?>