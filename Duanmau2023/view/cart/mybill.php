<main class="catalog  mb ">

    <div class="boxleft">

        

       
        <div class="row2">
            <div class="row2 font_title ">
                <h1>ĐƠN HÀNG CỦA BẠN</h1>
            </div>
            <div class="row2 form_content">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <th>Mẫ đơn hàng</th>
                           
                            <th>Ngày đặt hàng</th>
                            <th>Số lượng</th>
                            <th>Tổng giá trị</th>
                            <th>Tình trạng đơn hàng</th>
                          
                        </tr>
                       
                        <?php
                          if(is_array($listbill)){
                            foreach($listbill as $bill){
                                extract($bill);
                                $ttdh = get_ttdh($bill['bill_status']);
                                $countsp = loadall_cart_count($bill['id']);
                                echo '
                                <tr>
                                    <td>DAM-'.$bill['id'].'</td>
                                  
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$bill['total'].'</td>
                                    <td>'.$ttdh.'</td>
                                </tr>
                                ';
                            }
                          }
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