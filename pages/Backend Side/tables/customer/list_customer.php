<?php 
    require_once '../../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM `customer`";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_customer.php" role="button">Create Customer</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Card ID</th>
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
                        <td><?=$row['name']?></td>
                        <td><?=$row['gender']?></td>
                        <td><?=$row['phone']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['address']?></td>
                        <td><?=$row['card_id']?></td>
                        <td>
<a class="btn btn-primary" href="view_customer.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="form_customer.php?id=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_customer.php?id=<?=$row['id']?>"
onclick="if(!confirm('Are you sure to delete this column? <?=$row['name']?>?')) {return false}"
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
