<?php
// Maak contact met de mysqlserver en database
    include ("./connect_db.php");

    include("./functions.php");

    $id = $_POST["id"];
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);
    $handteken = sanitize($_POST["handteken"]);
    $userrole = sanitize($_POST["userrole"]);

    $sql = "UPDATE `users` 
                    `email` = '$email', 
                    `password` = '$password',
                    `handteken` = '$handteken',
                    `userrole` = '$userrole'  
            WHERE `id` = $id;";

    mysqli_query($conn, $sql);

    header("Location: ./index.php?content=users")
?>