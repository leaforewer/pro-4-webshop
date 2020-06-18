<?php

include('./connect_db.php');
require_once('./component.php');

if(isset($_POST['add'])){

}
?>
<div class="col-12">
    <div class="card-deck">
        <?php

        component($productname="Garmin VivoActive", $productprice= 139, $productimg= "./img/watch_1.jpg", $productid=1);
        component($productname="Suunto 5", $productprice= 89, $productimg= "./img/watch_2.png", $productid=2);
        component($productname="Diesel Classic", $productprice= 189, $productimg= "./img/watch_3.png", $productid=3);
        ?>

    </div>
</div>