<main class="catalog  mb ">

    <div class="boxleft">

        <div class="row2">
            <div class="row2 font_title mb">CẢM ƠN</div>
            <div class="box_content form_account" style="text-align:center">
                <h2>Cảm ơn quý khách đã đặt hàng</h2>
            </div>
        </div>
        <?php
            if(isset($bill)&&(is_array($bill))){
                extract($bill);
            }        
        
        ?>

        <div class="row2">
            <div class="row2 font_title mb">THÔNG TIN ĐƠN HÀNG</div>
            <div class="box_content form_account" style="text-align:center">

                <li>Mã đơn hàng:DAM-<?=$bill['id'];?></li>
                <li>Ngày đặt hàng: <?=$bill['ngaydathang']?></li>
                <li>Tổng đơn hàng: <?=$bill['total']?></li>
                <li>Phương thức thanh toán: <?=$bill['bill_pttt']?></li>
            </div>
        </div>


        <div class="row2">
            <div class="row2 font_title mb">THÔNG TIN ĐẶT HÀNG</div>
            <div class="box_content form_account">

                <table>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?=$bill['bill_name'];?></td>
                    </tr>

                    <tr>
                        <td>Địa chỉ</td>
                        <td><?=$bill['bill_address'];?></td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td><?=$bill['bill_email'];?></td>
                    </tr>

                    <tr>
                        <td>Điện thoại</td>
                        <td><?=$bill['bill_tel'];?></td>
                    </tr>
                </table>

            </div>
        </div>

        <div class="row2">
            <div class="row2 font_title ">
                <h1>CHI TIẾT GIỎ HÀNG</h1>
            </div>
            <div class="row2 form_content">
                <div class="row2 mb10 formds_loai">
                    <table>
                       
                        <?php
                            bill_chi_tiet($billct);
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="boxright">
        <?php include "view/boxright.php"; ?>
    </div>

</main>