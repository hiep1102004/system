<h2>Danh sách sản phẩm</h2>

<div class="row">

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>SKU</th>
            <th>Price</th>
            <th>Action</th>
        </tr>

        <?php foreach ($productAll as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['sku'] ?></td>
                <td><?= $item['price'] ?></td>
                <td>
                    <a href="/?act=ctsp&id=<?= $item['id'] ?>" class="btn btn-primary">Xem chi tiết</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>