<?php
session_start();
include("includes/db.php");

?>

<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="css/style.css">
</header>
<div class="body">
    <div id="box">
        <img src="images/jimlogo.png" height="45px">
        <img src="images/ALILOGO.png" height="65px">

        <form class="form" action="validation.php" method="post">
            <div>
                <input id="text" id="fag" name="fag" placeholder="firstname"><br><br>
            </div>
            <div>
                <input id="text" name="password" placeholder="password"><br><br>
            </div>
            <div>
                <input type="submit" name="submit" value="login">
                <div id="thesign">
                    <a href="signup.php">SIGNUP</a>
                </div>
            </div>

        </form>
    </div>

</div>

</html>