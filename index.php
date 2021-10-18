<?php
    require_once "./php/config.php";//ket noi voi bien $conn
    require_once "./php/session.php";
    
    $limit = 100;//xac dinh so thang load ra
    $stmt = $conn->prepare("SELECT * FROM images LIMIT $limit");
    $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->execute();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./image/icon.png">
    <script src="https://kit.fontawesome.com/ed79b0eca0.js" crossorigin="anonymous"></script>
    <title>Home page</title>
</head>
<body>
<div class="header">
    <div class="logo_container">
        <div class="logo_image">
            <img src="./image/icon.png" alt="Logo" class="logo">
        </div>
        <div class="logo_name">CONNECT</div>
    </div>
    
    
    <div class="login_container">
        <form action="./php/login.php" method="post">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" name="submit" value="Submit"><strong>Login</strong></button>
        </form>
    </div>
</div>
<div class="navbar">
    <a href="#">Home</a>
    <a href="#">Link1</a>
    <a href="#">Link2</a>
</div>
<!--Anh toan cuc -->
<div class="desc">
    <img src="" alt="">
</div>

<div class="row">
    <!--div left -->
    <div class="side">
        <h2>Phòng đẹp</h2><br>
        <video  width="100%" controls>
            <button oncl></button>
            <source src="./image/37674720620192954131.mp4">
        </video>
    </div>

    <!--Main -->
    <div class="main">
        <div class="empty_room">
            <?php echo "Số phòng còn trống: $limit"?>
            
        </div>
        
        <?php
                while ($result = $stmt->fetch())
                {
                    echo '
                    <div class="output_data">
                        <div class="col_image">
                            <img src='.$result['image'].' style=" width: 100%;">
                        </div>
                        <div class="col_detail">
                            <p>Phòng số: '.$result['soPhong'].'</p><br>
                             <p>'.$result['alt'].'</p><br>
                        </div>
                    </div>';
                    
                }
        ?>
        
    </div>
</div>

<div class="footer">
    <div class="about">
       <h2>Về Chúng Tôi</h2>
       <li>Khu nhà trọ gần khu công nghiệp Quang Minh</li><br>
       <a href=""><i class="fab fa-facebook-square fa-2x" style="color:blue;"></i></a>
       <a href=""><i class="fab fa-twitter-square fa-2x" style="color: black"></i></a>
       <a href=""><i class="fab fa-instagram-square fa-2x" style="color: black;"></i></a>
       <a href=""><i class="fab fa-youtube fa-2x" style="color: red;"></i></a>
    </div>
    <div class="plus">
        <h2>Đường Dẫn</h2>
        <li>Trang chủ</li>
    </div>
    <div class="contact">
    <h2>Thông Tin Liên Hệ</h2>
    <ul class="info">
        <li>
            <span><i class="fa fa-map-marker"></i></span>
            <span>Quang Minh<br />
                Mê Linh, thành phố Hà Nội<br />
                Việt Nam</span>
        </li>
        <li>
            <span><i class="fa fa-phone"></i></span>
            <p><a href="#" >+84 0987 984 542</a>
                <br />
                <a href="#">+84 0395 045 958</a></p>
        </li>
        <li>
            <span><i class="fa fa-envelope"></i></span>
            <p><a href="#">diachiemail@gmail.com</a></p>
       </li>
    </ul>
    </div>
    <div class="copyright" style="text-align: left;">
        <li><i class="far fa-copyright"></i> 
            2021 Copy right: Nguyễn Văn Kỳ 
            <a href="https://github.com/dsitweed" target="_blank"><i class="fab fa-github fa-lg"></i></a>
        </li>
    </div>
</div>

<!--Script -->


</body>
</html>