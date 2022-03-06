<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="row p-3">
<div class="col-md-8">
<h2>Belanja Online</h2>
<hr>
<form method="POST" action="Form_belanja.php">
<div class="container">
  <div class="form-group row">
  <label for="costumer" class="col-4 col-form-label">Costumer</label> 
    <div class="col-4">
      <input id="costumer" name="costumer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
    <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="jumlah">Jumlah</label> 
    <div class="col-2">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="Kirim" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</div>
</div>
<div class="col-md-4">
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    Daftar Harga
  </a>
  <a href="#" class="list-group-item list-group-item-action">TV : 4.200.000</a>
  <a href="#" class="list-group-item list-group-item-action">KULKAS : 3.100.000</a>
  <a href="#" class="list-group-item list-group-item-action">MESIN CUCI : 3.800.000</a>
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    Harga Dapat Berubah Setiap Saat
  </a>
</div>
</div>
</form>
</div>
<hr>

<?php
$proses = $_POST['proses'];
$nama_costumer = $_POST['costumer'];
$nama_produk = $_POST['produk'];
$nilai_jumlah = $_POST['jumlah'];

if ($nama_produk=='tv'){
    $produk_nama = "TV";
}elseif ($nama_produk=='kulkas'){
    $produk_nama = "KULKAS";
}elseif ($nama_produk=='mesin'){
    $produk_nama = "MESIN CUCI";
}

if ($nama_produk == 'tv'){
  $total = 4200000;
}elseif($nama_produk == 'kulkas'){
  $total = 3100000;
}elseif($nama_produk == 'mesin'){
  $total = 3800000;
}
$total_harga = $total * $nilai_jumlah;

echo "Nama Costumer : $nama_costumer";
echo "<br/>Pilihan Produk : $produk_nama";
echo "<br/>Jumlah beli : $nilai_jumlah";
echo "<br/>Total Belanja : $total_harga";
?>

</body>
</html>