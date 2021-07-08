<?php
session_start();
include("includes/db.php");


if (isset($_POST["submit"])) {
    $fag = $_POST["fag"];
    $password = $_POST["password"];

    $pw = md5($password);
    $sql = "INSERT INTO users (username,password)  VALUES('$fag','$pw') ";

    $result = mysqli_query($conn, $sql);
}