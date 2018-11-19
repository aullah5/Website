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
        <form action="finalGrade.php" method="post">
            <h1>Final Grade Determiner</h1>
            <h3>Participation</h3>
            Earned: <input type="text" name="earnedParticipation" />
            Max: <input type="text" name="maxParticipation" />
            Weight (percentage): <input type="text" name="weightParticipation" />
            <h3>Quizzes</h3>
            Earned: <input type="text" name="earnedQuiz" />
            Max: <input type="text" name="maxQuiz" />
            Weight (percentage): <input type="text" name="weightQuiz" />
            <h3>Lab Assignments</h3>
            Earned: <input type="text" name="earnedLab" />
            Max: <input type="text" name="maxLab" />
            Weight (percentage): <input type="text" name="weightLab" />
            <h3>Practica</h3>
            Earned: <input type="text" name="earnedPracticum" />
            Max: <input type="text" name="maxPracticum" />
            Weight (percentage): <input type="text" name="weightPracticum" />
            <br /><br />
            <input type="submit" />
        </form>

    </div>

    <?php include("footer.php"); ?>


</body>

</html>
