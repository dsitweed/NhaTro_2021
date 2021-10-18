<?php
    //start the session
    session_start();

    //if the user is already logged -> welcome page
    if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true){
        header("location: welcom.php");
    }
?>