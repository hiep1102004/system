<main class="catalog  mb ">

    <div class="boxleft">
      
        <div class="mb">
            <div class="box_title">Quên mật khẩu</div>
            <div class="box_content form_account">
               <form action="index.php?act=quenmk" method="POST"> 
                <div class="">
               <h4> Email</h4> 
                <input type="email" name="email">
                </div>
                <div class="row mb">
                <input type="submit" name="guiemail" value="Gửi">
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