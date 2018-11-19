<div class="sidenav">
    <a href="index.php">Home</a>
    <p>Assignments</p>
    <ul>
        <li><a href="assignment1.php">Assignment 1</a></li>
        <li><a href="assignment2.php">Assignment 2</a></li>
        <li><a href="assignment3.php">Assignment 3</a></li>
        <li><a href="assignment4.php">Assignment 4</a></li>
    </ul>
    <p>Lab Practica</p>
    <ul>
        <li><a href="practica1.php">Practica 1</a></li>
        <li><a href="practica2.php">Practica 2</a></li>
    </ul>
</div>

<div class="flex-grid">
    <div class="col">
        <div id="classInfo">
            <p>
                <b>IT 207-DL2 </b><br />
                Prof. Garrison <br />
                George Mason University
            </p>
        </div>
    </div>
    <div class="col">
        <div id="myInfo">
            <p>
                <b>Ashraf Ullah </b> <br />
                <a href="mailto:webmaster@example.com">aullah5@gmu.edu</a><br />
                Last Modified:
                <?php 
                date_default_timezone_set('US/Eastern');
                echo date ("h:iA M, d Y", getlastmod()); ?> 
            </p>
        </div>
    </div>
</div>
