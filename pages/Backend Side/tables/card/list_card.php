<?php 
require_once '../../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM `card`";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_card.php" role="button">Create Card</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>code</th>
                    <th>Name</th>
                    <th>Discount</th>
                    <th>Member Fee</th>
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
                        <td><?=$row['code']?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['discount']?></td>
                        <td><?=$row['member_fee']?></td>
                        <td>
<a class="btn btn-primary" href="view_card.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="form_card.php?id=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_card.php?id=<?=$row['id']?>"
onclick="if(!confirm('Are you sure to delete this column? <?=$row['code']?>?')) {return false}"
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
