<main class="catalog  mb ">

    <div class="boxleft">
      
        <div class="mb">
            <div class="box_title">CẬP NHẬT TÀI KHOẢN</div>
            <div class="box_content form_account">
                <?php
                    if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                ?>
               <form action="index.php?act=edit_taikhoan" method="POST"> 
                <div class="">
               <h4> Email</h4> 
                <input type="email" name="email" value="<?=$email?>">
                </div>
               

                <div class=" ">
               <h4> Tên đăng nhập</h4> 
                <input type="text" name="user"  value="<?=$user?>"> 
                </div>
              

                <div class=" ">
               <h4>Mật khẩu</h4>  
                <input type="password" name="pass"  value="<?=$pass?>">
                </div>

                
                <div class=" ">
               <h4>Địa Chỉ</h4>  
                <input type="text" name="address"  value="<?=$address?>">
                </div>

                
                <div class=" ">
               <h4>Điện thoại</h4>  
                <input type="text" name="tel"  value="<?=$tel?>">
                </div>

                <div class="row mb">
                    <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập Nhật">
                <input type="reset" value="Nhập Lại">
                </div>
                </form>
                <h2 class="thongbao"></h2>
                <?php
                    if(isset($thongbao)&& ($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
            </div>
        </div>
       
        
    </div>
    <div class="boxright">
    <?php include "view/boxright.php"; ?>
    </div>
</main>
<!-- BANNER 2 -->