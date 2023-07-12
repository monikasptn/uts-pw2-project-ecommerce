<?php 
require_once '../../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from order where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM order a
    //INNER JOIN jenis_order b ON a.jenis_order_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM `order` WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA ORDER ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr><td>Order Number</td><td><?=$row['order_number']?></td></tr>
        <tr><td>Date</td><td><?=$row['date']?></td></tr>
        <tr><td>Qty</td><td><?=$row['qty']?></td></tr>
        <tr><td>Total Price</td><td><?=$row['total_price']?></td></tr>
        <tr><td>Customer ID</td><td><?=$row['customer_id']?></td></tr>
        <tr><td>Product ID</td><td><?=$row['product_id']?></td></tr>
    </tbody>
</table>
