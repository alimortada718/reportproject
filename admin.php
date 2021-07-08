<?php

session_start();

if ($_SESSION["loggedin"] != 1) {
    header("location:index.php");
}

include "includes/db.php";
$sql = "SELECT * FROM scratch";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$label = array('id', 'date', 'user', 'slot1', 'slot2', 'slot3', 'slot4', 'slot5', 'slot6', 'slot7', 'slot8');

$sql2 = "SELECT * FROM tobacco";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$label2 = array('id', 'date', 'user', 'tobacco1', 'tobacco2', 'tobacco3', 'tobacco4', 'tobacco5', 'tobacco6', 'tobacco7', 'tobacco8');

$sql3 = "SELECT * FROM safe";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);
$label3 = array('id', 'user', 'date', 'safe1', 'safe2', 'safe3', 'safe4');
var_dump($row);
?>

<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="css/style.css">
</header>
<div class="body">
    <div class="all">
        <h3 style="background-color:yellow;">Shelf</h3>

        <?php

        foreach ($label as $ro) {

        ?>
        <?php
            echo $ro;
            ?>
        </br>
        <?php
        }
        ?>
    </div>
    <div class="all">

        <?php

        foreach ($row as $ro) {

        ?>
        <?php
            echo $ro;
            ?>
        </br>
        <?php
        }
        ?>
    </div>

    <div class="all">
        <h3 style="background-color:powderblue;">Tobacco</h3>

        <?php

        foreach ($label2 as $ro) {

        ?>
        <?php
            echo $ro;
            ?>
        </br>
        <?php
        }
        ?>
    </div>
    <div class="all">

        <?php

        foreach ($row2 as $ro) {

        ?>
        <?php
            echo $ro;
            ?>
        </br>
        <?php
        }
        ?>
    </div>

    <div class="all">
        <h3 style="background-color:green;">SAFE</h3>

        <?php

        foreach ($label3 as $ro) {

        ?>
        <?php
            echo $ro;
            ?>
        </br>
        <?php
        }
        ?>
    </div>
    <div class="all">

        <?php

        foreach ($row3 as $ro) {

        ?>
        <?php
            echo $ro;
            ?>
        </br>
        <?php
        }
        ?>
    </div>

</div>

</html>