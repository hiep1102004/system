<main class="catalog  mb ">
    <div class="boxleft">
        <div class="row2">
            <div class="row2 font_title mb"><h1>Giỏ Hàng</h1></div>
            <div class="box_content">
                <div class="row2 form_content">
                    <div class="row2 mb10 formds_loai">
                        <table>


                            <?php
                          viewcart(1);
                            ?>


                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row2 mb10 form_account">
            <a href="index.php?act=bill"><input type="submit" value="Tiếp TỤC ĐẶT HÀNG"></a> <a href="index.php?act=delcart"><input type="submit" value="Xóa Giỏ HÀNG"></a>
        </div>

    </div>
    <div class="boxright">
        <?php include "view/boxright.php"; ?>
    </div>
</main>
<!-- BANNER 2 -->