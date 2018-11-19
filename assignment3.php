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
    <h2>Search for a Contact</h2>
    
    <form method="post" action="lookup.php">
        First Name <input type="text" name="fname"><br>
        Last Name <input type="text" name="lname"><br>

        <input type="submit" value="Search">

    </form>

    <hr>
    <a href="addContact.php">Add new Contact</a>
    <?php include("footer.php"); ?>


</body>

</html>