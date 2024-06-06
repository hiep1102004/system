<?php require "header.php";?>

<?php
$loi = [];

if(isset($_POST['btnsend'])){
    $tensp = $_POST['txttensp'];
    $file = $_FILES['upfile'];
    $gia = $_POST['txtgia'];
    $soluong = $_POST['txtsoluong'];
    $mota = $_POST['txtmota'];
    $madn = $_POST['txtmadn'];
    $hang = $_POST['txthang'];
    
    if(empty($tensp)){
        $loi['tensp'] = "Trường bắt buộc điền thông tin";
    }
    
    if($file['error'] != 0){
        $loi['file'] = "File bị lỗi";
    }
    
    if(empty($gia)){
        $loi['gia'] = "Trường bắt buộc điền thông tin";
    }
    
    if(empty($soluong)){
        $loi['soluong'] = "Trường bắt buộc điền thông tin";
    } elseif($soluong < 0){
        $loi['soluong'] = "Số lượng phải là số dương";
    }
    
    if(empty($mota)){
        $loi['mota'] = "Trường bắt buộc điền thông tin";
    }
    
    if(empty($madn)){
        $loi['madn'] = "Trường bắt buộc điền thông tin";
    }
}
?>

<h2>Thêm sản phẩm</h2>

<form action="" method="post" enctype="multipart/form-data">
    <p>
        <input type="text" name="txttensp" placeholder="Tên sản phẩm">
        <span><?php echo (isset($loi['tensp'])) ? $loi['tensp'] : "";?></span>
    </p>
    <p>
        <input type="file" name="upfile">
        <span><?php echo (isset($loi['file'])) ? $loi['file'] : "";?></span>
    </p>
    <p>
        <input type="number" name="txtgia" placeholder="Giá sản phẩm">
        <span><?php echo (isset($loi['gia'])) ? $loi['gia'] : "";?></span>
    </p>
    <p>
        <input type="number" name="txtsoluong" placeholder="Số lượng sản phẩm">
        <span><?php echo (isset($loi['soluong'])) ? $loi['soluong'] : "";?></span>
    </p>
    <p>
        <input type="text" name="txtmota" placeholder="Mô tả sản phẩm">
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
    <input type="submit" value="Thêm" name="btnsend">
</form>

<?php require "footer.php";?>
