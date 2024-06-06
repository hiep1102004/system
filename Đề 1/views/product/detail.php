<h2>Chi tiết sản phẩm: <?= $product['name'] ?></h2>

<div class="row">
    <table>
        <tr>
            <th>Trường dữ liệu</th>
            <th>Giá trị</th>
        </tr>
        <tr>
            <td>ID</td>
            <td><?= $product['id'] ?></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><?= $product['name'] ?></td>
        </tr>
        <tr>
            <td>SKU</td>
            <td><?= $product['sku'] ?></td>
        </tr>
        <tr>
            <td>PRICE</td>
            <td><?= $product['price'] ?></td>
        </tr>
    </table>
</div>