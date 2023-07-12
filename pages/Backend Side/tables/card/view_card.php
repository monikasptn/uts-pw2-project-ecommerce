<?php 
require_once '../../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from card where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM card a
    //INNER JOIN jenis_card b ON a.jenis_card_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM `card` WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA CARD ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr><td>Code</td><td><?=$row['code']?></td></tr>
        <tr><td>Name</td><td><?=$row['name']?></td></tr>
        <tr><td>Discount</td><td><?=$row['discount']?></td></tr>
        <tr><td>Member Fee</td><td><?=$row['member_fee']?></td></tr>
    </tbody>
</table>
