<?php 
require_once '../../dbkoneksi.php';
?>
<?php 
   $_order_number = $_POST['order_number'];
   $_date = $_POST['date'];
   $_qty = $_POST['qty'];
   $_total_price = $_POST['total_price'];
   $_customer_id = $_POST['customer_id'];
   $_product_id = $_POST['product_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_order_number; // ? 1
   $ar_data[]=$_date; // ? 2
   $ar_data[]=$_qty;// 3
   $ar_data[]=$_total_price;
   $ar_data[]=$_customer_id;
   $ar_data[]=$_product_id;
   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO `order` (`order_number`,`date`,`qty`,`total_price`,`customer_id`,`product_id`) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id']; // ? 8
    $sql = "UPDATE `order` SET `order_number`=?,`date`=?,`qty`=?,`total_price`=?,`customer_id`=?,`product_id`=?
    WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_order.php');
?>