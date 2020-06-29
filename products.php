<?php
// kaldigim yer video ile devam et
$products_ids = array();

?>


<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
    <link rel="stylesheet" href="./css/products.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
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
                        <form style="display: inline;" method="POST" action="index.php?action=add&id=<?php echo $product['productid']; ?>">
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
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>