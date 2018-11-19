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
        <h2>Passenger Distribution</h2>
        <form action="passengerDistribution.php" method="post">

            Total Number of Passengers <input type="text" name="numOfPassengers" />
            
            <input type="submit">
        </form>
        <br/>
        <a href="practica1.php">Proceed to part 1</a> | Last Modified:
        <?php echo date ("h:iA M, d Y", getlastmod()); ?>

    </div>

    <?php include("footer.php"); ?>


</body>

</html>
