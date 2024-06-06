<?php require 'header.php';?>
<h2>Danh Sách sản phẩm</h2>
<a href="add.php">thêm chuyến bay</a>
<table width="100%" border="1">
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>image</th>
        <th>price</th>
        <th>số lượng</th>
        <th>mô tả</th>
        <th>tên hãng</th>
        <th colspan="2" >HĐ</th>
    </tr>
    <?php
    $sql="select * from product Inner Join brands on product.brand_id = brands.brand_id";
    $ketqua=$conn->query($sql);
    if($ketqua->num_rows>0){
        while($row=$ketqua->fetch_assoc()){
?>

    <tr>
        <td><?php echo $row['Product_id'];?></td>
        <td><?php echo $row['Product_name'];?></td>
        <td><img src="img/<?php echo $row['image'];?>" alt=""></td>
        <td><?php echo $row['price'];?></td>
        <td><?php echo $row['quantity'];?></td>
        <td><?php echo $row['Description'];?></td>
        <td><?php echo $row['brand_name'];?></td>
        <td><a href="edit.php?id=<?php echo $row['Product_id'];?>">sửa</a></td>
        <td><a onclick="return confirm('ban co chac muốn xóa')" href="del.php?id=<?php echo $row['Product_id'];?>">xóa</a></td>
    </tr>
    <?php
        }
    }
    ?>
</table>
<?php require 'footer.php';?>
<style>
    img{
        width: 200px;
    }
</style>