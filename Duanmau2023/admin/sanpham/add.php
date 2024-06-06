<div class="row2">
        <div class="row2 font_title"><h1>THÊM MỚI Sản Phẩm</h1></div>
        <div class="row2 form_content">
          <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
          <div class="row mb10 ">
           <label> Danh Mục </label> 
            <select name="iddm" >
              <?php
                foreach($listdanhmuc as $danhmuc){
                  extract($danhmuc);
                  echo  "<option value=".$id.">".$name."</option>";
                }
              ?>
              
            </select>
           </div>
           <div class="row2 mb10">
            <label>Tên sản phẩm </label> 
            <input type="text" name="tensp" >
           </div>
           <div class="row2 mb10">
            <label>Giá </label> 
            <input type="text" name="giasp">
           </div>

           <div class="row mb10 demo">
            <label>Hình</label> 
            <input type="file" name="hinh" ">
           </div>

           <div class="row mb10 mota"> 
            <label>Mô tả sản phẩm </label> 
            <textarea name="mota"cols="30" rows="10"></textarea>
           </div>          

            

            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
              if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
          </form>
        </div>
      </div>
    </div>
 
