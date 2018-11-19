<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ashraf Ullah | IT 207 Final Grade Determiner</title>
    <link rel="icon" href="rsz_ashraf.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="lab1styles.css">
    <link rel="stylesheet" href="lab2styles.css">
    <link rel="stylesheet" href="practica1styles.css">

</head>

<body>
    <?php include("menu.php"); ?>
    <div class="labContent">
        <h2>Total Shipping Cost</h2>
        <?php
        
            define("TRAINCOST", .01);
            define("TRUCKCOST", .02);
            define("CARCOST", .05);
        

                $weight = $_POST["weight"];

                $trainMiles = $_POST["trainMiles"];

                $truckMiles = $_POST["truckMiles"];

                $carMiles = $_POST["carMiles"];

            ?>

        <div id="blue">
            <?php
                echo "For a ", $weight, " pound package, it is estimated that: <br/><br/>";
        
            ?>

            <?php
            function costPerMile($weight, $distance) {
                $totalCost = $weight * $distance;
                return $totalCost;
            }
        
            
        
            echo "$", costPerMile($weight, $trainMiles) * TRAINCOST, " Train Freight Cost", "<br/>";
            echo "$", costPerMile($weight, $truckMiles) * TRUCKCOST, " Truck Freight Cost", "<br/>";
            echo "$", costPerMile($weight, $carMiles) * CARCOST, " Car Freight Cost", "<br/>";
            
            $total = costPerMile($weight, $trainMiles) * TRAINCOST + costPerMile($weight, $truckMiles) * TRUCKCOST + costPerMile($weight, $carMiles) * CARCOST;
        ?>
        </div>

            <?php
            echo "Total shipping charges: $", $total;
        ?>

        
        <br />
        <br />
         <a href="practica1.php">Return to Form Page</a> | Last Modified:
        <?php echo date ("h:iA M, d Y", getlastmod()); ?>

    </div>

    <?php include("footer.php"); ?>


</body>

</html>
