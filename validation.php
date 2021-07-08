<?php
include "includes/db.php";
if (isset($_POST["submit"])) {
    $fag = $_POST["fag"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$fag'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $md5password = md5($password);

    if ($row['username'] == $fag  && $row['password'] == $md5password && $row['auth'] == 0) {
        session_start();
        $_SESSION["loggedin"] = 1;
        $_SESSION["user"] = $fag;

        header("location:scratch.php");
    } elseif ($row['username'] == $fag  && $row['password'] == $md5password && $row['auth'] == 1) {
        session_start();
        $_SESSION["loggedin"] = 1;
        $_SESSION["user"] = $fag;

        header("location:admin.php");
    } else {
        header("location:index.php?wrong='2'");
    }
}