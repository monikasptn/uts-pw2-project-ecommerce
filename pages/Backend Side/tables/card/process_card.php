<?php 
require_once '../../dbkoneksi.php';
?>
<?php 
   $_code = $_POST['code'];
   $_name = $_POST['name'];
   $_discount = $_POST['discount'];
   $_member_fee = $_POST['member_fee'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_code; // ? 1
   $ar_data[]=$_name; // ? 2
   $ar_data[]=$_discount;// 3
   $ar_data[]=$_member_fee;
   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO `card` (`code`,`name`,`discount`,`member_fee`) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id']; // ? 8
    $sql = "UPDATE `card` SET `code`=?,`name`=?,`discount`=?,`member_fee`=?,
    WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_card.php');
?>