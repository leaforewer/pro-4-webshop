<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>BMI Calculator</title>
</head>

<body>
    <div align="center">
        <h2>
            BMI Calculator<br />
        </h2>
        Bereken hier uw BMI (Body Mass Index) om te kijken of u op een gezond gewicht zit.<br />
        <form action="" method="post">
            <table>
                <br>
            <tr class="bmi">
                    <td>
                        Uw Naam:
                    </td>
                    <td>
                        <input type="text" name="name" />
                    </td>
                </tr>
                <tr class="bmi">
                    <td>
                        Uw gewicht in kg:
                    </td>
                    <td>
                        <input type="int" name="gewicht" />
                    </td>
                </tr>
                <tr class="bmi">
                    <td>
                        Uw lengte in cm:
                    </td>
                    <td>
                        <input type="int" name="lengte" />
                    </td>
                </tr>
                <tr class="bmi">
                    <td>
                        Uw leeftijd invullen:
                    </td>
                    <td>
                        <input type="int" name="year" />
                    </td>
                </tr class="bmi">
                <tr>
                    <td>
                        <br>
                        <input type="submit" name="submit" value="Bereken BMI En Opslaan uw gegevens" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            print("<hr/><br/>");
            $bmi = "";
            $kwadraat = "";
            $gewicht = $_POST["gewicht"];
            $lengte = $_POST["lengte"];
            $year = $_POST["year"];
            if ($gewicht <= 0) {
                print("<font color='red'><b>Gewicht moet groter zijn dan 0!<br/>");
            }
            if ($lengte <= 0) {
                print("<font color='red'><b>Lengte moet groter zijn dan 0!<br/>");
            } else {
                $lengte = $lengte / 100;
                $kwadraat = $lengte * $lengte;
                $bmi = $gewicht / $kwadraat;
                $bmi = round($bmi);
                print("Uw BMI bedraagt: " . $bmi . "<br/>");
                // 6 - 9 jaars
                if ($year <= 10 && $bmi <= 14) {
                    print("<font color='purple'><b>U bent te licht voor normalegewicht!</b></font>");
                }
                if ($year <= 10 && $bmi > 14 && $bmi < 17) {
                    print("<font color='purple'><b>U heeft een gezond gewicht!</b></font>");
                }
                if ($year <= 10 && $bmi > 17 && $bmi < 20) {
                    print("<font color='purple'><b>U heeft een te zware gewicht!</b></font>");
                }
                if ($year <= 10 && $bmi >= 20) {
                    print("<font color='purple'><b>U bent een overgewicht!</b></font>");
                }
                // 11 - 17 jaars
                if ($year >= 11 && $year < 18 && $bmi <= 16) {
                    print("<font color='purple'><b>U bent te licht voor normalegewicht!</b></font>");
                }
                if ($year >= 11 && $year < 18 &&  $bmi > 16 && $bmi < 22) {
                    print("<font color='purple'><b>U heeft een gezond gewicht!</b></font>");
                }
                if ($year >= 11 && $year < 18 && $bmi > 22 && $bmi < 27) {
                    print("<font color='purple'><b>U heeft een te zware gewicht!</b></font>");
                }
                if ($year >= 11 && $year < 18 && $bmi >= 27) {
                    print("<font color='purple'><b>U heeft een matig overgewicht!</b></font>");
                }
                // > 18 Leeftijden
                if ($bmi < 18 && $year > 18) {
                    print("<font color='blue'><b>U lijdt aan ondergewicht!</b></font>");
                }
                if ($bmi > 18 and $bmi <= 25 && $year > 18) {
                    print("<font color='green'><b>U heeft een gezond gewicht!</b></font>");
                }
                if ($bmi > 25 and $bmi <= 27 && $year > 18) {
                    print("<font color='purple'><b>U heeft een licht overgewicht!</b></font>");
                }
                if ($bmi > 27 and $bmi <= 30 && $year > 18) {
                    print("<font color='yellow'><b>U heeft een matig overgewicht!</b></font>");
                }
                if ($bmi > 30 and $bmi <= 40 && $year > 18) {
                    print("<font color='orange'><b>U heeft een ernstig overgewicht!</b></font>");
                }
                if ($bmi > 40) {
                    print("<font color='red'><b>U heeft een ziekelijk overgewicht!</b></font>");
                }
                // database connection
                include("./connect_db.php");
                include("./functions.php");

                $name = sanitize($_POST["name"]);

                $sql = "SELECT * FROM `bmi` WHERE `name` = '{$name}'";
                $result = mysqli_query($conn, $sql);


                    $sql = "INSERT INTO `bmi` (`bmi_id`,
                                            `name`,
                                            `gewicht`,
                                            `lengte`,
                                            `leeftijd`)
                                            VALUES (NULL,
                                            '$name', 
                                            '$gewicht', 
                                            '$lengte',
                                            '$year');";
                
                // echo $sql;
                // exit();
                $result = mysqli_query($conn, $sql);
            }
        }
        ?>
    </div>
</body>

</html>