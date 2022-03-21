<?php
include("koneksi.php");
$nama = $_POST['notransaksi'];
$harga = $_POST['nomeja'];
$tgl = $_POST['tanggal'];
$supplier = $_POST['namapell'];
$status = $_POST['namaproduk'];
$jml = $_POST['jmlproduk'];
$harga1 = $_POST['harga'];
$query = ("INSERT INTO penjualan(no_transaksi,no_meja,tanggal,nama_pelanggan,nama_produk,jumlah_produk,harga) 
VALUES('$nama','$harga','$tgl','$supplier','$status','$jml', '$harga1')");
$sql = mysqli_query($koneksi, $query);
if ($sql){
 echo"<script>alert('Data berhasil ditambahkan');
 window.location='../datapenjualan.php?nama='</script>";
}else{
 echo"data gagal ditambahkan";
}
?>