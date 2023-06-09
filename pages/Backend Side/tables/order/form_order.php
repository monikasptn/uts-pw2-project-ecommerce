<?php 
require_once '../../dbkoneksi.php';
?>

<?php 
    // cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
    $_id = isset($_GET['id']) ? $_GET['id'] : null;
    if(!empty($_id)){
        // ambil data order berdasarkan id
        $sql = "SELECT * FROM `order` WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_id]);
        $row = $st->fetch();
    }else{
        // jika tidak ada parameter id pada URL, maka dianggap input data baru
        // inisialisasi variabel $row sebagai array kosong
        $row = [];
    }
?>
            
<form method="POST" action="process_order.php">
  <div class="form-group row">
    <label for="order_number" class="col-4 col-form-label">Order Number</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="order_number" name="order_number" type="text" class="form-control"
        value="<?php if(isset($row['order_number'])) echo $row['order_number']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="date" class="col-4 col-form-label">Date</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="date" name="date" type="date" class="form-control" 
        value="<?php if(isset($row['date'])) echo $row['date']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="qty" class="col-4 col-form-label">Qty</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="qty" name="qty" value="<?php if(isset($row['qty'])) echo $row['qty']; ?>"
        type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="total_price" class="col-4 col-form-label">Total Price</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="total_price" name="total_price" 
        value="<?php if(isset($row['total_price'])) echo $row['total_price']; ?>"
        type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="customer_id" class="col-4 col-form-label">Customer ID</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="customer_id" name="customer_id" 
        value="<?php if(isset($row['customer_id'])) echo $row['customer_id']; ?>"
        type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="product_id" class="col-4 col-form-label">Product ID</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="product_id" name="product_id" 
        value="<?php if(isset($row['product_id'])) echo $row['product_id']; ?>"
        type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">

    <?php
        $button = (empty($_id)) ? "Simpan":"Update"; 
    ?>

      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="<?=$button?>"/>
      <input type="hidden" name="id" value="<?=$_id?>"/>
    </div>
  </div>
</form>
