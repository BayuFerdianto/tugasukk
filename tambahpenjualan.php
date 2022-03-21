<!DOCTYPE html>
<html>
 <head>
 <title>DINGGOO - Database Management System</title>
 <!-- ------------------------- MEMASUKKAN STYLE ------------------------- -->
 <!-- <link href="style/css/bootstrap.min.css" rel="stylesheet">
 <link href="style/css/metisMenu.min.css" rel="stylesheet">
 <link href="style/css/startmin.css" rel="stylesheet">
 <link href="style/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
 <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="style/style.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <!-- ------------------------- MEMASUKKAN STYLE ------------------------- -->
 </head>
 <body>
 <!-- MEMASUKKAN BAGIAN HEADER DAN SIDEBAR
 YANG DISIMPAN DI FOLDER HALAMAN
 AGAR TIDAK BERULANG SAAT MENGGANTI -->
 <?php 
 include("halaman/navbar.php");
 ?>
 <!-- -------------------------------------------------------------------------- -->
 <div class="hero">
        <div class="txt">
        <div id="wrapper">
 <div id="page-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <h1 class="page-header">Tambah Pelanggan</h1>
 </div>
 </div>
 <div class="row mt-3">
 <br>
 <div class="panel panel-default">
 <div class="panel-heading">
 <b>Masukkan data dibawah</b>
 </div>
<!-- /.panel-heading -->
<div class="panel-body">
 <form action="sql/simpanpenjualan.php" method="post">
 <div class="form-group">
 <label>No Transaksi</label>
 <input type="number" class="form-control" name="notransaksi" placeholder="Masukkan nama" 
required>
 </div>
 <div class="form-group">
 <label>No Meja</label>
 <input type="number" class="form-control" name="nomeja" placeholder="Masukkan 
harga" required>
 </div>
 <div class="form-group">
 <label>Tanggal</label>
 <input type="date" class="form-control" name="tanggal" placeholder="Masukkan 
tanggal" required>
 </div>
 <div class="form-group">
 <label>Nama Pelanggan</label>
 <input type="text" class="form-control" name="namapell" placeholder="Masukkan 
Kode (Berupa angka)" required>
 </div>
 <div class="form-group">
 <label>Nama Produk</label>
 <input type="text" class="form-control" name="namaproduk" placeholder="Masukkan 
Kode (Berupa angka)" required>
 </div>
 <div class="form-group">
 <label>Jumlah Produk</label>
 <input type="text" class="form-control" name="jmlproduk" placeholder="Masukkan 
Kode (Berupa angka)" required>
 </div>
 <div class="form-group">
 <label>Harga</label>
 <input type="number" class="form-control" name="harga" placeholder="Masukkan 
Kode (Berupa angka)" required>
 </div>
 <div class="form-group">
 <p align="right"><input type="submit" class="btn btn-primary" value="Simpan 
data"></p>
 </div>
 </form>
 </div>
 <!-- /.panel-body -->
 </div>
 </div>
 </div>
 </div>
 </div>
        </div>
 </div>
 
 <!-- ------------------------- MEMASUKKAN STYLE javascript (tidak wajib)------------------------- -->
 <script src="app/script.js"></script>
 </body>
</html>