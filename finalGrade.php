<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ashraf Ullah | IT 207 Final Grade Determiner</title>
    <link rel="icon" href="rsz_ashraf.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="lab1styles.css">

</head>

<body>
    <?php include("menu.php"); ?>
    <?php 
        define ("MAXPERCENT", 100);
    
        $earnedParticipation = $_POST["earnedParticipation"];
        $maxParticipation = $_POST["maxParticipation"];
        $weightParticipation = $_POST["weightParticipation"];
    
        $earnedQuiz = $_POST["earnedQuiz"];
        $maxQuiz = $_POST["maxQuiz"];
        $weightQuiz = $_POST["weightQuiz"];
    
        $earnedLab = $_POST["earnedLab"];
        $maxLab = $_POST["maxLab"];
        $weightLab = $_POST["weightLab"];
    
        $earnedPracticum = $_POST["earnedPracticum"];
        $maxPracticum = $_POST["maxPracticum"];
        $weightPracticum = $_POST["weightPracticum"];
    
        function earnedPercent($earned, $max) {
            return ($earned / $max) * MAXPERCENT;    
        }
    
        function weightedGrade($earnedPercent, $weightPercent) {
            $earnedPercent = $earnedPercent / MAXPERCENT;
            $weightPercent = $weightPercent / MAXPERCENT;
            $weightPercent = $weightPercent * $earnedPercent;
            return $weightPercent * MAXPERCENT;
        }
    
    ?>
    <div class="labContent">

        <p>
            You earned a
            <b>
                <?php echo earnedPercent($earnedParticipation, $maxParticipation); ?>%</b> for your Participation,
            with a weighted value of
            <b>
                <?php echo weightedGrade(earnedPercent($earnedParticipation, $maxParticipation), $weightParticipation); ?>%</b> <br />

            You earned a
            <b>
                <?php echo earnedPercent($earnedQuiz, $maxQuiz); ?>%</b> for the Quizzes,
            with a weighted value of
            <b>
                <?php echo weightedGrade(earnedPercent($earnedQuiz, $maxQuiz), $weightQuiz); ?>%</b> <br />

            You earned a
            <b>
                <?php echo earnedPercent($earnedLab, $maxLab); ?>%</b> for the Lab Assignmnents,
            with a weighted value of
            <b>
                <?php echo weightedGrade(earnedPercent($earnedLab, $maxLab), $weightLab); ?>%</b> <br />

            You earned a
            <b>
                <?php echo earnedPercent($earnedPracticum, $maxPracticum); ?>%</b> for the Practica,
            with a weighted value of
            <b>
                <?php echo weightedGrade(earnedPercent($earnedPracticum, $maxPracticum), $weightPracticum); ?>%</b> <br />

            Your Final Grade is a:
            <b>
                <?php 
                echo weightedGrade(earnedPercent($earnedParticipation, $maxParticipation), $weightParticipation) + weightedGrade(earnedPercent($earnedQuiz, $maxQuiz), $weightQuiz) + weightedGrade(earnedPercent($earnedLab, $maxLab), $weightLab) + weightedGrade(earnedPercent($earnedPracticum, $maxPracticum), $weightPracticum);
                ?>%</b>
        </p>
        <p><a href="assignment1.php">Go Back</a> | <a href="index.php">Home</a></p>
    </div>

    <?php include("footer.php"); ?>


</body>

</html>
