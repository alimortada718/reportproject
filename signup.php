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
        <h1> THE SIGNUP FORM</h1>

        <form class="form" action="usersignup.php" method="post">
            <input id="text" id="fag" name="fag" placeholder="firstname"><br><br>
            <input id="text" name="password" placeholder="password"><br><br>
            <input type="submit" name="submit" value="signup">

            <!-- <div id="thesign">
                    <a href="index.php"> CLICK TO LOGIN</a>
                </div> -->
        </form>

    </div>

</div>

</html>