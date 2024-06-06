<?php
    if(is_array(($sanpham))){
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
      $hinh= "<img src='".$hinhpath."' height='80px'>";
    }else{
      $hinh = "no photo";
    }
?>
<div class="row2">
        <div class="row font_title"><h1>CẬP NHẬT LOẠI HÀNG HÓA</h1></div>
        <div class="row form_content">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row2 mb10">
            <select name="iddm" >
                  <option value="0" selected>--Chọn--</option>
              <?php
                foreach($listdanhmuc as $danhmuc){
                  
                  if($iddm==$id){
                    echo  "<option value=".$danhmuc['id']." selected>".$danhmuc['name']."</option>";
                 
                }else  echo  "<option value=".$danhmuc['id'].">".$danhmuc['name']."</option>";
                }
              ?>
            </select>
            </div>

            <div class="row2 mb10">
            <label>Tên sản phẩm </label> 
              <input type="text" name="tensp" value="<?=$name?>">
            </div>

            <div class="row2 mb10">
            <label>Giá </label> 
              <input type="text" name="giasp" value="<?=$price?>"/>
            </div>

            <div class="row mb10 demo">
            <label>Hình</label> 
              <input type="file" name="hinh" />
              <?=$hinh?>
            </div>

            <div class="row mb10 mota">
            <label>Mô tả sản phẩm </label> 
             <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
            </div>

            <div class="row mb10">
              <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập Nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
              if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
          </form>
        </div>
      </div>
    </div>
 
