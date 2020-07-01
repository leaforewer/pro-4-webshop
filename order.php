<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smartwatch Bestellingen</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/order.css">
</head>
<script>
    // Data Picker Initialization
    $('.datepicker').pickadate();
</script>

<body>


    <section class="order-form my-4 mx-4">
        <form action="./order_script.php" method="POST">
            <div class="container pt-4">

                <div class="row">
                    <div class="col-12">
                        <h1>Smartwatch - Bestellingen</h1>
                        <span>Vul uw bestelling details </span>
                        <hr class="mt-1">
                    </div>
                    <div class="col-12">

                        <div class="row mx-4">
                            <div class="col-12 mb-2">
                                <label class="order-form-label">Naam</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input class="order-form-input" name="first_n" placeholder="First">
                            </div>
                            <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                                <input class="order-form-input" name="last_n" placeholder="Last">
                            </div>
                        </div>

                        <div class="row mt-3 mx-4">
                            <div class="col-12">
                                <label class="order-form-label">Adress</label>
                            </div>
                            <div class="col-12">
                                <input class="order-form-input" name="straat" placeholder="Straat naam">
                            </div>
                            <div class="col-12 col-sm-6 mt-2 pr-sm-2">
                                <input class="order-form-input" name="stad" placeholder="Stad">
                            </div>
                            <div class="col-12 col-sm-6 mt-2 pr-sm-2">
                                <input class="order-form-input" name="postcode" placeholder="Post Code">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-dark d-block mx-auto btn-submit">Submit</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-10 offset-md-1 border rounded mt-5 bg-white h-25">
                    <?php
                    $total = $_POST['total'];
                    ?>
                    <div class="pt-4">
                        <h6>PRICE DETAILS</h6>
                        <hr>
                        <div class="row price-details">
                            <div class="col-md-12">
                                <h6>Delivery Charges</h6>
                                <h6 class="text-success">FREE</h6>
                                <hr>
                                <h6>Amount Payable</h6>
                                <h6>€<?php echo $total; ?></h6>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </form>
    </section>
</body>

</html>