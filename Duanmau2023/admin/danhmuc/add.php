<div class="row2">
        <div class="row2 font_title"><h1>THÊM MỚI LOẠI HÀNG HÓA</h1></div>
        <div class="row2 form_content">
          <form action="index.php?act=adddm" method="post">
            <div class="row2 mb10 form_content_container">
            <label> Mã loại </label> 
              <input type="text" name="maloai" disabled />
            </div>

            <div class="row2 mb10 form_content_container">
            <label>Tên loại </label> 
              <input type="text" name="tenloai" />
            </div>

            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
              if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
          </form>
        </div>
      </div>
    </div>
 
