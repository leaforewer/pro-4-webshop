<?php
session_start();
$products_ids = array();

//check if Add to Cart button has been submitted
if (filter_input(INPUT_POST, 'add_to_cart')) {
    if (isset($_SESSION['shopping_cart'])) {

        $count = count($_SESSION['shopping_cart']);

        $product_ids = array_column($_SESSION['shopping_cart'], 'productid');

        if (!in_array(filter_input(INPUT_GET, 'productid'), $products_ids)) {
            $_SESSION['shopping_cart'][0] = array(
                'productid' => filter_input(INPUT_GET, 'productid'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );
        } else { // product is al exists, increase quantity
            //match array key to id of the prodcut being added to the cart
            for ($i = 0; $i < $count($product_ids); $i++) {
                if ($products_ids[$i] == filter_input(INPUT_GET, 'productid')) {

                    $_SESSION['shoppping'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
    } else { //if shopping cart doesn't exist, maak je eerst product met array key 0
        //maak een array behulp van het submitted form data, start van key 0 en vul het met values
        $_SESSION['shopping_cart'][0] = array(
            'productid' => filter_input(INPUT_GET, 'productid'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}
// print_r($_SESSION);

// function pre_r($array)
// {
//     echo '<pre>';
//     print_r($array);
//     echo '<pre>';
// }
?>


<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Watch</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./css/products.css">
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
    <header id="navbar">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- search bar -->
                    <nav class="">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
                                <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                </svg>
                            </button>
                        </form>
                    </nav>
                    <div class=" collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav mr-auto lg-0" id="navItems">
                            <ul class="navbar-centered navbar-nav mr-auto lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" id="navText" href="./index.php?content=home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="navText" href="./products.php">Ewatches</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="navText" href="./index.php?content=informatie">Informatie</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="navText" href="./index.php?content=contact">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="navText" href="./index.php?content=bmi">BMI</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./index.php?content=home"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </header>
    <div class="container">
        <?php

        include('./connect_db.php');
        $query = 'SELECT * FROM products ORDER by productid ASC';
        $result = mysqli_query($conn, $query);

        if ($result) :
            if (mysqli_num_rows($result) > 0) :
                while ($product = mysqli_fetch_assoc($result)) :
        ?>
                    <div class="col-sm-4 col-md-3" style="display: inline-flex;">
                        <form style="display: inline;" method="POST" action="products.php?action=add&id=<?php echo $product['productid']; ?>">
                            <div class="products">
                                <img src="./img/<?php echo $product['image']; ?>" class="card-img-top img-responsive" alt="">
                                <h4 class="text-warning"><?php echo $product['name'] ?></h4>
                                <h4>€ <?php echo $product['price']; ?> ,-</h4>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
                                <input type="hidden" name="price" value="<?php echo $product['price']; ?> ">
                                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-warning" value="Add to Cart">
                            </div>
                        </form>
                    </div>
        <?php
                endwhile;
            endif;
        endif;
        ?>
        <div style="clear: both;"></div>
        <br />
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th colspan="5">
                        <h3>Order Deatils</h3>
                    </th>
                </tr>
                <tr>
                    <th width="40%">Product Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
                </tr>
                <?php
                if (!empty($_SESSION['shopping_cart'])) :

                    $total = 0;

                    foreach ($_SESSION['shopping_cart'] as $key => $product) :

                ?>
                        <tr>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['quantity']; ?></td>
                            <td>€<?php echo $product['price']; ?></td>
                            <td><?php
                                // $format = number_format(floatval($product['quantity'] * $product['price']), 2);
                                echo number_format($product['quantity'] * $product['price'], 2); ?></td>
                            <td>
                                <a href="products.php?action=delete&id=<?php echo $product['productid'] ?>">
                                    <div class="btn-danger">Remove</div>
                                </a>
                            </td>
                        </tr>
                    <?php
                        $total = $total + ($product['quantity'] * $product['price']);
                    endforeach;
                    ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">€ <?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <!-- Show checkout button only if the shopping cart is not empty -->
                        <td colspan="5">
                            <?php
                            if (isset($_SESSION['shoppping_cart'])) :
                                if (count($_SESSION['shopping_cart']) > 0) :
                            ?>
                                    <a href="#" class="button">Checkout</a>
                            <?php endif;
                            endif; ?>
                        </td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>