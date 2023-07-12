<?php 
require_once '../../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from product where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM product a
    //INNER JOIN jenis_product b ON a.jenis_product_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM `product` WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUCT ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr><td>SKU</td><td><?=$row['sku']?></td></tr>
        <tr><td>Name</td><td><?=$row['name']?></td></tr>
        <tr><td>Purchase Price</td><td><?=$row['purchase_price']?></td></tr>
        <tr><td>Sell Price</td><td><?=$row['sell_price']?></td></tr>
        <tr><td>Stock</td><td><?=$row['stock']?></td></tr>
        <tr><td>Min Stock</td><td><?=$row['min_stock']?></td></tr>
        <tr><td>Product Type ID</td><td><?=$row['product_type_id']?></td></tr>
        <tr><td>Restock ID</td><td><?=$row['restock_id']?></td></tr>
    </tbody>
</table>
