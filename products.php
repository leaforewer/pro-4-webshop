<?php

require_once('./component.php');

?>
<div class="col-12">
    <div class="card-deck">
        <?php

        component($productname="Product 1", $productprice= 139, $productimg= "./img/watch_1.jpg");
        component($productname="Product 2", $productprice= 89, $productimg= "./img/watch_2.png");
        component($productname="Product 3", $productprice= 189, $productimg= "./img/watch_3.png");

        ?>

    </div>
</div>