<!DOCTYPE html>
<html>
 <head>
 <title>DINGGOO - Database Management System</title>
 <link rel="stylesheet" href="style/style.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
 </head>
 <body>
     <!-- include nav -->
 <?php 
 include("halaman/navbar.php");
 ?>
 <div class="hero">
        <div class="txt">
        <div id="wrapper">
 <div id="page-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <h1 class="page-header fs-4">Data Pelanggan</h1>
</div>
</div>
 <div class="row">
 <div class="col-md-3">
 <a href="tambahpelanggan.php" class="btn btn-success">Tambah 
data</a>
 </div>
 <div class="col-md-3"></div>
 <div class="col-md-3"></div>
 <div class="col-md-3">
 <form action="sql/caripelanggan.php" method="post" class="d-flex align-items-center">
 <input type="text" class="form-control" name="nama" placeholder="Masukkan nama disini ... " 
style="width:70%; float:left">
 &nbsp; <input class="btn btn-success" type="submit" value="Cari">
 </form>
 </div>
 </div>
 <div class="row mt-3">
 <br>
 <div class="panel panel-default">
 <div class="panel-body">
 <div class="table table-responsive table-hover">
 <table class="table table-bordered">
 <thead class="table-success">
 <tr>
 <th>#</th>
 <th>Nama</th>
 <th>Alamat</th>
<th>Telp</th>
 <th>Action</th>
 </tr>
 </thead>
 <tbody>
 <?php
 include("sql/koneksi.php");
$nama = $_GET['nama']; // mengambil link ?nama=
//percabangan untuk membuat pencarian
if($nama == ''){
 $query = mysqli_query($koneksi, "SELECT * FROM pelanggan ORDER BY 
id_pelanggan DESC");
 }else{
 $query = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE nama_pelanggan LIKE 
'%$nama%' ORDER BY id_pelanggan DESC");
 }
$ii = 0;
while($data = mysqli_fetch_array($query)){
$ii++; 
 ?>
<tr>
 <td><?php echo $ii ?></td>
 <td><?php echo $data['nama_pelanggan'] ?></td>
 <td><?php echo $data['alamat'] ?></td>
<td><?php echo $data['no_hp'] ?></td>
<td>
 <a class="btn btn-primary btn-sm" href="editpelanggan.php?id=<?php echo 
$data['id_pelanggan'] ?>"><i class="fa fa-pencil"></i> Edit</a>
<a class="btn btn-danger btn-sm" href="sql/hapuspelanggan.php?id=<?php echo 
$data['id_pelanggan'] ?>"><i class="fa fa-trash"></i> Hapus</a>
 </td>
 </tr>
 <?php
 }
 ?>
 </tbody>
 </table>
 </div>
 </div>
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
