<?php
    require_once "config.php";
    require_once "session.php";
    
    //Luu anh vao data image
    if ($_SERVER["REQUIRE_METHOD"] = "POST" && isset($_POST["submit"]))
    {
        var_dump($_FILES);
        //Day anh vao kho image o server
        $src = $_FILES["image"]["tmp_name"];
        $des = "../image/".$_FILES["image"]["name"];
        $save = "./image/".$_FILES["image"]["name"];
        move_uploaded_file($src,$des);
        //Day link va mieu ta cua anh vao database
         if (isset($_POST["soPhong"]))
         {
            $soPhong = $_POST["soPhong"];
         }else $soPhong = "";
         //descript
         if (isset($_POST["alt"]))
         {
            $alt = $_POST["alt"];
         }else $alt = "";
        $stmt = $conn->prepare("INSERT INTO images(image,soPhong,alt) VALUES (?,?,?);");
        $stmt->bindParam(1,$save);
        $stmt->bindParam(2,$soPhong);
        $stmt->bindParam(3,$alt);

        $stmt->execute();
        echo "success";
    }

    //Lay anh tu database
?>