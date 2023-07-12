<?php 
    require_once '../../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM `product`";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_product.php" role="button">Create Product</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SKU</th>
                    <th>Name</th>
                    <th>Purchase Price</th>
                    <th>Sell Price</th>
                    <th>Stock</th>
                    <th>Min Stock</th>
                    <th>Product Type ID</th>
                    <th>Restock ID</th>
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
                        <td><?=$row['sku']?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['purchase_price']?></td>
                        <td><?=$row['sell_price']?></td>
                        <td><?=$row['stock']?></td>
                        <td><?=$row['min_stock']?></td>
                        <td><?=$row['product_type_id']?></td>
                        <td><?=$row['restock_id']?></td>
                        <td>
<a class="btn btn-primary" href="view_product.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="form_product.php?id=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_product.php?id=<?=$row['id']?>"
onclick="if(!confirm('Are you sure to delete this column? <?=$row['sku']?>?')) {return false}"
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
