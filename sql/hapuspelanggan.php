<?php
 include("koneksi.php");
 
 $id = $_GET['id'];
 
 $query = mysqli_query($koneksi,"DELETE FROM pelanggan WHERE id_pelanggan =$id");
 
 if ($query){
 echo"<script> alert ('Data telah terhapus');window.location='../datapelanggan.php?nama='</script>"; 
 }else{
 echo"Gagal menghapus data";
 }
 ?>