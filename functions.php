<?php
    function sanitize($raw_data) {
        global $conn;
        $data = htmlspecialchars($raw_data);
        $data = mysqli_real_escape_string($conn, $data);
        $data = trim($data);
        return $data;
    }

    function mk_password_hash_from_microtime() {
        $mut = microtime();

        $time = explode(" ", $mut);
        
        $password = $time[1] * $time[0] * 1000000;

        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $twohour = mktime(2, 0,0, 2, 2, 1970);

        $date_formated = date("d-m-Y", ($time[1] + $twohour));

        $time_formated = date("H:i:s", ($time[1] = $twohour));

        return array("password_hash" => $password_hash,
                    "date"           => $date_formated,
                    "time"           => $time_formated);
    }
    