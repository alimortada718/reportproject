<?php
session_start();
if ($_SESSION["loggedin"] != 1) {
    header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="css/style.css">
</header>
<div class="body">
    <form class="form" action="scratchvalidation.php" method="post">
        <div class="all">
            <div>
                <h3 style="background-color:yellow;">Shelf</h3>
                <input type="text" class="input" class="input" id="slot1" name="slot1" placeholder="slot1">
                <input type="text" class="input" id="slot2" name="slot2" placeholder="slot2">
                <input type="text" class="input" id="slot3" name="slot3" placeholder="slot3">
                <input type="text" class="input" id="slot4" name="slot4" placeholder="slot4">
                <input type="text" class="input" id="slot5" name="slot5" placeholder="slot5">
                <input type="text" class="input" id="slot6" name="slot6" placeholder="slot6">
                <input type="text" class="input" id="slot7" name="slot7" placeholder="slot7">
                <input type="text" class="input" id="slot8" name="slot8" placeholder="slot8">
            </div>
        </div>

        <div class="all">
            <div>
                <h3 style="background-color:powderblue;">Tobacco</h3>

                <input type="text" class="input" id="tobacco1" name="tobacco1" placeholder="tobacco1">

                <input type="text" class="input" id="tobacco2" name="tobacco2" placeholder="tobacco2">
                <input type="text" class="input" id="tobacco3" name="tobacco3" placeholder="tobacco3">
                <input type="text" class="input" id="tobacco4" name="tobacco4" placeholder="tobacco4">
                <input type="text" class="input" id="tobacco5" name="tobacco5" placeholder="tobacco5">
                <input type="text" class="input" id="tobacco6" name="tobacco6" placeholder="tobacco6">
                <input type="text" class="input" id="tobacco7" name="tobacco7" placeholder="tobacco7">
                <input type="text" class="input" id="tobacco8" name="tobacco8" placeholder="tobacco8">
            </div>
        </div>
        <div class="all">
            <div>
                <h3 style="background-color:green;">SAFE</h3>

                <input type="text" class="input" id="safe1" name="safe1" placeholder="safe1">

                <input type="text" class="input" id="safe2" name="safe2" placeholder="safe2">
                <input type="text" class="input" id="safe3" name="safe3" placeholder="safe3">
                <input type="text" class="input" id="safe4" name="safe4" placeholder="safe4">
            </div>
        </div>

        <div class="button">
            <input type="submit" name="submit" value="submit">
        </div>
    </form>
</div>

</html>