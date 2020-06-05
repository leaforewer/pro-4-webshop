<?php
// Maak contact met de mysqlserver en database
    include ("./connect_db.php");

    include("./functions.php");

    $id = $_POST["id"];
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);
    $handteken = sanitize($_POST["handteken"]);
    $userrole = sanitize($_POST["userrole"]);
    $activated =sanitize($_POST["activated"]);

    $sql = "UPDATE `register` 
                    `email` = '$email', 
                    `password` = '$password',
                    `handteken` = '$handteken',
                    `userrole` = '$userrole' ,
                    `activated` = '$activated'
            WHERE `id` = $id;";

    mysqli_query($conn, $sql);
// echo $sql; exit();
    header("Location: ./index.php?content=users")
?>