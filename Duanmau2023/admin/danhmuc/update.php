<?php
    if(is_array(($dm))){
        extract($dm);
    }
?>
<div class="row2">
        <div class="row2 font_title"><h1>CẬP NHẬT LOẠI HÀNG HÓA</h1></div>
        <div class="row2 form_content">
          <form action="index.php?act=updatedm" method="post">
            <div class="row2 mb10">
            <label> Mã loại </label>
              <input type="text" name="maloai" disabled />
            </div>

            <div class="row2 mb10">
            <label>Tên loại </label>  
              <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>"/>
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                <input type="submit" name="capnhat" value="Cập Nhật">
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
 
