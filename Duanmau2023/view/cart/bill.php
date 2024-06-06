<main class="catalog  mb ">

    <div class="boxleft">
        <form action="index.php?act=billcomfirm" method="post">

            <div class="row2">
                <div class="row2  font_title mb ">
                    <h1>THÔNG TIN ĐẶT HÀNG</h1>
                </div>
                <div class="box_content form_account">


                    <table>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td> <input type="text" name="name" value="<?= $name?>"></td>
                        </tr>

                        <tr>
                            <td>Địa chỉ</td>
                            <td> <input type="text" name="address" value="<?= $address?>"></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?= $email?>"></td>
                        </tr>

                        <tr>
                            <td>Điện thoại</td>
                            <td> <input type="text" name="tel" value="<?= $tel?>"></td>
                        </tr>
                    </table>

                </div>
            </div>


            <div class="row2">
                <div class="row2 font_title mb">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="box_content form_account">

                    <table>
                        <tr>
                            <td><input type="radio" value="1" name="pttt" checked>Trả tiền khi nhận hàng</td>
                            <td><input type="radio" value="2" name="pttt">Chuyển khoản ngân hàng</td>
                            <td><input type="radio" value="3" name="pttt">Thanh toán online</td>
                        </tr>
                    </table>

                </div>
            </div>

            <div class="row2">
                <div class="row2 font_title ">
                    <h1>THÔNG TIN GIỎ HÀNG</h1>
                </div>
                <div class="row2 form_content">
                    <div class="row2 mb10 formds_loai">
                        <table>
                          
                            <?php viewcart(0); ?>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row mb">
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
            </div>
        </form>
    </div>

    <div class="boxright">
        <?php include "view/boxright.php"; ?>
    </div>

</main>