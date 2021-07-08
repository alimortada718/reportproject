<?php
session_start();
include("db.php");
include("function.php");
if ($_SERVER['request_method'] == "POST")
    //something was posted
    if (!empty($user_name) && !empty($password)) {
        //read from database
        $query = " SELECT * FROM users WHERE user_name='$user_name' limit 1";
      $result =  mysqli_query($con, $query);
      if($result)
{        if ($result && mysqli_num_rows($result) > 0) {
    $user_data = mysqli_fetch_assoc($result);
    if($user_data['password']=== $_password)
    {$_SESSION['user_id']=$user_data['user_id'];
        header("location: index.php");

        die;
    }
}



}





echo "PLEASE enter some valid information!";



    } else {
        echo "PLEASE enter some valid information!";
    }