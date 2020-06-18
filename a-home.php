<?php
include("./functions.php");
is_authorized(["admin", "root"]);
?>



a-home
<?php
    echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn id is: " . $_SESSION["id"];
    
?>