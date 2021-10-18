<?php
    //Nhung 2 file php vao login.php
    require_once "config.php";
    require_once "session.php";

    //Chi thuc hien khi request_metod = post, va bien submit da duoc tao
    // Hay da an submit
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        //Co san ham password_hash($password,PASSWORD_BCRYPT);

        //Tao prepare state
        $stmt = $conn->prepare('SELECT * FROM login WHERE userName = ? AND passWord = ?');
        $note = $username;
        $stmt->bindParam(1,$username);
        $stmt->bindParam(2,$password);
        $stmt->execute();
        //Lay du liue ra
        $row = $stmt->fetch();

        //Thiet lap kieu du lieu tra ve
        if (empty($row)) echo "fail<br/>";
        if (!empty($row)) {
            echo "Login succes<br/>";
            $_SESSION["userid"] = $row["ID"];
            $_SESSION["user"] = $row;

            header("location: ./welcom.php");
            exit;
        }
        //echo $row['userName']. "<br/>".$row['passWord'];
    }
    $conn = NULL;
?>