<div class="row2">
        <div class="row2 font_title">
          <h1>DANH SÁCH ĐƠN HÀNG</h1>
        </div>
       <div class="row">
       <form action="index.php?act=listbill" method="post">
                <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
                <input type="submit" name="listok" value="GO">
              
              </form>
       </div>
        <div class="row2 form_content">
          <div class="row2 mb10 formds_loai">
              

            <table>
              <tr>
                <th></th>
                <th>MÃ ĐƠN HÀNG</th>
                <th>kHÁCH HÀNG</th>
                <th>SỐ LƯỢNG HÀNG</th>
                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>THAO TÁC</th>
                <th></th>
              </tr>
              <?php
                foreach($listbill as $bill){
                    extract($bill);
                    $xoabill = "index.php?act=xoabill&id=".$id;
                    $kh=$bill["bill_name"].'
                    <br>'.$bill["bill_email"].'
                    <br>'.$bill["bill_address"].'
                    <br>'.$bill["bill_tel"];
                    $ttdh=get_ttdh($bill['bill_status']);
                    $countsp=loadall_cart_count($bill["id"]);

                   
                    
                    echo ' <tr>
                    <td><input type="checkbox"></td>
                    <td>DAM-'.$bill['id'].'</td>
                    <td>'.$kh.'</td>
                    <td>'.$countsp.'</td>
                    <td><strong>'.$bill["total"].'</strong>VNĐ</td>
                    <td>'.$ttdh.'</td>
                    <td>'.$bill['ngaydathang'].'</td>
                    <td> <a href=""> <input type="button" value="Sửa"></a> <a href="'.$xoabill.'"><input type="button" value="Xóa"></a></td>
                  </tr>';
                }
              ?>
            
            </table>
          </div>

          <div class="row mb10">
            <input type="button" value="CHỌN TẤT CẢ" />
            <input type="button" value="BỎ CHỌN TẤT CẢ" />
            <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN" />
            <a href="index.php?act=addsp"><input type="button" value="NHẬP THÊM" /></a>
          </div>
        </div>
      </div>