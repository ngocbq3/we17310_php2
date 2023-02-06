<?php include "header.php" ?>
<article>
    <form action="?ctr=store-product" method="post" enctype="multipart/form-data">

        <input type="text" name="ten_hh" placeholder="Tên sản phẩm" id="">
        <br>
        <input type="number" name="don_gia" id="">
        <br>
        <input type="file" name="hinh" id="">
        <br>
        <button type="submit" name="btnThem">Thêm</button>
    </form>
</article>
<?php include "footer.php" ?>