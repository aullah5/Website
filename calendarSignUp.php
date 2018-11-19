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

        <div id="calendarHolder">
            <h1 style="text-align: center;">Office Hours Sign Up</h1>
            <form action="calendarSignUp.php" method="post">
                <p style="text-align: center">Student Name : <input type="text" name="studentname"> Student Email: <input type="email" name="studentname"> <input type="reset" value="clear">
                    <input type="submit"></p>
                <br>
            </form>

            <div id="month">
                <h1>
                    <?php echo date("F Y"); ?>
                </h1>
            </div>
            <div id="grid">
                <div>Monday</div>
                <div>Tuesday</div>
                <div>Wednesday</div>
                <div>Thursday</div>
                <div>Friday</div>
                <div>Saturday</div>
                <div>Sunday</div>
                <div>1
                    <form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['mondayTimes'])) {
                            $mondayTimes = $_POST['mondayTimes'];
                            
                            foreach($mondayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="mondayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>2
                    <form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['tuesdayTimes'])) {
                            $tuesdayTimes = $_POST['tuesdayTimes'];
                            
                            foreach($tuesdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="tuesdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>3 <form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['wednesdayTimes'])) {
                            $wednesdayTimes = $_POST['wednesdayTimes'];
                            
                            foreach($wednesdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="wednesdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>4<form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['thursdayTimes'])) {
                            $thursdayTimes = $_POST['thursdayTimes'];
                            
                            foreach($thursdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="thursdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>5<form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['fridayTimes'])) {
                            $fridayTimes = $_POST['fridayTimes'];
                            
                            foreach($fridayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="fridayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>6
                </div>
                <div>7
                </div>
                <div>8 <form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['mondayTimes'])) {
                            $mondayTimes = $_POST['mondayTimes'];
                            
                            foreach($mondayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="mondayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>9 <form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['tuesdayTimes'])) {
                            $tuesdayTimes = $_POST['tuesdayTimes'];
                            
                            foreach($tuesdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="tuesdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>10<form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['wednesdayTimes'])) {
                            $wednesdayTimes = $_POST['wednesdayTimes'];
                            
                            foreach($wednesdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="wednesdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>11<form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['thursdayTimes'])) {
                            $thursdayTimes = $_POST['thursdayTimes'];
                            
                            foreach($thursdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="thursdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>12<form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['fridayTimes'])) {
                            $fridayTimes = $_POST['thursdayTimes'];
                            
                            foreach($fridayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="fridayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>13
                </div>
                <div>14
                </div>
                <div>15 <form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['mondayTimes'])) {
                            $mondayTimes = $_POST['mondayTimes'];
                            
                            foreach($mondayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="mondayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>16 <form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['tuesdayTimes'])) {
                            $tuesdayTimes = $_POST['tuesdayTimes'];
                            
                            foreach($tuesdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="tuesdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>17<form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['wednesdayTimes'])) {
                            $wednesdayTimes = $_POST['wednesdayTimes'];
                            
                            foreach($wednesdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="wednesdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>18<form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['thursdayTimes'])) {
                            $thursdayTimes = $_POST['thursdayTimes'];
                            
                            foreach($thursdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="thursdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>19<form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['fridayTimes'])) {
                            $fridayTimes = $_POST['thursdayTimes'];
                            
                            foreach($fridayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="fridayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>20
                </div>
                <div>21
                </div>
                <div>22 <form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['mondayTimes'])) {
                            $mondayTimes = $_POST['mondayTimes'];
                            
                            foreach($mondayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="mondayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>23 <form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['tuesdayTimes'])) {
                            $tuesdayTimes = $_POST['tuesdayTimes'];
                            
                            foreach($tuesdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="tuesdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>24<form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['wednesdayTimes'])) {
                            $wednesdayTimes = $_POST['wednesdayTimes'];
                            
                            foreach($wednesdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="wednesdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>25<form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['thursdayTimes'])) {
                            $thursdayTimes = $_POST['thursdayTimes'];
                            
                            foreach($thursdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="thursdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>26<form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['fridayTimes'])) {
                            $fridayTimes = $_POST['thursdayTimes'];
                            
                            foreach($fridayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="fridayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>27
                </div>
                <div>28
                </div>
                <div>29 <form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['mondayTimes'])) {
                            $mondayTimes = $_POST['mondayTimes'];
                            
                            foreach($mondayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="mondayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>30 <form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['tuesdayTimes'])) {
                            $tuesdayTimes = $_POST['tuesdayTimes'];
                            
                            foreach($tuesdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="tuesdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
                <div>31<form method="post" , action="studentTimes.php">
                        <?php 
                        if(isset($_POST['wednesdayTimes'])) {
                            $wednesdayTimes = $_POST['wednesdayTimes'];
                            
                            foreach($wednesdayTimes as $option => $value) {
                                echo '<br>', '<input type="radio" name="wednesdayTime">', $value;
                            }
                        }
                    ?>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php include("footer.php"); ?>


</body>

</html>