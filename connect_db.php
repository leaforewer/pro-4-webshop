<?php
    // Hieronder staan de waarden die nodig zijn voor het contaact maken met de mysql-server
    define("SERVERNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASENAME", "smartwatch");
    
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);
    
?>