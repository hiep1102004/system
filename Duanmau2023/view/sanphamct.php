<main class="catalog  mb ">

    <div class="boxleft">
        <?php
        extract($onesp);
        ?>
        <div class="mb">
            <div class="box_title">Sản Phẩm Chi Tiết</div>
            <div class="box_content">
                <?php
                $img = $img_path . $img;
                echo ' <div class="row mb spct"><img src="' . $img . '" height="300px"></div>';
                echo $mota;
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanfrom.php", {
                    idpro: <?= $id ?>
                });
            });
        </script>
        <div class="mb" id="binhluan">


        </div>
        <!-- <div class="box_search">
                <form action="" method="POST">
                    <input type="hidden" name="idpro" value="<?= $id ?>">
                    <input type="text" name="noidung" >
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
            </div> -->


        <div class="mb">
            <div class="box_title">Sản Phẩm Cùng Loại</div>
            <div class="box_content">
                <?php
                foreach ($sp_cung_loai as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=sanphamct&idsp" . $id;
                    echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                }
                ?>
            </div>
        </div>
    </div>
    
    <div class="boxright">
        <?php include "boxright.php"; ?>
    </div>
</main>
<!-- BANNER 2 -->