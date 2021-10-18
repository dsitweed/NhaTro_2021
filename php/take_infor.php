<?php
    require_once "config.php";//ket noi voi bien $conn
    require_once "session.php";

    $limt = 2;

    $stmt = $conn->prepare("SELECT * FROM images");
    $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->execute();
    echo "hello";
?>