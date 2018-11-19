<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ashraf Ullah | IT 207 Final Grade Determiner</title>
    <link rel="icon" href="rsz_ashraf.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="lab1styles.css">
    <link rel="stylesheet" href="lab2styles.css">

</head>

<body>
    <?php include("menu.php"); ?>
    <div class="labContent">
        <h2>Passenger Distribution Results</h2>
        <?php
            define("BUS", 30);
            define("CAR", 4);
            
            $numOfPassengers = $_POST["numOfPassengers"];
            echo $numOfPassengers, " passengers need transportation <br/><br/>";
            $numOfBuses = $numOfPassengers / BUS;
        
            echo floor($numOfBuses), " Buses needed<br/>";
            for ($i = 0; $i < $numOfBuses; $i++){
                echo "o ";
            }
            echo "<br/><br/>";
        
            $numberOfCars = ($numOfPassengers - (floor($numOfBuses) * BUS)) / CAR;
            echo floor($numberOfCars), " Cars needed <br/>";
                for ($i = 0; $i < $numberOfCars; $i++){
                echo "o ";
            }
        
            echo "<br/><br/>";
             
            $flooredBus = floor($numOfBuses);
            $flooredCar = floor($numberOfCars);
        
            $flooredBus *= BUS;
            $flooredCar *= CAR;
            
            $addThem = $flooredBus + $flooredCar;
            
            $leftover = $numOfPassengers - $addThem;
            
            echo $leftover, " passenger(s) left over<br/>";
                for ($i = 0; $i < $leftover; $i++){
                echo "o ";
            }
            echo"<br/>";
            
    
        
        ?>
        <br />
        Legend : Passengers per Bus = 30 | per Car = 4
        <br />
        <br />
        <a href="practica1.php">Proceed to part 1</a> | Last Modified:
        <?php echo date ("h:iA M, d Y", getlastmod()); ?>

    </div>

    <?php include("footer.php"); ?>


</body>

</html>
