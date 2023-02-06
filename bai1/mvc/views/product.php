<?php include "header.php" ?>
<article>
    <table border="1">
        <tr>
            <th>#ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Hình</th>
            <th>
                <a href="?ctr=add-product">Thêm</a>
            </th>
        </tr>
        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?= $product['ma_hh'] ?></td>
                <td><?= $product['ten_hh'] ?></td>
                <td><?= $product['don_gia'] ?></td>
                <td>
                    <img src="images/<?= $product['hinh'] ?>" width="110" alt="">
                </td>
                <td>Sửa/Xóa</td>
            </tr>
        <?php endforeach ?>
    </table>
</article>
<?php include "footer.php" ?>