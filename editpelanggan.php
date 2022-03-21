<!DOCTYPE html>
<html>
 <head>
 <title>TOKOKU - ADMINISTRATOR</title>
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
 <h1 class="page-header">Edit Pelanggan</h1>
 </div>
 </div>
 <div class="row mt-3">
 <br>
 <?php
 include("sql/koneksi.php");
 $id = $_GET['id'];
 $query = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id_pelanggan ='$id'");
 $data = mysqli_fetch_array($query);
 ?>
 <div class="panel panel-default">
 <div class="panel-heading">
 <b>Pastikan data sudah benar</b>
 </div>
 <!-- /.panel-heading -->
 <div class="panel-body">
 <form action="sql/updatepelanggan.php?id=<?php echo $data['id_pelanggan'] ?>" 
method="post">
 <div class="form-group">
 <label>Nama</label>
 <input type="text" class="form-control" name="nama" placeholder="Masukkan nama"
value="<?php echo $data['nama_pelanggan'] ?>" required>
 </div>
 <div class="form-group">
 <label>Alamat</label>
 <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat" 
value="<?php echo $data['alamat'] ?>" required>
 </div>
 <div class="form-group">
 <label>No Telp</label>
 <input type="number" class="form-control" name="telp" placeholder="Masukkan telp" 
value="<?php echo $data['no_hp'] ?>" required>
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
 
 <script src="app/script.js"></script>
 </body>
</html>