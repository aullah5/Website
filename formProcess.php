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
    <?php
        if(!empty($_POST)){
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $email=$_POST["email"];
            $phone=$_POST["phone"];
            $address=$_POST["address"];
            $state=$_POST["state"];
            $zip=$_POST["zip"];
            
            $formString = $fname. ", " .$lname. ", " .$email. ", " .$phone. ", " .$address. ", " .$state. ", " .$zip. "\n";
            
            $formData = fopen("formData.txt", "a") or die ("unable to open file!");
            fwrite($formData, $formString);
            fclose($formData);
            echo "You added: ", $formString;
        }
    
    ?>

    
    <hr>
    <a href="assignment3.php">Return to search</a> | <a href="addContact.php">Add another contact</a>
    <?php include("footer.php"); ?>


</body>

</html>