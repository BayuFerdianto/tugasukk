<!DOCTYPE html>
<html>
 <head>
 <title>TOKOKU - ADMINISTRATOR</title>
 <!-- ------------------------- MEMASUKKAN STYLE ------------------------- -->
 <link rel="stylesheet" href="style/style.css">
 <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



 <!-- ------------------------- MEMASUKKAN STYLE ------------------------- -->
 </head>
 <body>
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
                <h1 class="page-header fs-4">Data Penjualan</h1>
            </div>
        </div>
    <div class="row">
    <div class="col-md-3">
        <a href="tambahbarang.php" class="btn btn-success">Tambah data</a>
    </div>
    <div class="col-md-3"></div>
 <div class="col-md-3"></div>
 <div class="col-md-3">
 <form action="sql/caribarang.php" method="post" class="d-flex align-items-center">
 <input type="text" class="form-control" name="nama" placeholder="Masukkan nama disini ... " 
style="width:70%; float:left">
 &nbsp; <input class="btn btn-success" type="submit" value="Cari">
 </form>
 </div>
 </div>
 <div class="row mt-3">
 <table class="table  table-bordered">
 <thead class="table-success">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Transaksi</th>
        <th scope="col">Meja</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Pelanggan</th>
        <th scope="col">Produk</th>
        <th scope="col">Jumlah Produk</th>
        <th scope="col">Harga</th>
    </tr>
 </thead>
 <tbody>
 <?php
 include("sql/koneksi.php");
$nama = $_GET['nama']; // mengambil link ?nama=
//percabangan untuk membuat pencarian
if($nama == ''){
 $query = mysqli_query($koneksi, "SELECT * FROM penjualan ORDER BY id_penjualan
DESC");
 }else{
 $query = mysqli_query($koneksi, "SELECT * FROM penjualan WHERE nama_pelanggan LIKE 
'%$nama%' ORDER BY id_penjualan DESC");
 }
 $ii = 0;
 while($data = mysqli_fetch_array($query)){
$ii++; 
 ?>
 <tr>
 <td><?php echo $ii ?></td>
<td><?php echo $data['no_transaksi'] ?></td>
 <td><?php echo $data['no_meja'] ?></td>
 <td><?php echo $data['tanggal'] ?></td>
 <td><?php echo $data['nama_pelanggan'] ?></td>
 <td><?php echo $data['nama_produk'] ?></td>
 <td><?php echo $data['jumlah_produk'] ?></td>
 <td><?php echo $data['harga'] ?></td>
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