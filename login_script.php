<?php
    var_dump($_POST);
    include("./connect_db.php");
    include("./functions.php");

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    if (empty($email) || empty($password)) {
        // Check of de loginformvelden zijn ingevuld...
        header("Location: ./index.php?content=message&alert=loginform-empty");
    } else {

                                    $sql = "SELECT * FROM `register` WHERE `email` = '$email'";

                                    $result = mysqli_query($conn, $sql);

                                    // var_dump((bool) mysqli_num_rows($result));

                                    if (!mysqli_num_rows($result)) {
                                        // E-mailadres onbekend...
                                        header("Location: ./index.php?content=message&alert=email-unknown");
                                    } else {

                                        $record = mysqli_fetch_assoc($result);

                                        // var_dump((bool) $record["activated"]);

                                        if (!$record["activated"]) {
                                            header("Location: ./index.php?content=message&alert=not-activated&email=$email"); 
                                        }
                                    }


        // Check of de loginformvelden zijn ingevuld...
    }
?>