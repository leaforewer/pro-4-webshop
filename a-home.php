a-home
<?php
    // session_start();
    var_dump($_SESSION);

    // unset($_SESSION["id"]);
    // unset($_SESSION["userrole"]);
    echo session_id();
    echo "<hr>";

    // session_unset();
    // session_destroy();


    // var_dump($_SESSION);



    echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn id is: " . $_SESSION["id"];
    
?>