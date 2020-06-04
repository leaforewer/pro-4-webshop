<?php
$per_page = 4;

include("./connect_db.php");

$sql = "SELECT * FROM `users`";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);
$pages = ceil($count / $per_page);

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

$start = ($page - 1) * $per_page;

$sql = "SELECT * FROM `users` order by id limit $start,$per_page";

// Dit is de functie die de query $sql via de verbinding $conn naar de database stuurt.
$result = mysqli_query($conn, $sql);


$records = "";
// De while loop geeft alle gegevens weer uit de tabel users.
while ($record = mysqli_fetch_assoc($result)) {
    // var_dump($record);
    $records .= "<tr>
                    <th scope='row'>" . $record["id"] . "</th>
                    <td>" . $record["username"] . "</td>
                    <td>" . $record["email"] . "</td>
                    <td>" . $record["password"] . "</td>
                    <td>" . $record["handteken"] . "</td>
                    <td>" . $record["nationaliteit"] . "</td>
                    <td>
                        <a href='./index.php?content=update_users&id=" . $record["id"] . "'>
                            <img src='./img/icons/b_edit.png' alt=; pencil'>
                        </a>
                    </td>
                    <td>
                    <a href='./index.php?content=delete_users&id=" . $record["id"] . "'>
                        <img src='./img/icons/b_drop.png' alt=; cross'>
                    </a>
                </td>
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
    <title>Hello, world!</title>
</head>

<body>


    <main class="container">

        <div class="row">
            <div class="col-12">
                <!-- Op deze plek komt de tabel -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Handteken</th>
                            <th scope="col">Nationaliteit</th>
                        </tr>
                    </thead>
                    <tbody>
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
                            echo "'><a class= 'page-link' href='index.php?content=users&page=" . $i . "'>" . $i . "</a></li>";
                        }
                        ?>


                        <li class="page-item">
                            <a class="page-link" href="index.php?content=users&page=<?php if ($page < $pages) {
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