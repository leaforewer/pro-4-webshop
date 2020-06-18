<?php

function component($productname, $productprice, $productimg, $productid)
{
    $element = "
    
<form action='./index.php?content=products' method='POST'>
        <div>
            <img id='img-product' src='$productimg' class='card-img-top' alt='...'>
            <div class='card border-info mb-3' style='max-width: 18rem;'>
                <div class='card-body text-dark'>
                    <h5 class='card-title'>$productname</h5>
                    <p class='card-text'>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <div>
                        <span style='font-size: 1.5em; color: red; padding-right: 1em;'>$productprice € -</span>
                            <button type='hidden' style='display: none;' name='productid' value='$productid'></button>
                            <button type='submit' class='btn btn-warning my-3' name='add'>Voeg in winkelwagen <ion-icon style='width: 22px; height:22px;' name='cart'></ion-icon></button>
                    </div>
                </div>
            </div>
        </div>
</form>        
";
    echo $element;
}
