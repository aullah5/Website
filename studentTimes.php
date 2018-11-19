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



    <?php 
        if(isset($_POST['mondayTimes'])){ // select_name will be replaced with your input filed name
	       $getInput = $_POST['mondayTimes']; // select_name will be replaced with your input filed name
            $selectedOption = "";
	       foreach ($getInput as $option => $value) {
		      $selectedOption .= $value.','; // I am separating Values with a comma (,) so that I can extract data using explode()
	       }
	       echo $selectedOption;
        }
    ?>



    <?php include("menu.php"); ?>
    <div class="labContent">

        <div id="calendarHolder">
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
                    <form method="post", action="studentTimes.php">
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
                    <form method="post", action="studentTimes.php">
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
                <div>3</div>
                <div>4</div>
                <div>5</div>
                <div>6</div>
                <div>7</div>
                <div>8</div>
                <div>9</div>
                <div>10</div>
                <div>11</div>
                <div>12</div>
                <div>13</div>
                <div>14</div>
                <div>15</div>
                <div>16</div>
                <div>17</div>
                <div>18</div>
                <div>19</div>
                <div>20</div>
                <div>21</div>
                <div>22</div>
                <div>23</div>
                <div>24</div>
                <div>25</div>
                <div>26</div>
                <div>27</div>
                <div>28</div>
                <div>29</div>
                <div>30</div>
                <div>31</div>
            </div>
        </div>

    </div>

    <?php include("footer.php"); ?>


</body>

</html>