<?php
    $servername = "localhost";
    $dbname = "nhatro";
    $username = "root";
    $passwordDB = "";//password of database

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",
        $username,$passwordDB);
        //Set char_set ve utf8 de hien thi tieng Viet
        $conn->exec("set names utf8");
        //Set PDO erro
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully <br/>";
    } catch(PDOException $e)
    {
        echo "Connection failed: ".$e->getMessage();
    }
    
?>