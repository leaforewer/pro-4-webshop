<?php
    // Hieronder staan de waarden die nodig zijn voor het contaact maken met de mysql-server
    define("SERVERNAME", "localhost");
    define("USERNAME", "ahmet");
    define("PASSWORD", "ahmet");
    define("DATABASENAME", "smartwatch");
    
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);
    
?>