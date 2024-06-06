<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css"  href="css/styple.css">
    <link rel="stylesheet" href="22st.css">
    <style>
       .group {
    border: 1px solid black;
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.product {
    flex-basis: calc(30% - 25px);
    margin-bottom: 20px;
    float: left;
    border: 1px solid black;
    margin-left: 25px;
}

    </style>
</head>
<body>
    <div class="khung">
        <div class="logo">
            <img src="img/b569a7e5628fb74bb42a3bfc128c1d2a.jpg" alt="" width="154">

        </div>
        <div class="menu">
        <ul>
                <li><a href="trangchu.php">TRANG CHỦ</a></li>
                <li><a href="dangky.php">ĐĂNG KÝ</a></li>
                <li><a href="login.php">ĐĂNG NHẬP</a></li>
                <li><a href="quanlysp.php">QUẢN LÝ SP</a></li>  
                <li><a href="them.php">THÊM SP</a></li>                                  
            </ul>   
        </div>
        <div class="banner">
            <img src="img/R.jpg" alt="">

        </div>
        </div>
        <h2>Danh sách sản phẩm</h2>
    <div class="group">
    <div class="product">
        <img src="img/OIP (1).jpg" alt="ASUS ROG Zephyrus G15">
        <div class="info">
            <div class="title">ASUS ROG G15</div>
            <div class="description">ROG  G15 2022 </div>
            <div class="price">30,000,000đ</div>
            <button>mua</button>
        </div>
    </div>
    
    <div class="product">
        <img src="img/81DkONvgRVL._AC_SL1500_.jpg" alt="TAsus ZenBook 14">
        <div class="info">
            <div class="title">Asus ZenBook14</div>
            <div class="description">UX425JA-EB51</div>
            <div class="price">12,800,000₫</div>
            <button>mua</button>
        </div>
    </div>
    
    <div class="product">
        <img src="img/OIP (2).jpg" alt="El MacBook Pro ">
        <div class="info">
            <div class="title">El MacBook Pro</div>
            <div class="description">Ram 8GB/SSD 512GB</div>
            <div class="price">32,000,000đ</div>
            <button>mua</button>
        </div>
    </div>
 </div>
 
    
    
    
    <div style="clear: both;"></div>
        <div id="footer">
            Nguyen Phuong Hoang Hiep

        </div>
        <?php
        
        ?>
</body>
</html>