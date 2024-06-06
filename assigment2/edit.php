<?php require 'header.php';?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql_hang="select *from product where Product_id=$id";
    $ketqua = $conn->query($sql_hang);
    $row=$ketqua->fetch_assoc();

    ?>
<h2>cap nhat san phẩm</h2>

<form action="" method="post" enctype="multipart/form-data">
    <p>
        <input type="text" name="txttensp" placeholder="Tên sản phẩm" value="<?php echo $row['Product_name'];?>">
        <span><?php echo (isset($loi['tensp'])) ? $loi['tensp'] : "";?></span>
    </p>
    <p>
        <img src="img/<?php echo $row['image'];?> "alt="" width="300px">
        <input type="file" name="upfile">
        <span><?php echo (isset($loi['file'])) ? $loi['file'] : "";?></span>
    </p>
    <p>
        <input type="number" name="txtgia" placeholder="Giá sản phẩm"  value="<?php echo $row['price'];?>">
        <span><?php echo (isset($loi['gia'])) ? $loi['gia'] : "";?></span>
    </p>
    <p>
        <input type="number" name="txtsoluong" placeholder="Số lượng sản phẩm"  value="<?php echo $row['quantity'];?>">
        <span><?php echo (isset($loi['soluong'])) ? $loi['soluong'] : "";?></span>
    </p>
    <p>
        <input type="text" name="txtmota" placeholder="Mô tả sản phẩm"  value="<?php echo $row['Description'];?>">
        <span><?php echo (isset($loi['mota'])) ? $loi['mota'] : "";?></span>
    </p>
    <p>
        <input type="text" name="txtmadn" placeholder="Mã doanh nghiệp">
        <span><?php echo (isset($loi['madn'])) ? $loi['madn'] : "";?></span>
    </p>
    <p>
        <select name="txthang">
            <?php
            $sql_hang = "SELECT * FROM brands";
            $ketqua = $conn->query($sql_hang);
            if($ketqua->num_rows > 0){
                while($row = $ketqua->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row['brand_id'];?>"><?php echo $row['brand_name'];?></option>
                    <?php
                }
            }
            ?>
        </select>
    </p>
    <input type="submit" value="Cập nhật" name="btnsend">
 </form>
    
    <?php

}else{
    header("location: quanlysp.php");
}
?>
<?php require 'footer.php';?>