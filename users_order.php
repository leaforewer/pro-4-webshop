<?php
$per_page = 5;

include("./connect_db.php");

$sql = "SELECT * FROM `orders`";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);
$pages = ceil($count / $per_page);

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

$start = ($page - 1) * $per_page;

$sql = "SELECT * FROM `orders` order by order_id limit $start,$per_page";

// Dit is de functie die de query $sql via de verbinding $conn naar de database stuurt.
$result = mysqli_query($conn, $sql);

$text = "Admin Panel";
$records = "";
// De while loop geeft alle gegevens weer uit de tabel users.
while ($record = mysqli_fetch_assoc($result)) {
    // var_dump($record);
    $records .=
        "
        <tr>
                    <th scope='row'>" . $record["order_id"] . "</th>
                    <td>" . $record["first_n"] . "</td>
                    <td>" . $record["last_n"] . "</td>
                    <td>" . $record["straat"] . "</td>
                    <td>" . $record["stad"] . "</td>
                    <td>" . $record["postcode"] . "</td>
                    <td>" . $record["status"] . "</td>     
                </tr>";
}

?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script|Pangolin&display=swap" rel="stylesheet">
    <title>Users</title>

<style>
.user {color: whitesmoke;}
.user:hover {color: orange;}
</style>
</head>

<body style="background-color: gray;">


    <main class="container users_order">

        <div class="row">
            <div class="col-12">
                <br />
                <p style="font-size:32px ; 
                          padding-bottom: 30px;
                          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                          font-style: italic;">Admin panel</p>
                <!-- Op deze plek komt de tabel -->
                <table class="table table-hover" style="background-color: #262935; 
                                                        color: whitesmoke; 
                                                        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                    <thead>
                        <tr>
                            <th scope="col">order_id</th>
                            <th scope="col">first_n</th>
                            <th scope="col">last_n</th>
                            <th scope="col">straat</th>
                            <th scope="col">stad</th>
                            <th scope="col">postcode</th>
                            <th scope="col">status</th>
                        </tr>
                    </thead>
                    <tbody class="users_order">
                        <?php
                        echo $records;
                        ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="index.php?content=users&page=<?php if ($page > 1) {
                                                                                        echo $page - 1;
                                                                                    } else {
                                                                                        echo $page;
                                                                                    } ?>" aria- label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        <?php
                        for ($i = 1; $i <= $pages; $i++) {
                            echo "<li class='page-item ";
                            if ($page == $i) {
                                echo 'active';
                            }
                            echo "'><a class= 'page-link' href='index.php?content=users_order&page=" . $i . "'>" . $i . "</a></li>";
                        }
                        ?>


                        <li class="page-item">
                            <a class="page-link" href="index.php?content=users_order&page=<?php if ($page < $pages) {
                                                                                        echo $page + 1;
                                                                                    } else {
                                                                                        echo $page;
                                                                                    } ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="./js/app.js"></script>

    </main>


</body>

</html>