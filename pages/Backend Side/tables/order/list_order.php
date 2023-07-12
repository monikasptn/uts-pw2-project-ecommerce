<?php 
    require_once '../../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM `order`";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_order.php" role="button">Create Order</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order Number</th>
                    <th>Date</th>
                    <th>Qty</th>
                    <th>Total Price</th>
                    <th>Customer ID</th>
                    <th>Product ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                $nomor  = 1;
                foreach($rs as $row){
                ?>

                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['order_number']?></td>
                        <td><?=$row['date']?></td>
                        <td><?=$row['qty']?></td>
                        <td><?=$row['total_price']?></td>
                        <td><?=$row['customer_id']?></td>
                        <td><?=$row['product_id']?></td>
                        <td>
<a class="btn btn-primary" href="view_order.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="form_order.php?id=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_order.php?id=<?=$row['id']?>"
onclick="if(!confirm('Are you sure to delete this column? <?=$row['order_number']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>

                <?php 
                $nomor++;   
                } 
                ?>
                
            </tbody>
            <a class="btn btn-success" href="../../index.php" role="button">Kembali</a>
        </table>  
