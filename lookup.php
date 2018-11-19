<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ashraf Ullah | IT 207 Final Grade Determiner</title>
    <link rel="icon" href="rsz_ashraf.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="lab1styles.css">
    <link rel="stylesheet" href="lab2styles.css">
    <link rel="stylesheet" href="lab3styles.css">

</head>



<body>

    <?php include("menu.php"); ?>

    <h1>Online Contacts Directory</h1>
    <h2>Contact Info</h2>

    <?php
    // What to look for
    $search = $_POST["fname"].", ".$_POST["lname"];
    // Read from file
    $lines = file('formData.txt');
    foreach($lines as $line)
    {
      // Check if the line contains the string we're looking for, and print if it does
      if(strpos($line, $search) !== false)
        echo "Contact Info: ", $line;
            
    }
?>
    <form method="post" action="editContact.php">
        <input type="submit" value="Edit Contact">
        <input type="hidden" value="<?php echo $_POST["fname"] ?>" name="fname">
        <input type="hidden" value="<?php echo $_POST["lname"] ?>" name="lname">
    </form>
    
    <hr>
    <a href="assignment3.php">Return to Search</a> | <a href="addContact.php">Add new Contact</a>
    <?php include("footer.php"); ?>


</body>

</html>