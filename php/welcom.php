<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/welcom.css">
    <link rel="icon" href="../image/icon.png">
    <script src="https://kit.fontawesome.com/ed79b0eca0.js" crossorigin="anonymous"></script>
    <title>Home page</title>
</head>
<body>
<div class="header">
    <div class="logo_container">
        <div class="logo_image">
            <img src="../image/icon.png" alt="Logo" class="logo">
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
    <a href="../index.php">Home</a>
    <a href="#">Link1</a>
    <a href="#">Link2</a>
</div>
<!--Anh toan cuc -->
<div class="desc">
    <img src="" alt="">
</div>

<div class="row">
    <!--div left -->
    <div class="side" style="font-size:20px;">
        <button class="tablinks" onclick="openTab(event, 'chuc-nang-1')" id ="defaultOpen">Đăng thông tin phòng trọ</button>
        <button class="tablinks" onclick="openTab(event, 'chuc-nang-2')">Cập nhật số phòng trọ trống</button>
        <button class="tablinks" onclick="openTab(event, 'chuc-nang-3')">Cập nhật thông tin khác</button>
    </div>

    <!--Main -->
    <div class="main todo tabcontent" id="chuc-nang-1">
    <form action="./image.php" enctype="multipart/form-data" method="post">
        <label for="image" class="file-upload">
            <i class="fas fa-cloud-upload-alt"></i> Đính kèm ảnh
        </label>
        <input type="file" name="image" id="image" required multiple><br>
        <label for="soPhong">Số Phòng</label>
        <input type="text" name="soPhong" id="soPhong" require>
        <label for="alt">Miêu tả</label>
        <input type="text" name="alt" id="alt" require>
        <button name="submit">GỬI DỮ LIỆU</button>
    </form>
    </div>
    <div class=" main tabcontent" id="chuc-nang-2">
        <h2>Test chuc nang 2</h2>
    </div>
    <div class="main tabcontent" id="chuc-nang-3">
        <h2>Test chuc nang 3</h2>
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
<script>
    function openTab(evt, option)
    {
        var i, tabcontent, tablinks;
        //get element - xoa het
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0;i < tabcontent.length; i++)
        {
            tabcontent[i].style.display = "none";
        }
        //get tablinks xoa het o ben tabLinks
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++)
        {
            tablinks[i].className = tablinks[i].className.replace("active", "");           
        }
        //hien thi no ra
        document.getElementById(option).style.display = "block";
        //them active o ben tablinks
        evt.currentTarget.className += " active";
        
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
</body>
</html>