<main class="catalog  mb ">

    <div class="boxleft">
      
        <div class="mb">
            <div class="box_title">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="box_content form_account">
               <form action="index.php?act=dangky" method="POST"> 
                <div class="">
               <h4> Email</h4> 
                <input type="email" name="email">
                </div>
               

                <div class=" ">
               <h4> Tên đăng nhập</h4> 
                <input type="text" name="user">
                </div>
              

                <div class=" ">
               <h4>Mật khẩu</h4>  
                <input type="password" name="pass">
                </div>

                <div class="row mb">
                <input type="submit" name="dangky" value="Đăng Kí">
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