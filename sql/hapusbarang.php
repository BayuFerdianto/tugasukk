<?php
 include("koneksi.php");
 
 $id = $_GET['id'];
 
 $query = mysqli_query($koneksi,"DELETE FROM produk WHERE id_produk = $id");
 
 if ($query){
 echo"<script> alert ('Data telah terhapus');window.location='../databarang.php?nama='</script>"; 
 }else{
 echo"Gagal menghapus data";
 }
 
?>