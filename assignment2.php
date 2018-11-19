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

<?php 
function create_time_range($start, $end, $interval = '30 mins', $format = '12') {
    $startTime = strtotime($start); 
    $endTime   = strtotime($end);
    $returnTimeFormat = ($format == '12')?'g:i A':'G:i';

    $current   = time(); 
    $addTime   = strtotime('+'.$interval, $current); 
    $diff      = $addTime - $current;

    $times = array(); 
    while ($startTime < $endTime) { 
        $times[] = date($returnTimeFormat, $startTime); 
        $startTime += $diff; 
    } 
    $times[] = date($returnTimeFormat, $startTime); 
    return $times; 
}
    
    $times = create_time_range('7:30', '22:00', '30 mins');
    
?>

<body>

    <?php include("menu.php"); ?>
    <div class="labContent">
        <h1>Office Hours Setup Form</h1>



        <form method="post" action="calendarSignUp.php">
            <div class="row">
                <div class="column">Monday</div>
                <div class="column">Tuesday</div>
                <div class="column">Wednesday</div>
                <div class="column">Thursday</div>
                <div class="column">Friday</div>
            </div>

            <div class="times">
                <div class="row">
                    <div class="column">
                        <select multiple name="mondayTimes[]">
                            <?php foreach($times as $key=>$val){ ?>
                            <option value="<?php echo $val; ?>">
                                <?php echo $val; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="column">
                        <select multiple name="tuesdayTimes[]">
                            <?php foreach($times as $key=>$val){ ?>
                            <option value="<?php echo $val; ?>">
                                <?php echo $val; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="column">
                        <select multiple name="wednesdayTimes[]">
                            <?php foreach($times as $key=>$val){ ?>
                            <option value="<?php echo $val; ?>">
                                <?php echo $val; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="column">
                        <select multiple name="thursdayTimes[]">
                            <?php foreach($times as $key=>$val){ ?>
                            <option value="<?php echo $val; ?>">
                                <?php echo $val; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="column">
                        <select multiple name="fridayTimes[]">
                            <?php foreach($times as $key=>$val){ ?>
                            <option value="<?php echo $val; ?>">
                                <?php echo $val; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                </div>
            </div>
            <input type="reset" value="clear">
            <input type="submit">
        </form>
    </div>
<?php include("footer.php"); ?>


</body>

</html>