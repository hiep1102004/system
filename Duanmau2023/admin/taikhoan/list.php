<div class="row2">
        <div class="row2 font_title mb">
          <h1>DANH SÁCH TÀI KHOẢN</h1>
        </div>
        <div class="row2 form_content">
          <div class="row2 mb10 formds_loai">
            <table>
              <tr>
                <th></th>
                <th>MÃ TK</th>
                <th>TÊN ĐĂNG NHẬP</th>
                <th>MẬT KHẨU</th>
                <th>EMAIL</th>
                <th>ĐỊA CHỈ</th>
                <th>ĐIỆN THOẠI</th>
                <th>VAI TRÒ</th>
                <th></th>
              </tr>
              <?php
                foreach($listtaikhoan as $taikhoan){
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=".$id;
                    $xoatk = "index.php?act=xoatk&id=".$id;

                    echo ' <tr>
                    <td><input type="checkbox"></td>
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$pass.'</td>
                    <td>'.$email.'</td>
                    <td>'.$address.'</td>
                    <td>'.$tel.'</td>
                    <td>'.$role.'</td>
                    <td> <a href="'.$suatk.'"> <input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                  </tr>';
                }
              ?>
            
            </table>
          </div>

          <div class="row mb10">
            <input type="button" value="CHỌN TẤT CẢ" />
            <input type="button" value="BỎ CHỌN TẤT CẢ" />
            <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN" />
            <a href="index.php?act=adddm"><input type="button" value="NHẬP THÊM" /></a>
          </div>
        </div>
      </div>